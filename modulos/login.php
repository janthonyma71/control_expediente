 <?php 
include('../sql/conexion.php');
session_start();
$usuario = $_POST['username'];
$contraa = $_POST['password'];
$contra = md5($contraa);
$query = "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$contra'";

            $proceso = $conexion -> query($query);
	if ($resultado = mysqli_fetch_array($proceso)) {
		$_SESSION['u_usuario'] = $usuario;
		$_SESSION['p_password'] = $contraa;
        $_SESSION['id_rol'] = $id_rol;


    
    if ($id_rol==1) {
		header("location: ../home.php");
		
    }
    else{
    			header("location: ../home.php");


    }
	}else{
		header("location: ../index.php?error=1");
	}
?>