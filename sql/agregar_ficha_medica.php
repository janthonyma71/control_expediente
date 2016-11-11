<?php 
require("conexion.php");
$id_estudiante= $_POST['id_estudiante'];
$periodo= $_POST['periodo'];
$nombre= $_POST['nombre'];
$grado= $_POST['grado'];
$fecha_nac= $_POST['fecha_nac'];
$sangre= $_POST['sangre'];
$historia= $_POST['historia'];
$cronicas = $_POST['cronicas'];
$cronicas_especifiquelo = $_POST['cronicas_especifiquelo'];
$medicamento = $_POST['medicamento'];
$medicamento_especifiquelo = $_POST['medicamento_especifiquelo'];
$medico = $_POST['medico'];
$tel_medico = $_POST['tel_medico'];
$otro = $_POST['otro'];
$tel_otro = $_POST['tel_otro'];


$contra= $_POST['usuario'];
$password= md5($contra);

	

	$sql= "INSERT INTO ficha_medica (periodo_actualizacion, tipo_sangre ,historia_enfermedad ,enfermedad,medicamentos, nombre_medico,telefono_medico, otro, telefono_otro, id_estudiante) VALUES('$periodo','$sangre','$historia','$cronicas_especifiquelo','$medicamento_especifiquelo','$medico','$tel_medico','$otro','$tel_otro','$id_estudiante')";
	$resultado = $conexion -> query($sql);



            header("location: ../mostrar_estudiante_usuario.php");


 ?>
