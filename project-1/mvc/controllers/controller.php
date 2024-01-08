<?php

ini_set('display_errors', 1);

include_once "mvc/models/model.php";
include_once 'mvc/controllers/connection.php';

class Controller
{
    private $model;
    public function __construct($connection)
    {
        $this->model = new usrModel($connection);
    }
    public function showAll()
    {
        $models = $this->model->selectAll();
        include 'views/home.php';
    }
    // public function getModel()
    // {
    //     return $this->model->selectModel();
    // }
    public function getPart()
    {
        return $this->model->selectPart();
    }
    public function getBrand()
    {
        return $this->model->selectBrand();
    }
    public function getCompatibility()
    {
        return $this->model->selectCompatibility();
    }

    public function showForm()
    {
        $parts = $this->getPart();
        $brands = $this->getBrand();
        $compatibilities = $this->getCompatibility();
        include 'mvc/views/form.php';
    }

    public function addModel()
    {
        $modelName = $_POST['modelName'];
        $partID = $_POST['partID'];
        $brandID = $_POST['brandID'];
        $compatibilityID = $_POST['compatibilityID'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        if (!$modelName || !$partID || !$brandID || !$compatibilityID || !$price || !$stock) {
            echo "<p>Missing info of Model</p>";
            $this->showForm();
            return;
        } else if ($this->model->insertModel($modelName, $partID, $brandID, $compatibilityID, $price, $stock)) {
            echo "<p>Added a Model: $modelName successfully</p>";
            exit();
        } else {
            echo "<p>Could not add models</p>";
        }
        $this->showAll();
    }

    public function editModel($modelID)
    {
        $modelInfo = $this->model->selectModel($modelID);
        $parts = $this->getPart();
        $brands = $this->getBrand();
        $compatibilities = $this->getCompatibility();
        if ($modelInfo) {
            include 'views/edit-form.php';
        } else {
            echo "<p>Could not find model</p>";
        }
        $this->showAll();
    }

    public function updateModel($modelID, $modelName, $partID, $brandID, $compatibilityID, $price, $stock)
    {
        $modelID = $_POST['modelID'];
        $modelName = $_POST['modelName'];
        $partID = $_POST['partID'];
        $brandID = $_POST['brandID'];
        $compatibilityID = $_POST['compatibilityID'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        if (!$modelID || !$modelName || !$partID || !$brandID || !$compatibilityID || !$price || !$stock) {
            echo "<p>Missing information</p>";
            $this->editModel($modelID);
            return;
        } else if ($this->model->updateModel($modelID, $modelName, $partID, $brandID, $compatibilityID, $price, $stock)) {
            echo "<p>Updated a Model: $modelName successfully</p>";
        } else {
            echo "<p>Could not update the model</p>";
        }
        $this->showAll();
    }

    public function deleteModel($modelID)
    {
        if ($this->model->deleteModel($modelID)) {
            echo "<p>Deleted a Model: $modelID successfully</p>";
        } else {
            echo "<p>Could not delete the model</p>";
        }
        $this->showAll();
    }
}

$connection = new connectionObject($host, $username, $password, $database);
$controller = new Controller($connection);

if (isset($_POST['submit'])) {
    $controller->addModel();
    $controller->showForm();
} else if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['modelID'])) {
    $modelID = $_GET['modelID'];
    $controller->editModel($modelID);
} else {
    $controller->showForm();
}

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['modelID'])) {
    $modelID = $_GET['modelID'];
    $controller->deleteModel($modelID);
}

if (isset($_POST['resubmit'])) {
    $modelID = $_POST['modelID'];
    $modelName = $_POST['modelName'];
    $partID = $_POST['partID'];
    $brandID = $_POST['brandID'];
    $compatibilityID = $_POST['compatibilityID'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $controller->updateModel($modelID, $modelName, $partID, $brandID, $compatibilityID, $price, $stock);
}
