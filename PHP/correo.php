<?php
include("conexion.php");
//recibimos por POST los datos procedientes del Formulario//

$nombres = $_POST['nombres'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

    $_GRABAR_SQL = "INSERT INTO correo (nombres, correo, telefono, mensaje) VALUES ('$nombres', '$correo', '$telefono', '$mensaje')";
    if  ($conexion -> query($_GRABAR_SQL)){
        header("location: ../confirmado.html");
    }
    else {
        echo 'fallo';
    }
    