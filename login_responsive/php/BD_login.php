<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//Conectar a la base de datos//

$conexion=mysqli_connect("localhost", "root", "", "usuarios");
$consulta="SELECT * FROM login WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas == 1) {
    header("location: ../Bienvenidos.html");
}
else if ($filas == 0){
    echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);