<?php
include("../conexion.php");
//recibimos por POST los datos procedientes del Formulario//

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$passwordx = $_POST['passwordx'];

    $_GRABAR_SQL = "INSERT INTO login (usuario, email, clave) VALUES ('$usuario', '$email', '$passwordx')";
    if  ($conexion -> query($_GRABAR_SQL)){
        header("location: ../login.html");
    }
    else {
        echo 'fallo';
    }
    