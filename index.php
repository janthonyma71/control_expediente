
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>HOWARD</title>
        <link rel="stylesheet" href="css/style.css">   
  </head>
  <body>
    <div class="wrapper">
	<div class="container">
		<h1>Bienvenido</h1>		
		<form class="form" action="modulos/login.php" method="POST">
			<input type="text" placeholder="Username" name="username" id="user" required>
			<input type="password" placeholder="Password" name="password" id="pass" required>
			<button type="submit" id="login" name="submit" value="LOGIN">Login</button>
		</form>
    <div style=" font-size: 16px; color:#cc0000;">
    <?php 
if (isset($_GET['error']) == 1) {
  echo "¡Error! al parecer usuario o contraseña son incorrecta";
}
     ?>

    </div>
    
  <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
	</div>	
	
	</div>



	
  </body>
</html>
