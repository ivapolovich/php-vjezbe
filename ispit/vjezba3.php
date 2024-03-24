<?php
// apstraktna klasa

abstract class Vehicle {
    private $brand;

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    // Apstraktna metoda koju konkretne klase moraju implementirati
    abstract public function displayType();
}

class Car extends Vehicle {
    public function displayType() {
        echo "Ovo je automobil marke " . $this->getBrand() . ".\n";
    }
}

class Bicycle extends Vehicle {
    public function displayType() {
        echo "Ovo je bicikl marke " . $this->getBrand() . ".\n";
    }
}

$car = new Car();
$car->setBrand('Toyota');
$car->displayType(); // Ispisuje: Ovo je automobil marke Toyota.

$bicycle = new Bicycle();
$bicycle->setBrand('Trek');
$bicycle->displayType(); // Ispisuje: Ovo je bicikl marke Trek.




?>