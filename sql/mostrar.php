<?php 
        session_start();
        if (isset($_SESSION['u_usuario'] )) {

$comp=$_SESSION['u_usuario'];
require("conexion.php");
$query = "SELECT nombre, apellido, usuario FROM usuario  WHERE usuario='$comp'";
            $resultado = $conexion -> query($query);

   while( $row = $resultado -> fetch_assoc()){
   $nombre = $row['nombre'];
   $apellido = $row['apellido'];
}


                }
        else 
        {

            header("location: index.html");
        }
    ?>
