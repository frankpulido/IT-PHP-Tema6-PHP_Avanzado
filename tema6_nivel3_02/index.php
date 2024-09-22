<?php
require "../tema6_nivel2_01/learningresources.php";
require_once '../vendor/autoload.php';
/*
Frank Pulido - Tema 6 [Debugging] - Nivel 3 - Ejercicio 2

Nos piden usar una librería cualquiera instalada a través de Composer en un programa.
Usaré Faker : https://fakerphp.org/
Faker generará datos para las Clase LearningResource del ejercicio 1 del Nivel 2. Ejemplo de instancia :
$resource1 = new LearningResource("The Basics of PHP Form Handling Tutorial | 2023", Theme::PHP, Support::VIDEO_tutorial, "https://www.youtube.com/watch?v=bOqTCDfc7Tk");
*/

echo "\n\n";
echo "Esta vez usamos la librería FAKER para generar los datos de las instancias de los recursos didácticos de la biblioteca";
echo "\n\n";

$faker_data = [];

function dataProvider() : array {
    $dataprovider = [];
    //$faker = Faker\LearningResource::class();
    $faker = Faker\Factory::create();
    for ($i = 0; $i < 10; $i++) {
        $dataprovider[] = new LearningResource($faker->unique()->sentence(), $faker->shuffle(Theme::cases())[0], $faker->shuffle(Support::cases())[0], $faker->url());
        //$dataprovider[] = new LearningResource($faker->unique()->sentence(), Theme::cases()[array_rand(Theme::cases())], Support::cases()[array_rand(Support::cases())], $faker->url());
    }
    return $dataprovider;
}

$faker_data = dataProvider();
var_dump($faker_data);

/*
Uso de array_rand() :
Theme::cases() : array con todos los valores posibles de la clase Theme
    case PHP;
    case SQL;
    case LARAVEL;
    case HTML5;
    case CSS3;
Theme::cases()[posicion] : 
    Theme::cases()[0]; Output = PHP
    Theme::cases()[1]; Output = SQL;
    Theme::cases()[2]; Output = LARAVEL;
    Theme::cases()[3]; Output = HTML5;
    Theme::cases()[4]; Output = CSS3;
}
*/
?>