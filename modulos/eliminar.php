<?php
require("../sql/conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE from paciente  where id_paciente='$id'";
$resultado = $conexion -> query($query);

	if ($resultado) {
	            header("location: ../historial_medico.php");
	}
	else
	{
		echo $id;
	}

?>
