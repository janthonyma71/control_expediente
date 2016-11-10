<?php 
require("conexion.php");
$id_usuario = $_POST['id_usuario'];

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];	
       
$sql="UPDATE usuario SET nombre='$nombre' ,apellido='$apellido'  WHERE id_usuario ='$id_usuario' ";
$resultado = $conexion -> query($sql);

   header("location: ../modulos/herramientas.php?mod=1");


 ?>

 