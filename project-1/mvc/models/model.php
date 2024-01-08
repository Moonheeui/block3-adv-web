<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
class connectionObject
{
    public function __construct(public $host, public $username, public $password, public $database)
    {
    }
}

class usrModel
{
    private $mysqli;
    private $connectionObject;
    public function __construct($connectionObject)
    {
        $this->connectionObject = $connectionObject;
    }
    public function connect()
    {
        try {
            $mysqli = new mysqli($this->connectionObject->host, $this->connectionObject->username, $this->connectionObject->password, $this->connectionObject->database);
            if ($mysqli->connect_error) {
                throw new Exception('Could not connect');
            }
            return $mysqli;
        } catch (Exception $e) {
            return false;
        }
    }

    public function selectAll()
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM `models` NATURAL JOIN `brands` NATURAL JOIN `parts` NATURAL JOIN `compatibility` ORDER BY models.modelID ASC;");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectModel()
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM `models` ORDER BY modelID ASC;");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectPart()
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM `parts` ORDER BY partID ASC;");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectBrand()
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM `brands` ORDER BY brandID ASC;");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function selectCompatibility()
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM `compatibility` ORDER BY compatibilityID ASC;");
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            $mysqli->close();
            return $results;
        } else {
            return false;
        }
    }

    public function insertModel($modelName, $partID, $brandID, $compatibilityID, $price, $stock)
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("INSERT INTO models (modelName, partID, brandID, partID, compatibilityID, price, stock) VALUES ('?', '?', '?', '?', '?', '?','?')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function insertPart($partName)
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("INSERT INTO parts (partName) VALUES ('$partName')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function insertBrand($brandName)
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("INSERT INTO brands (brandName) VALUES ('$brandName')");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function selectModelID($id)
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $result = $mysqli->query("SELECT * FROM `models` WHERE modelID = '$id';");
            $row = $result->fetch_assoc();
            $mysqli->close();
            return $row;
        } else {
            return false;
        }
    }

    public function updateModel($id, $modelName, $partID, $brandID, $compatibilityID, $price, $stock)
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("UPDATE models SET modelName = '$modelName', partID = '$partID', brandID = '$brandID', compatibilityID = '$compatibilityID', price = '$price', stock = '$stock' WHERE modelID = '$id';");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }

    public function deleteModel($id)
    {
        $mysqli = $this->connect();
        if ($mysqli) {
            $mysqli->query("DELETE FROM models WHERE modelID = '$id';");
            $mysqli->close();
            return true;
        } else {
            return false;
        }
    }
}
