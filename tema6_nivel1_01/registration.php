<?php
/*
ESTE ES EL CÓDIGO DEL SIGN-IN
session_start();
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
*/

// var_dump($_SERVER["REQUEST_METHOD"]);

/*
TUTORIAL :
https://www.youtube.com/watch?v=bOqTCDfc7Tk

USAREMOS 2 MEDIDAS DE SEGURIDAD :
1- Verificamos que $_SERVER["REQUEST_METHOD"] equivalga a POST de modo de no ejecutar el código si no se envía a través del formulario.
https://www.w3schools.com/php/php_superglobals_server.asp
2- Usamos la función built-in "htmlspecialchars" para evitar que incluyan código malicioso en los campos del formulario.
https://www.w3schools.com/PHP/func_string_htmlspecialchars.asp
Investigar también "htmlentities":
https://www.w3schools.com/PHP/func_string_htmlentities.asp
*/

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $mail = $password = $confirm_password = "";
    $user = htmlspecialchars($_POST['username']);
    //$username = $_POST['username'];
    $mail = htmlspecialchars($_POST['email']);
    //$email = $_POST['email'];
    $password = htmlspecialchars($_POST['password']);
    //$password = $_POST['password'];
    $confirm_password = $_POST['again_password'];
    //$again_password = $_POS['again_password'];

    if(empty($user) || empty($mail) || empty($password)) { // Forzamos el envío de todos los campos mandatorios cumplimentados, aún si editasen el front end.
        //exit(); Esta es una opción de interrupción en la ejecución de este archivo si faltase algún dato mandatorio.
        header("Location: index.php");
        // Esta instrucción la vi en el tutorial, si falta algún dato volvemos a la página del formulario. claro que los campos pueden ser definidos como "mandatorios" (required) en html...
    }

    if($password == $confirm_password) {
        echo "La solicitud de alta del usuario $user ha sido registrada.";
        echo "<br>";
        echo "Por favor, confirme el alta siguiendo las instrucciones enviadas al correo $mail y refresque la página.";
    }
    else {
        echo "Lo sentimos $user.";
        echo "<br>";
        echo "La confirmación de contraseña y la contraseña introducidas no coinciden.";
        echo "<br>";
        echo "Por favor, inténtelo de nuevo.";
    }
} else {
    header("Location: index.php"); // Esta instrucción la vi en el tutorial, si no se están recibiendoi los datos con POST volvemos a la página del formulario
}