<?php 
        @session_start();
        if (isset($_SESSION['u_usuario'] )) {

$comp=$_SESSION['u_usuario'];
$password1 = $_SESSION['p_password'];

require("conexion.php");
$query = "SELECT id_usuario,nombre, apellido, usuario FROM usuario  WHERE usuario='$comp'";
            $resultado = $conexion -> query($query);

   while( $row = $resultado -> fetch_assoc()){
   $nombre = $row['nombre'];
   $apellido = $row['apellido'];
   $id_usuario = $row['id_usuario'];
      $usuario2 = $row['usuario'];


}


                }
        else 
        {

            header("location: index.php");
        }
    ?>
