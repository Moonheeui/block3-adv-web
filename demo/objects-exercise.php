<?php

class DeskLamp
{

    private $switch1;
    private $switch2 = 0;
    private $isActive = false;

    public function __construct()
    {
        $this->switch1 = "not active";
    }

    private function getSwitch1()
    {
        return $this->switch1;
    }

    private function setSwitch1($turnOn)
    {
        $this->switch1 = $turnOn;
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

$lamp1 = new DeskLamp();
$lamp1->action("active");
echo $lamp1->ask();
echo $lamp1->isActive() ? "active" : "not active";



// private $angle;
// private $colorTemp;
// private $light;
// private $mode;
