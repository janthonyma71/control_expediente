<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php  

include("mostrar_pantalla.php");


?>
<?php 
                include("conexion.php");
               $query = "SELECT usuario, rol.id_rol, pantalla.descripcion_pantalla, pantalla.patalla FROM usuario INNER JOIN rol ON usuario.id_rol = rol.id_rol INNER JOIN pantalla ON pantalla.id_rol = rol.id_rol WHERE usuario='$comp'";
      $resultado = $conexion -> query($query);
   while( $row = $resultado -> fetch_assoc()){
   $pantalla = $row['descripcion_pantalla'];
   $direc = $row['patalla'];
        ?>                               


                    <li>
                        <a  href="<?php echo $row['patalla'] ; ?>"><i class="fa fa-edit"></i> <?php echo $row['descripcion_pantalla'] ; ?></a>
                    </li>
              
        <?php  } ?>  
        <!-- /. NAV SIDE  -->
</body>
</html>