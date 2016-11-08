

 <?php 
session_start();

$usuario = $_POST['username'];
$contraa = $_POST['password'];
$contra = md5($contraa);
	include('../sql/conexion.php');

	$proceso = $conexion -> query("SELECT * FROM usuario WHERE usuario='$usuario' AND password='$contra'");
	if ($resultado = mysqli_fetch_array($proceso)) {
		$_SESSION['u_usuario'] = $usuario;
		header("location: ../home.php");
	}
	else{
		echo '<script language="javascript">alert("juas");</script>';
		header("location: ../index.html");
	}

 ?>