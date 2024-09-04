<?php

require "../../sprint1_tema5_poo2/tema5_nivel3_01/shape.php";
require "../../sprint1_tema5_poo2/tema5_nivel3_01/rectangle.php";
require "../../sprint1_tema5_poo2/tema5_nivel3_01/triangle.php";
require "../../sprint1_tema5_poo2/tema5_nivel3_01/circle.php";
/*
Frank Pulido - Tema 6 [PHP Avanzado] - Nivel 1 - Ejercicio 2
ENUNCIADO :
Haz un programa que utilice al menos un par de constantes mágicas.
RECURSOS :
https://www.w3schools.com/php/php_magic_constants.asp
*/

echo "\n";
echo "Estamos ejecutando el archivo : " . __FILE__ . "\n";
echo "Almacenado en el directorio " . __DIR__ . "\n\n";
echo 'Al usar __FILE__ y __DIR__ para generar el comentario anterior, el directorio estará apuntando al lugar en el que has descargado mi archivo desde GitHub.';
echo "\n";
echo "Vamos a aprovechar el código anteriormente desarrollado para el ejercicio del Tema 5, Nivel 3... Para ello hemos hecho \"require\" de los archivos.\n";
echo "Si no los has descargado con la misma ruta relativa el código a continuación no te funcionará.\n\n";

$base = 6;
$altura = 4;
$triangulo = new Triangle($base, $altura);

echo "Gracias al \"require\" he construido un triángulo de base=6 y altura=4 con el constructor de la Clase TRIANGLE definida en el ejercicio anterior.\n";
echo "Invoquemos a continuación la función how() definida para la Clase \"Triangle\" en el mencionado ejercicio, la cual usa la magic constant __CLASS__ :\n\n";
echo '$triangulo->how() arroja este output : ';
echo $triangulo->how();
echo $triangulo->area();
echo "\n\n";
?>