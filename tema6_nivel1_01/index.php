<?php
//include "sesion_functions.php";
//counter();
/*
session_start(); // Si en php.ini se ha configurado "session.auto_start = 1" el session_start() no es necesario, dado que la sesión se inicializa de forma automática
2 configuraciones del php.ini que afectan al trabajo con variables de sesión :
- track_vars
- register_globals.
Por defecto track_vars está activado y register_globals está desactivado.
session_register('nombre_variable') : se usa para registrar las variables de forma explícita.
$_SESSION["nombre_de_variable1", "variable2, etc] // Hay que definir las variables.
*/

/*
Frank Pulido - Tema 6 [PHP Avanzado] - Nivel 1 - Ejercicio 1
ENUNCIADO :
Crea un formulario HTML con los campos que desees (al menos un nombre o username). El formulario debe tener como action un documento PHP.
El código de este documento PHP deberá mostrar los valores de los distintos campos del formulario mediante variables superglobales.
Graba además algunos de estos valores dentro de variables de sesión.

RECURSOS :
PHP Superglobals : https://www.w3schools.com/php/php_superglobals.asp
PHP Sessions : https://www.w3schools.com/php/php_sessions.asp
PHP Sessions : https://www.php.net/manual/es/ref.session.php
PHP Forms : https://www.w3schools.com/php/php_forms.asp

TUTORIAL :
https://www.youtube.com/watch?v=bOqTCDfc7Tk
AVANZADO :
Sistema de LOGIN con MySQL : https://www.youtube.com/watch?v=BGY-SQtVzJU&list=PL0QkplCwRyMt4WWSTN7pz3P-NK2jtTR-D&index=59

Estudiar mejor lo de la validación :
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
https://www.w3schools.com/php/php_form_validation.asp
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <!-- Debo poner 2 formularios según se trate de un usuario ya registrado o uno nuevo -->
    <!-- Los campos son mandatorios, pero el front end es editable por el usuario. Lo hemos solucionado en registration.php con if(empty($campo)) -->
    <h2>Nuevo usuari@. Registro :</h2><br>
    <!--<p><?php /*echo $_SESSION["counter"];*/?><br></p>-->
    <form action = "registration.php" method="post">
        <label for="username">Username :</label>
        <input required type = "text" name = "username"><br><br>

        <label for="email">Correo eletrónico :</label>
        <input required type = "text" name = "email"><br><br>

        <label for="password">Contraseña :</label>
        <input required type = "text" name = "password"><br><br>

        <label for="again_password">Confirmar contraseña :</label>
        <input required type = "text" name = "again_password"><br><br>

        <button type="submit">Enviar</button>
    </form>
    <br>  
</body>
</html>

