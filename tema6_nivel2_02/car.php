<?php
require "turbo.php";

class Car {
    use Turbo;
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

    // Presentación del coche

    function fuelList () {
        $array = $this->fuel;
        $string = $array[0];
        if (count($array) > 1) {
            for ($i = 1; $i < count($array); $i++) {
                $string = $string . " - " . $array[$i];
            }
        }
        return $string;
    }

    function presentation () {
        echo "Coche marca $this->brand con matrícula $this->nameplate. Combustible : ";
        echo $this->fuelList() . PHP_EOL;
        echo "Velocidad máxima : $this->maxSpeed Km/h." . PHP_EOL;
    }

    // Usaremos la función Trait Turbo

    function actionTurbo() {
        $this->Boost();
        $this->presentation();
    }

}

?>