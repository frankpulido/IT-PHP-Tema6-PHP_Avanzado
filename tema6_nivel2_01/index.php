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


$resource1 = new LearningResource("The Basics of PHP Form Handling Tutorial | 2023", Theme::PHP, Support::VIDEO_tutorial, "https://www.youtube.com/watch?v=bOqTCDfc7Tk");
$resource2 = new LearningResource("Sesiones en PHP | 2021", Theme::PHP, Support::URL_article, "https://desarrolloweb.com/articulos/sesiones-en-php");
$resource3 = new LearningResource("HTML5 CheatSheet", Theme::HTML5, Support::PDF_documentation, "/files/html5-cheatsheet.pdf");
$resource4 = new LearningResource("Sesiones en PHP : Guía Completa para Principiantes | 2023", Theme::PHP, Support::VIDEO_tutorial, "https://www.youtube.com/watch?v=931_8cUURrs");
$resource5 = new LearningResource("CSS Grid vs Flexbox - Cuando usar uno u otro! | 2022", Theme::CSS3, Support::VIDEO_tutorial, "https://www.youtube.com/watch?v=6qko7Nbe8YA");

$resources = [$resource1, $resource2, $resource3, $resource4, $resource5];
echo "\n";
echo "Probemos si funcionan los Getters :\n\n";
foreach($resources as $resource) {
echo $resource->getName() . PHP_EOL; // Tengo tiempo sin usar PHP_EOL !!
echo $resource->getTheme() . PHP_EOL;
echo $resource->getSupport() . PHP_EOL;
echo $resource->getUrl(). PHP_EOL;
echo "\n";
}

echo "Probemos ahora si funcionan el método Description() :\n\n";
foreach($resources as $resource) {
    echo $resource->Description();
    echo "\n\n";
}
echo "\n";

/*
DEBERES : HACER HTML CON FORMULARIO PARA CREAR BBDD DE RECURSOS DIDÁCTICOS...
Ejemplo :
https://itacademy.barcelonactiva.cat/course/view.php?id=15&section=8
*/

?>