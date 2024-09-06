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

$fuel1 = ["gasoline"];
$fuel2 = ["gasoline", "electric"];
$fuel3 = ["diesel"];
$fuel4 = ["electric"];

$car1 = new Car("Mustang", "XXX-666", $fuel1, 200);
$car2 = new Car("Volvo", "YYY-777", $fuel2, 180);
$car3 = new Car("Pegasus", "ZZZ-999", $fuel3, 130);
$car4 = new Car("Tesla", "AAA-111", $fuel4, 150);

$cars = [$car1, $car2, $car3, $car4];

echo "\n";
echo "Tenemos el siguiente ARRAY de instancias de la Clase Coche :" . PHP_EOL;
foreach ($cars as $car) {
    $car->presentation();
echo "\n";
}
echo "\n";
echo "El Trait Turbo tiene un método Boost que usaremos en el Método actionTurbo de la Clase Car e incrementaremos la velocidad máxima en 50 Km/h :" . PHP_EOL;
echo "\n";
foreach ($cars as $car) {
    $car->actionTurbo();
echo "\n";
}

?>