<?php 
require("conexion.php");

//ALUMNOS

$nie = $_POST['nie'];
$grado = $_POST['grado'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nac = $_POST['fecha_nac'];
$lugar_nac = $_POST['lugar_nac'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$direc_casa = $_POST['direc_casa'];
$tel_casa = $_POST['tel_casa'];
$estudio_anteriores = $_POST['estudio_anteriores'];
$razon_retiro = $_POST['razon_retiro'];

//PADRE
$dui_padre = $_POST['dui_padre'];
$nombre_padre = $_POST['nombre_padre'];
$apellido_padre = $_POST['apellido_padre'];
$direc_casa_padre = $_POST['direc_casa_padre'];
$tel_casa_padre = $_POST['tel_casa_padre'];
$cel_padre = $_POST['cel_padre'];
$trabajo_padre = $_POST['trabajo_padre'];
$cargo_desempeña_padre = $_POST['cargo_desempeña_padre'];
$profesion_padre = $_POST['profesion_padre'];
$correo_padre = $_POST['correo_padre'];



//MADRE
$dui_madre = $_POST['dui_madre'];
$nombre_madre = $_POST['nombre_madre'];
$apellido_madre = $_POST['apellido_madre'];
$direc_casa_madre = $_POST['direc_casa_madre'];
$tel_casa_madre = $_POST['tel_casa_madre'];
$cel_madre = $_POST['cel_madre'];
$trabajo_madre = $_POST['trabajo_madre'];
$cargo_desempeña_madre = $_POST['cargo_desempeña_madre'];
$profesion_madre = $_POST['profesion_madre'];
$correo_madre = $_POST['correo_madre'];

//ENCARGADO
$dui_responsable = $_POST['dui_responsable'];
$nombre_responsable = $_POST['nombre_responsable'];
$apellido_responsable = $_POST['apellido_responsable'];
$direc_casa_responsable = $_POST['direc_casa_responsable'];
$tel_casa_responsable = $_POST['tel_casa_responsable'];
$cel_responsable = $_POST['cel_responsable'];
$trabajo_responsable = $_POST['trabajo_responsable'];
$cargo_desempeña_responsable = $_POST['cargo_desempeña_responsable'];
$profesion_responsable = $_POST['profesion_responsable'];
$correo_responsable = $_POST['correo_responsable'];


//OTRA INFOR
$estado_civil = $_POST['estado_civil'];
$iglesia = $_POST['iglesia'];
$emergencia = $_POST['emergencia'];
$parentesco = $_POST['parentesco'];
$telefono_emergencia = $_POST['telefono_emergencia'];
$persona_retiro = $_POST['persona_retiro'];
$telefono_retiro = $_POST['telefono_retiro'];
$persona_otro = $_POST['persona_otro'];
$telefono_otro = $_POST['telefono_otro'];
$persona_micro = $_POST['persona_micro'];
$telefono_micro = $_POST['telefono_micro'];

	

	$sql= "INSERT INTO estudiante (NIE,grado,fecha_nacimiento,lugar_nacimiento,edad,estudio_anterior,razon_retiro,nombre,apellido,direccion_casa,telefono_casa,genero) VALUES('$nie','$grado','$fecha_nac','$lugar_nac','$edad','$estudio_anteriores','$razon_retiro','$nombre','$apellido','$direc_casa','$tel_casa','$genero')";
	$resultado = $conexion -> query($sql);

	$buscarID= "SELECT id_estudiante FROM estudiante WHERE nombre='$nombre' and apellido= '$apellido'";
	$resultado = $conexion -> query($buscarID);

	while( $row = $resultado -> fetch_assoc()){
		   $id_datos_generales = $row['id_estudiante'];
		}
	echo "<br>".$id_datos_generales;
           
	$sql="INSERT INTO informacion_encargado(dui,cargo,profesion,correo,direccion_casa_encargado,telefono_casa_encargado,telefono_trabajo,direccion_trabajo,celular,nombre,apellido, id_encargado,id_estudiante) VALUES ('$dui_padre','$cargo_desempeña_padre','$profesion_padre','$correo_padre','$direc_casa_padre','$tel_casa_padre','$cel_padre','$trabajo_padre','$cel_padre','$nombre_padre','$apellido_padre',1,'$id_datos_generales')";

	
	$resultado = $conexion -> query($sql);

	$sql="INSERT INTO informacion_encargado(dui,cargo,profesion,correo,direccion_casa_encargado,telefono_casa_encargado,telefono_trabajo,direccion_trabajo,celular,nombre,apellido, id_encargado,id_estudiante) VALUES ('$dui_madre','$cargo_desempeña_madre','$profesion_madre','$correo_madre','$direc_casa_madre','$tel_casa_madre','$cel_madre','$trabajo_madre','$cel_madre','$nombre_madre','$apellido_madre',2,'$id_datos_generales')";

	
	$resultado = $conexion -> query($sql);

	$sql="INSERT INTO informacion_encargado(dui,cargo,profesion,correo,direccion_casa_encargado,telefono_casa_encargado,telefono_trabajo,direccion_trabajo,celular,nombre,apellido, id_encargado,id_estudiante) VALUES ('$dui_responsable','$cargo_desempeña_responsable','$profesion_responsable','$correo_responsable','$direc_casa_responsable','$tel_casa_responsable','$cel_responsable','$trabajo_responsable','$cel_responsable','$nombre_responsable','$apellido_responsable',3,'$id_datos_generales')";

	
	$resultado = $conexion -> query($sql);

		$sql="INSERT INTO otros_datos(estado_civil,iglesia,emergencia,	parentesco,telefono_paren,persona_autorizada,telefono_autorizado,otra_persona,	telefono, persona_micro,celular_micro,id_estudiante) VALUES ('$estado_civil','$iglesia','$emergencia','$parentesco','$telefono_emergencia','$persona_retiro','$telefono_retiro','$persona_otro','$telefono_otro','$persona_micro','$telefono_micro','$id_datos_generales')";

	
	$resultado = $conexion -> query($sql);



            header("location: ../agregar_estudiante.php");


 ?>


 