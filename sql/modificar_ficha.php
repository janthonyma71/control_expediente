<?php 
require("conexion.php");
$id_estudiante= $_POST['id_estudiante'];
$id_ficha_medica= $_POST['id_ficha_medica'];
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


	$sql= "UPDATE ficha_medica SET periodo_actualizacion = '$periodo', tipo_sangre = '$sangre',historia_enfermedad = '$historia',enfermedad= '$cronicas_especifiquelo',medicamentos= '$medicamento_especifiquelo', nombre_medico= '$medico',telefono_medico= '$tel_medico', otro= '$otro', telefono_otro= '$tel_otro' WHERE id_estudiante ='$id_estudiante' AND id_ficha_medica  ='$id_ficha_medica'";
	$resultado = $conexion -> query($sql);



            header("location: ../mostrar_estudiante.php");


 ?>