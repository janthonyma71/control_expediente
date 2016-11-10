<?php 
@session_start();

require("conexion.php");
$query = "SELECT usuario, rol.id_rol, pantalla.descripcion_pantalla, pantalla.patalla FROM usuario INNER JOIN rol ON usuario.id_rol = rol.id_rol INNER JOIN pantalla ON pantalla.id_rol = rol.id_rol WHERE usuario='$comp'";

            $resultado = $conexion -> query($query);
   while( $row = $resultado -> fetch_assoc()){
   $pantalla = $row['descripcion_pantalla'];
   $direc = $row['patalla'];

    }
 
?>
