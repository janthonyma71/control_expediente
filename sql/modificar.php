<?php 
require("conexion.php");

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
$id_estudiante = $_POST['id_estudiante'];

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
$id_padre = $_POST['id_padre'];

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
$id_madre = $_POST['id_madre'];

//ENCARGADO
$dui_responsable = $_POST['dui_encargado'];
$nombre_responsable = $_POST['nombre_encargado'];
$apellido_responsable = $_POST['apellido_encargado'];
$direc_casa_responsable = $_POST['direc_casa_encargado'];
$tel_casa_responsable = $_POST['tel_casa_encargado'];
$cel_responsable = $_POST['cel_encargado'];
$trabajo_responsable = $_POST['trabajo_encargado'];
$cargo_desempeña_responsable = $_POST['cargo_desempeña_encargado'];
$profesion_responsable = $_POST['profesion_encargado'];
$correo_responsable = $_POST['correo_encargado'];
$id_encargado = $_POST['id_encargado'];


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



	$sql= "UPDATE  estudiante SET NIE='$nie' ,grado='$grado' ,fecha_nacimiento='$fecha_nac' ,lugar_nacimiento ='$lugar_nac' ,edad = '$edad', estudio_anterior = '$estudio_anteriores', razon_retiro = '$razon_retiro',nombre= '$nombre',apellido= '$apellido',direccion_casa= '$direc_casa', telefono_casa= '$tel_casa', genero= '$genero' WHERE id_estudiante ='$id_estudiante'";
	$resultado = $conexion -> query($sql);
	
 	$sql= "UPDATE  informacion_encargado SET dui='$dui_padre' ,cargo='$cargo_desempeña_padre' ,profesion='$profesion_padre' ,correo ='$correo_padre' ,direccion_casa_encargado = '$direc_casa_padre', telefono_casa_encargado = '$tel_casa_padre', direccion_trabajo= '$trabajo_padre',celular= '$cel_padre',nombre= '$nombre_padre', apellido= '$apellido_padre' WHERE id_informacion_encargado ='$id_padre'";
	$resultado = $conexion -> query($sql);
	

		$sql= "UPDATE  informacion_encargado SET dui='$dui_madre' ,cargo='$cargo_desempeña_madre' ,profesion='$profesion_madre' ,correo ='$correo_madre' ,direccion_casa_encargado = '$direc_casa_madre', telefono_casa_encargado = '$tel_casa_madre', direccion_trabajo= '$trabajo_madre',celular= '$cel_madre',nombre= '$nombre_madre', apellido= '$apellido_madre' WHERE id_informacion_encargado ='$id_madre'";
	$resultado = $conexion -> query($sql);
	

		$sql= "UPDATE informacion_encargado SET dui='$dui_responsable' ,cargo='$cargo_desempeña_responsable' ,profesion='$profesion_responsable' ,correo ='$correo_responsable' ,direccion_casa_encargado = '$direc_casa_responsable', telefono_casa_encargado = '$tel_casa_responsable', direccion_trabajo= '$trabajo_responsable',celular= '$cel_responsable',nombre= '$nombre_responsable', apellido= '$apellido_responsable' WHERE id_informacion_encargado ='$id_encargado'";
	$resultado = $conexion -> query($sql);


	$sql= "UPDATE  otros_datos SET estado_civil='$estado_civil' ,iglesia='$iglesia' ,emergencia='$emergencia' ,parentesco ='$parentesco' ,telefono_paren = '$telefono_emergencia', persona_autorizada = '$persona_retiro', telefono_autorizado= '$telefono_retiro',otra_persona= '$persona_otro',telefono= '$telefono_otro', persona_micro= '$persona_micro',celular_micro= '$persona_micro' WHERE id_estudiante ='$id_estudiante'";
	$resultado = $conexion -> query($sql);	

	            header("location: ../mostrar_estudiante.php");


 ?>

 