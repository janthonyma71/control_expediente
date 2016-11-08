<?php 
require("conexion.php");

$peso= $_POST['peso'];
$temperatura= $_POST['temperatura'];
$altura= $_POST['altura'];
$presion= $_POST['presion'];
$fecha= $_POST['fecha'];
if ($_POST['prioridad'] == 'Emergencia') {
	$prioridad = 1;
}else{
	$prioridad = 2;
}
$diagnostico_preliminar= $_POST['observaciones'];
$id_paciente = $_POST['id_paciente'];


	$sql= "INSERT INTO datos_clinicos (peso,temperatura,altura,presion,fecha_visita,diagnostico_preliminar, id_paciente, id_prioridad_atencion) VALUES('$peso','$temperatura','$altura','$presion','$fecha', '$diagnostico_preliminar', '$id_paciente', '$prioridad')";
	$resultado = $conexion -> query($sql);

	/*$buscarID= "SELECT id_datos_generales FROM datos_generales WHERE nombre='$nombre' and apellido= '$apellido'";
	$resultado = $conexion -> query($buscarID);

	while( $row = $resultado -> fetch_assoc()){
		   $id_datos_generales = $row['id_datos_generales'];
		}
	echo "<br>".$id_datos_generales;
           
	$sql="INSERT INTO paciente (id_datos_generales,alergias,documento,responsable,numero_documento) VALUES ('$id_datos_generales','$alergias','$documento','$responsable','$numero_documento')";
	$resultado = $conexion -> query($sql);*/
            header("location: ../historial_medico.php");

 ?>

 