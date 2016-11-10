<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fundacion Crece</title>
    <!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
<?php 
@session_start();
include("../sql/mostrar.php");
?>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        <a class="navbar-brand" href="#"><i class="fa fa-gear"></i> <strong>CRECE</strong></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">      
              <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                     <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil  (<?php echo $nombre.' '.$apellido;?> )</a>
                        </li>
                        <li><a href="herramientas.php"><i class="fa fa-gear fa-fw"></i>Herramientas</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="cerrar_sesion.php"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
               <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
 <?php @session_start();
include_once('../sql/pantalla_modulo.php') ?>


                </ul>
            </div>
        </nav>
        
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            MODIFICAR PERFIL<small>
                          </small>
                        </h1>
                    </div>
                </div> 
            <!-- /. ROW  -->              
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default  col-md-8">
                      <div class="panel-heading  col-md-3"> Usuario </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                      <form role="form" action="../sql/modificar_perfil.php" method="post">
                        <div class="col-md-7">
                          <label>Nombre:</label>
                          <input class="form-control" name="nombre" required="Apellido" value="<?php echo $nombre;  ?>">
                        </div>
                        <div class="col-md-7">
                        <br>
                          <label>Apellido:</label>
                          <input class="form-control" name="apellido" value="<?php echo $apellido;  ?>">
                         </div>
                        
                        <div class="col-md-7">
                          <br>
                        </div>
                        <input type="hidden" name="id_usuario"  placeholder="" value="<?php echo $id_usuario;?>">
                        <div class="col-md-12">
                          <button class="col-md-6"> Guardar</button> 
                          <br>
                                                  <div class="col-md-7">

                            <?php
                            if (isset($_GET['mod'])) {
                             
                         if ($_GET['mod'] == 1) {
                            echo  '<font color="#1e9500"">¡Excelente! Datos modificados </font>';
                          }
                           else if ($_GET['mod'] == 2) {
                            echo  '<font color="#1e9500"">¡Excelente! Datos modificados </font>';
                          }
                           else if ($_GET['mod'] == 3) {
                            echo  '<font color="#1e9500"">¡Excelente! Contraseña modificados </font>';
                          }
                           elseif ($_GET['mod'] == 4) {
                            echo  '<font color="#1e9500"">¡Excelente! Usuario modificados </font>';
                          }
                           elseif ($_GET['mod'] == 5) {
                            echo  '<font color="#FE2E2E"">¡ERROR! USUARIO YA EXISTE </font>';
                          }
                             } 
                             else{


                             }
                         
                         
                               ?>
                          <br>
                        </div>
                        </div>
                          <br><br>
                          </form>

                        </div>
            <!--INICIO-->
            <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                Modificar contraseña y usuario
              </button>
              <!-- Modal -->
              <form action="../sql/contrasena.php" id="formu" method="post" accept-charset="utf-8">
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Modificar Usuario & Contraseña</h4>
                    </div>
                    <div class="modal-body">
                    <div class="col-md-7">
                                        <br>
                                          <label>usuario:</label>
                      <input class="form-control" type="text" name="usuario" value="<?php echo $usuario2;  ?>" placeholder="">
                                        </div>   <div class="col-md-7">
                                        <br>
                                          <label>Contraseña:</label>
                      <input class="form-control" type="password" name="password"  value="<?php echo $password1;  ?>" placeholder="">
                                        </div> 
                      <input type="hidden" name="id_usuario"  placeholder="" value="<?php echo $id_usuario;?>">
                    </div>

                    <div class="modal-footer">
                                                            <div class="col-md-7">
<br>
                      <button type="submit" class="btn btn-primary">Modificar</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <!--FIN-->
          </div>
        </div>
       </div><!--End Advanced Tables -->
      </div>
    </div>
    <!-- /. ROW  -->
    <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
  

    </script>
         <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>
    
    <script type="text/javascript">
     
    </script>
   
    <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>    
    <script type="text/javascript">     
    </script>   
</body>
</html>
