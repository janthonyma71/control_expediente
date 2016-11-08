<?php 
require("conexion.php");
$usuario= $_POST['usuario'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$genero= $_POST['genero'];
if (isset($_POST['rol']) && $_POST['rol'] == 'Administrador') {
	$rol = 1;
}else{
	$rol = 2; 
}

$contra= $_POST['usuario'];
$password= md5($contra);

	

	$sql= "INSERT INTO usuario (usuario, nombre ,apellido ,genero,id_rol, password,estado) VALUES('$usuario','$nombre','$apellido','$genero','$rol','$password',1)";
	$resultado = $conexion -> query($sql);



            header("location: ../home.php");


 ?>
