<?php

ini_set('display_errors', 1);

class DeskLamp
{
    public $name;
    public $size;
    public $color;
    public $finish;
    public $cableLength = "1.5m";
    private $switch1;
    private $switch2 = 0;
    private $isActive = false; // the lamp on.

    public function __construct($name, $size, $color, $finish, $cableLength)
    {
        $this->name = $name;
        $this->size = $size;
        $this->color = $color;
        $this->finish = $finish;
    }

    public function getCableLength()
    {
        return $this->cableLength;
    }
    public function setCableLength($connection)
    {
        $this->cableLength = $connection;
    }
    public function cableConnect()
    {
        if ($this->cableLength >= "1.5m") {
            echo "connected";
        } else {
            $this->cableLength < "1.5m";
            echo "not connected";
        }
    }
    private function getSwitch1()
    {
        return $this->switch1;
    }
    private function setSwitch1($isActive)
    {
        $this->switch1 = $isActive;
    }
    public function ask()
    {
        return "switch1: " . $this->getSwitch1() . " switch2: " . $this->switch2;
    }
    public function isActive()
    {
        return $this->isActive;
    }
    public function action($data)
    {
        $this->setSwitch1($data);
    }
}

$deskLamp = new DeskLamp("Desk Lamp", "small", "white", "matte", "1.5m");

echo "<h1>Desk Object</h1>";

echo "Name: " . $deskLamp->name . "</br>";
echo "Size: " . $deskLamp->size . "</br>";
echo "Color: " . $deskLamp->color . "</br>";
echo "Finish: " . $deskLamp->finish . "</br>";
echo "Cable Length: " . $deskLamp->cableLength . "</br>";
echo $deskLamp->cableConnect() . "</br>";
echo "</br>";
$deskLamp->action("active");
echo $deskLamp->ask();
echo "</br> Swith Status: ", $deskLamp->isActive() ? "active" : "not active";
