<?php
require "car.php";
/*
Frank Pulido - Tema 6 [PHP Avanzado] - Nivel 2 - Ejercicio 2
ENUNCIADO :
Implementa una clase Car que tenga información sobre un coche (marca, matrícula, tipos de combustible, velocidad máxima).
Además, implementa un Trait llamado Turbo que tenga un método boost() que muestre un mensaje "Se ha iniciado el turbo". Usa este método desde la clase Car.
RECURSOS :
https://www.w3schools.com/php/php_oop_traits.asp
https://www.php.net/manual/es/language.oop5.traits.php
https://www.php.net/manual/en/language.namespaces.basics.php
https://aschmelyun.com/blog/the-difference-between-traits-interfaces-and-abstract-classes-in-php/
*/

/*
class Car {
    // Atributos de la clase
    private $brand;
    private $nameplate;
    private $fuel = [];
    private $maxSpeed;

    // Constructor
    function __construct($brand, $nameplate, $fuel, $maxSpeed) {
        $this->brand = $brand;
        $this->nameplate = $nameplate;
        $this->fuel = $fuel;
        $this->maxSpeed = $maxSpeed;
    }

    // Getters

    public function getBrand() {
        return $this->brand;
    }

    public function getNameplate() {
        return $this->nameplate;
    }

    public function getFuel() {
        return $this->fuel;
    }

    public function getMaxSpeed() {
        return $this->maxSpeed;
    }

    // Setters

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setNameplate($nameplate) {
        $this->nameplate = $nameplate;
    }

    public function setFuel($fuel) {
        $this->fuel = $fuel;
    }

    public function setMaxSpeed($maxSpeed) {
        $this->maxSpeed = $maxSpeed;
    }

}
*/

$fuel1 = ["gasoline"];
$fuel2 = ["gasoline", "electric"];
$fuel3 = ["diesel"];
$fuel4 = ["electric"];

$car1 = new Car("Mustang", "XXX-666", $fuel1, 200);
$car2 = new Car("Volvo", "YYY-777", $fuel3, 180);
$car3 = new Car("Pegasus", "ZZZ-999", $fuel3, 130);
$car4 = new Car("Tesla", "AAA-111", $fuel4, 150);

echo "\n";
echo "El Trait Turbo tiene un método Boost que usaremos en el Método actionTurbo de la Clase Car (hay que mejorar este ejercicio) :\n";
echo "\n";
$car1->presentation();
echo "\n";
$car1->actionTurbo();
echo "\n";


?>