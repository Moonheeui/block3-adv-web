<?php

ini_set('display_errors', 1);

// ex1
class Animal
{
    public function makeSound()
    {
        echo "rawr", ' ';
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "meow", '<br>';
    }
}

$testAnimal = new Animal();
$testAnimal->makeSound();

$testCat = new Cat();
$testCat->makeSound();


// ex2
class Vehicle
{
    public function drive()
    {
        echo "Driving a vehicle", ' ';
    }
}

class Car extends Vehicle
{
    public function drive()
    {
        echo "Reparing a car", '<br>';
    }
}

$testVehicle = new Vehicle();
$testVehicle->drive();

$testCar = new Car();
$testCar->drive();


// ex3
class Shape
{
    public function getArea()
    {
        echo "Calculating area of shape", ' ';
    }
}

class Rectangle extends Shape
{
    public function getArea()
    {
        echo "Calculating area of rectangle", '<br>';
    }
}

$testShape = new Shape();
$testShape->getArea();

$testRectangle = new Rectangle();
$testRectangle->getArea();


// ex4
class Employee
{
    public function work()
    {
        echo "Working", ' ';
    }
    public function getSalary()
    {
        echo "Getting paid", '<br>';
    }
}

class HRManager extends Employee
{
    public function work()
    {
        echo "Managing";
    }

    public function addEmployee()
    {
        echo "Adding employee";
    }
}

$testEmployee = new Employee();
$testEmployee->work();
$testEmployee->getSalary();

$testHRManager = new HRManager();
$testHRManager->work();
$testHRManager->addEmployee();


// ex5
class BankAccount
{
    public function deposit()
    {
        echo "Depositing", ' ';
    }
    public function withdraw()
    {
        echo "Withdrawing", '<br>';
    }
}

class SavingAccount extends BankAccount
{
    public function withdraw()
    {
        echo "Withdrawing from saving account", '<br>';
    }
}

$testBankAccount = new BankAccount();
$testBankAccount->deposit();
$testBankAccount->withdraw();

$testSavingAccount = new SavingAccount();
$testSavingAccount->withdraw();


// ex6
class Animal1
{
    public function move()
    {
        echo "moving", ' ';
    }
}

class Cheetah extends Animal1
{
    public function move()
    {
        echo "Running", '<br>';
    }
}

$testAnimal1 = new Animal1();
$testAnimal1->move();


// ex7
class Person
{
    public function getFirstName()
    {
        echo "Getting first name", ' ';
    }
    public function getLastName()
    {
        echo "Getting last name", '<br>';
    }
}

class Employee1 extends Person
{
    public function getEmployeeId()
    {
        echo "Getting first name of employee", ' ';
    }
    public function getLastName()
    {
        echo "Getting last name of employee", '<br>';
    }
}

$testPerson = new Person();
$testPerson->getFirstName() && $testPerson->getLastName();;


// ex8
class Shape1
{
    public function getPerimeter()
    {
        echo "Calculating area of shape", ' ';
    }
}

class Circle extends Shape1
{
    public function getPerimeter()
    {
        echo "Calculating perimeter of rectangle", '<br>';
    }

}

$testShape1 = new Shape1();
$testShape1->getPerimeter();



// ex9
class Vehicle1
{
    public function class()
    {
        echo "Driving a vehicle", ' ';
    }
}

class Car1 extends Vehicle1
{
    public function __construct($model, $dob, $address, $expiration)
    {
        $this->model = $model;
        $this->dob = $dob;
        $this->address = $address;
        $this->expiration = $expiration;
    }
    {
        echo "The model of car is", '<br>';
    }
    public function year()
    {
        echo "Working", ' ';
    }
    public function getSalary()
    {
        echo "Getting paid", '<br>';
    }
}

{
    public function makeSound()
    {
        echo "rawr", ' ';
    }
}


// ex10
class IdCard
{
    protected $name;
    protected $dob;
    protected $address;
    protected $expiration;
    public function __construct($name, $dob, $address, $expiration)
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->expiration = $expiration;
    }

    public function present()
    {
        echo "Id belongs to ", $this->name, " with this expiration date; ", $this->expiration, "<br/>";
    }

    public function renew($duration)
    {
        $this->expiration = $duration;
    }

    public function updateAddress($newAddress)
    {
        $this->address = $newAddress;
    }

    public function cancel()
    {
        $this->expiration = 0;
    }
}