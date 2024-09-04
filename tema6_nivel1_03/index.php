<?php
declare(strict_types = 1);
require "shape.php";
require "rectangle.php";
require "square.php";
require "triangle.php";
/*
Frank Pulido - Tema 6 [PHP Avanzado] - Nivel 1 - Ejercicio 3
ENUNCIADO :
Sobreescribe alguna de las lógicas de entre todos los métodos mágicos existentes (que no sea __construct)
RECURSOS :
https://www.php.net/manual/es/language.oop5.magic.php
https://medium.com/developers-keep-learning/php-magic-methods-explained-bac7053c007d
https://www.w3schools.com/php/func_simplexml__tostring.asp
*/

echo "\n\n";
echo "Haremos lo mismo que en el ejercicio anterior, pero daremos la información de las figuras geométricas a través de \"echo\" modificando la función mágica __toString().\n";
echo "Usaremos la INTERFACE Shape que contendrá el Método __toString(). Tendremos una Clase parent RECTANGLE y 2 Clases child : SQUARE y TRIANGLE.\n\n";

$rectangle = new Rectangle(2, 2.5);
$square = new Square(3);
$triangle = new Triangle(2, 2.5);

$shapes = [$rectangle, $square, $triangle];

foreach ($shapes as $shape) {
    echo $shape;
    echo "\n\n";
}

?>