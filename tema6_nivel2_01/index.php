<?php
require "learningresources.php";
/*
Frank Pulido - Tema 6 [PHP Avanzado] - Nivel 2 - Ejercicio 1
ENUNCIADO :
Crea una clase que represente un recurso didáctico de esta especialidad. Los recursos tendrán que tener un nombre, un tema (que sólo podrá ser PHP, CSS, HTML, SQL, Laravel)
una URL y un tipo de recurso (Archivo, Artículo web, Vídeo). Implementa tanto el tema como el tipo de recurso con enum.
RECURSOS :
https://www.w3schools.in/php8/enums
https://stitcher.io/blog/php-enums
*/


$resource1 = new LearningResource("píldoras informáticas : arrays 2D", Theme::PHP, Support::VIDEO_tutorial);
$resource2 = new LearningResource("w3school : responsiveness", Theme::CSS3, Support::URL_article);
$resource3 = new LearningResource("IT Academy : heading and footer", Theme::HTML5, Support::PDF_documentation);

$resources = [$resource1, $resource2, $resource3];
echo "\n";
echo "Probemos si funcionan los Getters :\n\n";
foreach($resources as $resource) {
echo $resource->getName() . "\n";
echo $resource->getTheme() . "\n";
echo $resource->getSupport() . "\n";
echo "\n";
}

echo "Probemos ahora si funcionan el método Description() :\n\n";
foreach($resources as $resource) {
    echo $resource->Description();
}
echo "\n";


?>