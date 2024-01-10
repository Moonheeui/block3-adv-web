<?php

ini_set('display_errors', 1);

include_once "models/model.php";
include_once 'controllers/connection.php';

class Controller
{
    private $model;
    private $brand;
    private $part;
    private $compatibility;
    public function __construct($connection)
    {
        $this->model = new userModel($connection);
        // $this->brand = new userBrand($connection);
        // $this->part = new userPart($connection);
        // $this->compatibility = new userCompatibility($connection);
    }
    public function showAll()
    {
        $models = $this->model->selectAll();
        include 'views/dashboard.php';
    }
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
        include 'views/form.php';
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
            echo "<p>Missing infomation</p>";
            return;
        } else if ($this->model->insertModel($modelName, $partID, $brandID, $compatibilityID, $price, $stock)) {
            header("Location: index.php?page=dashboard");
            exit();
        } else {
            echo "<p>Could not add models</p>";
        }
    }
    public function addPart()
    {
        $partName = $_POST['partName'];
        if (!$partName) {
            echo "<p>Missing info of Part Name</p>";
            return;
        } else if ($this->part->insertPart($partName)) {
            echo "<p>Added a Part: $partName successfully</p>";
            exit();
        } else {
            echo "<p>Could not add parts</p>";
        }
    }
    public function addBrand()
    {
        $brandName = $_POST['brandName'];
        if (!$brandName) {
            echo "<p>Missing info of Brand Name</p>";
            return;
        } else if ($this->brand->insertBrand($brandName)) {
            echo "<p>Added a Brand: $brandName successfully</p>";
            exit();
        } else {
            echo "<p>Could not add brands</p>";
        }
    }
    public function addCompatibility()
    {
        $compatibilityName = $_POST['compatibilityName'];
        if (!$compatibilityName) {
            echo "<p>Missing info of Compatibility</p>";
            return;
        } else if ($this->compatibility->insertCompatibility($compatibilityName)) {
            echo "<p>Added a Compatibility: $compatibilityName successfully</p>";
            exit();
        } else {
            echo "<p>Could not add compatibilities</p>";
        }
    }
    public function getEditModelByID($modelID)
    {
        $modelInfo = $this->model->selectModelByID($modelID);
        $parts = $this->getPart();
        $brands = $this->getBrand();
        $compatibilities = $this->getCompatibility();
        if ($modelInfo) {
            // print_r($modelInfo);
            include 'views/edit-form.php';
        } else {
            echo "<p>Could not find model</p>";
        }
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
    }

    public function deleteModel($modelID)
    {
        if ($this->model->deleteModel($modelID)) {
            echo "<p>Deleted the Model ID: $modelID successfully</p>";
        } else {
            echo "<p>Could not delete the model</p>";
        }
    }
}

$connection = new connectionObject($host, $username, $password, $database);
$controller = new Controller($connection);


if(isset($_POST['delete'])) {  
        $modelID = $_POST['modelID'];
        $controller->deleteModel($modelID);
}

if(isset($_POST['edit'])) { 
    $modelID = $_POST['modelID'];
    $controller->getEditModelByID($modelID);
}


if (isset($_POST['submit'])) {
    $controller->addModel();
    $controller->showForm();
} else if (isset($_GET['action']) && $_GET['action'] === 'edit' && isset($_GET['modelID'])) {
    // $modelID = $_GET['modelID'];
    $controller->getEditModelByID($modelID);
} else {
    $controller->showForm();
}

// if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['modelID'])) {
//     $modelID = $_GET['modelID'];
//     $controller->deleteModel($modelID);
// }

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


?>