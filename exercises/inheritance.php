<?php

ini_set('display_errors', 1);

// ex1
class Animal
{
    public function makeSound()
    {
        echo "The animal makes a sound", '<br>';
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "meow", '<br>';
    }
}

// use the classes

$animal = new Animal();
$animal->makeSound();

$cat = new Cat();
$cat->makeSound();

echo "<hr>";

// ex2
class Vehicle
{
    public function drive()
    {
        echo "Driving a vehicle", '<br>';
    }
}

class Car extends Vehicle  // Car is a child of Vehicle
{
    public function drive()
    {
        echo "Reparing a car", '<br>';
    }
}

$vehicle = new Vehicle();
$vehicle->drive();

$car = new Car();
$car->drive();

echo "<hr>";

// ex3
class Shape
{
    public function getArea()
    {
        return 0.0;
    }
}

class Rectangle extends Shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }
}

$shape = new Shape();
$shape->getArea();

$rectangle = new Rectangle(3.0, 10.0);
$area = $rectangle->getArea();
echo "The area of the rectangle is ", $area, '<br>';

echo "<hr>";

// ex4
class Employee
{
    private $salary;

    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    public function work()
    {
        echo "Working as an employee.", '<br>';
    }
    public function getSalary()
    {
        return $this->salary . '<br>';
    }
}

class HRManager extends Employee
{
    public function __construct($salary)
    {
        parent::__construct($salary);
    }

    public function work()
    {
        echo "Managing employees.";
    }

    public function addEmployee()
    {
        echo "Adding new employee";
    }
}

$employee = new Employee(30000);
$employee->work();
echo "Employee salary: " . $employee->getSalary();

$hrManager = new HRManager(60000);
$hrManager->work();
echo "Manager salary: " . $hrManager->getSalary();
$hrManager->addEmployee();

echo "<hr>";

// ex5
class BankAccount
{
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }
    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient balance", '<br>';
        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}

class SavingAccount extends BankAccount
{
    public function __construct($accountNumber, $balance)
    {
        parent::__construct($accountNumber, $balance);
    }
    public function withdraw($amount)
    {
        if ($this->getBalance() - $amount < 100) {
            echo "Minimum balance should be 100", '<br>';
        } else {
            parent::withdraw($amount);
        }
    }
}

echo "Create a Bank Account object (A/c No. BA1234) with initial balance of $500:";
//Create a BankAccount object (A/c No. "BA1234") with initial balance of $500
$BA1234 = new BankAccount("BA1234", 500);

// Deposit $1000 into account BA1234
echo "Deposit $1000 into account BA1234:";
$BA1234->deposit(1000);
echo "New balance after depositing $1000: $" . $BA1234->getBalance();

// Withdraw $600 from account BA1234
echo "Withdraw $600 from account BA1234:";
$BA1234->withdraw(600);
echo "New balance after withdrawing $600: $" . $BA1234->getBalance();

// Create a SavingAccount object (A/c No. SA1234) with initial balance of $500
echo "Create a SavingAccount object (A/c No. SA1234) with initial balance of $500:";
$SA1234 = new SavingAccount("SA1234", 500);

// Withdraw $600 from account SA1234
$SA1234->withdraw(600);
echo "New balance after withdrawing $600: $" . $SA1234->getBalance();

echo "<hr>";

// ex6
class Animal1
{
    public function move()
    {
        echo "Animal moves", '<br>';
    }
}

class Cheetah extends Animal1
{
    public function move()
    {
        echo "Cheetah runs", '<br>';
    }
}

$animal = new Animal1();
$animal->move();

$cheetah = new Cheetah();
$cheetah->move();

echo "<hr>";

// ex7
class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
}

class Employee1 extends Person
{
    private $employeeId;
    private $jobTitle;

    public function __construct($firstName, $lastName, $employeeId, $jobTitle)
    {
        parent::__construct($firstName, $lastName);
        $this->employeeId = $employeeId;
        $this->jobTitle = $jobTitle;
    }

    public function getEmployeeId()
    {
        return $this->employeeId;
    }
    public function getLastName()
    {
        return parent::getLastName() . ", " . $this->jobTitle;
    }
}

$employee1 = new Employee1("John", "Smith", 123, "Manager");
echo $employee1->getFirstName() . " " . $employee1->getLastName() . " (" . $employee1->getEmployeeId() . ")", "<br/>";
$employee2 = new Employee1("Mary", "Jones", 456, "Salesperson");
echo $employee2->getFirstName() . " " . $employee2->getLastName() . " (" . $employee2->getEmployeeId() . ")", "<br/>";

echo "<hr>";

// ex8
class Shape1
{
    public function getPerimeter()
    {
        return 0.0;
    }
    public function getArea()
    {
        return 0.0;
    }
}

class Circle extends Shape1
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }
    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

$radius = 5.0;
$circle = new Circle($radius);
echo "The radius of the circle is ", $radius, '<br>';
echo "The perimeter of the circle is ", $circle->getPerimeter(), '<br>';
echo "The area of the circle is ", $circle->getArea(), '<br>';

$radius2 = 10.0;
$circle2 = new Circle($radius2);
echo "The radius of the circle is ", $radius2, '<br>';
echo "The perimeter of the circle is ", $circle2->getPerimeter(), '<br>';
echo "The area of the circle is ", $circle2->getArea(), '<br>';

echo "<hr>";

// ex9
abstract class Vehicle1
{
    private $make;
    private $model;
    private $year;
    private $fuelType;
    private $fuelEfficiency;

    public function __construct($make, $model, $year, $fuelType, $fuelEfficiency)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->fuelType = $fuelType;
        $this->fuelEfficiency = $fuelEfficiency;
    }

    public function getMake()
    {
        return $this->make;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function getFuelType()
    {
        return $this->fuelType;
    }
    public function getFuelEfficiency()
    {
        return $this->fuelEfficiency;
    }

    abstract function calculateFuelEfficiency();
    abstract function calculateTripDistance();
    abstract function getMaxSpeed();
}

class Truck extends Vehicle1
{
    private $cargoCapacity;

    public function __construct($make, $model, $year, $fuelType, $fuelEfficiency, $cargoCapacity)
    {
        parent::__construct($make, $model, $year, $fuelType, $fuelEfficiency);
        $this->cargoCapacity = $cargoCapacity;
    }
    public function getCargoCapacity()
    {
        return $this->cargoCapacity;
    }
    public function calculateFuelEfficiency()
    {
        return $this->getFuelEfficiency() * (1.0 / (1.0 + ($this->getCargoCapacity() / 1000.0)));
    }
    public function calculateTripDistance()
    {
        return $this->calculateFuelEfficiency() * $this->getFuelEfficiency();
    }
    public function getMaxSpeed()
    {
        return 100;
    }
}

class Motorcycle extends Vehicle1
{
    private $engineSize;

    public function __construct($make, $model, $year, $fuelType, $fuelEfficiency, $engineSize)
    {
        parent::__construct($make, $model, $year, $fuelType, $fuelEfficiency);
        $this->engineSize = $engineSize;
    }
    public function getEngineSize()
    {
        return $this->engineSize;
    }
    public function calculateFuelEfficiency()
    {
        return $this->getFuelEfficiency() * (1.0 / (1.0 + ($this->getEngineSize() / 1000.0)));
    }
    public function calculateTripDistance()
    {
        return $this->calculateFuelEfficiency() * $this->getFuelEfficiency();
    }
    public function getMaxSpeed()
    {
        return 80.0;
    }
}

// Create instances of each vehicle type
$truck = new Truck("Ford", "F-150", 2018, "Diesel", 10.0, 1000);
echo "Truck: ", $truck->getMake();
echo "Truck Model: " . $truck->getModel();
echo "Year: " . $truck->getYear();
echo "Fuel Efficiency: " . $truck->getFuelEfficiency() . " mpg";
echo "Trip Distance: " . $truck->calculateFuelEfficiency() . " miles";
echo "Max Speed: " . $truck->getMaxSpeed() . " mph\n";

$motorcycle = new Motorcycle("Honda", "CBR500R", 2018, "Gasoline", 50.0, 500);
echo "Motorcycle: ", $motorcycle->getMake();
echo "Motorcycle Model: " . $motorcycle->getModel();
echo "Year: " . $motorcycle->getYear();
echo "Fuel Efficiency: " . $motorcycle->getFuelEfficiency() . " mpg";
echo "Trip Distance: " . $motorcycle->calculateFuelEfficiency() . " miles";
echo "Max Speed: " . $motorcycle->getMaxSpeed() . " mph\n";

echo "<hr>";

// ex10
class Employee2
{
    private $name;
    private $address;
    private $salary;
    private $jobTitle;

    public function __construct($name, $address, $salary, $jobTitle)
    {
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
        $this->jobTitle = $jobTitle;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    public function calculateBonus()
    {
        return $this->salary * 0.1;
    }
    public function generatePerformanceReport()
    {
        echo "Performance report for " . $this->name . ":\n";
        echo "Job Title: " . $this->jobTitle . "\n";
        echo "Salary: $" . $this->salary . "\n";
        echo "Bonus: $" . $this->calculateBonus() . "\n";
    }
}

class Manager extends Employee2
{
    private $department;

    public function __construct($name, $address, $salary, $jobTitle, $department)
    {
        parent::__construct($name, $address, $salary, $jobTitle);
        $this->department = $department;
    }

    public function getDepartment()
    {
        return $this->department;
    }
    public function calculateBonus()
    {
        return parent::calculateBonus() + 1000.0;
    }
    public function generatePerformanceReport()
    {
        return "Performance report for " . $this->getName() . ": Good!";
    }
    public function manageProject()
    {
        echo "Manager " . $this->getName() . " is managing a project.";
    }
}

class Developer extends Employee2
{
    private $programmingLanguage;

    public function __construct($name, $address, $salary, $jobTitle, $programmingLanguage)
    {
        parent::__construct($name, $address, $salary, $jobTitle);
        $this->programmingLanguage = $programmingLanguage;
    }

    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    public function calculateBonus()
    {
        // Custom implementation for bonus calculation for developers
        return $this->getSalary() * 0.10;
    }

    public function generatePerformanceReport()
    {
        // Custom implementation for performance report for developers
        return "Performance report for Developer " . $this->getName() . ": Good";
    }

    public function writeCode()
    {
        // Custom method for writing code
        echo "Developer " . $this->getName() . " is writing code in " . $this->programmingLanguage;
    }
}

$manager = new Manager("Avril Aroldo", "1 ABC St", 80000.0, "Manager", 5);
$developer = new Developer("Iver Dipali", "2 PQR St", 72000.0, "Developer", "php");

echo "Manager's Bonus: $" . $manager->calculateBonus();
echo "Developer's Bonus: $" . $developer->calculateBonus();

echo $manager->generatePerformanceReport();
echo $developer->generatePerformanceReport();

$manager->manageProject();
$developer->writeCode();
