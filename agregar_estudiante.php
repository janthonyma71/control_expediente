<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Colegio HowardGarden</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>

<body>
<?php 
include("sql/mostrar.php");
 ?>

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><i class="fa fa-gear"></i> <strong>Howard</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
              
                       
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil  (<?php echo $nombre.' '.$apellido;?> )</a>
                        </li>
                        <li><a href="modulos/herramientas.php"><i class="fa fa-gear fa-fw"></i>Herramientas</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="modulos/cerrar_sesion.php"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesion</a>
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
include_once('sql/pantallas.php') ?>
                   
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">

                
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading col-md-12">

                           <h2> Agregar Estudiante </h2><br>              </div>
                            <div class="panel-body">
                          <form role="form" method="POST" action="sql/agregar_estudiante.php">
                                        <div class="col-xs-2">
                                          
                                        </div>
                                        <div class="col-xs-3">
                                            <label style="color : #000">NIE:</label>
                                            <input class="form-control" name="nie" >
                                        </div>
                                        <div class="col-xs-2">
                                          
                                        </div>
                                        <div class="col-xs-3">
                                            <label style="color : #000">Grado al que desea ingresar:</label>
                                            <input class="form-control" name="grado" required="/">
                                        </div>
                                        <div class="col-xs-2">
                                          
                                        </div>
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres:</label>
                                            <input class="form-control" name="nombre" required="/">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Apellidos:</label>
                                            <input class="form-control" name="apellido" required="/">
                                        </div>
                                         <div class="col-xs-3">
                                                                                   <br>

                                            <label style="color : #000">Fecha de nacimiento:</label>
                                            <input type="date" class="form-control" name="fecha_nac" required="/">
                                        </div>
                                        <div class="col-xs-7">   
                                                       <br>
                                            <label style="color : #000">Lugar de nacimiento:</label>
                                            <input class="form-control" name="lugar_nac" required="/">
                                        </div>
                                        <div class="col-xs-2">
                                                       <br>
                                                        <label style="color : #000">Edad:</label>
                                            <input class="form-control" name="edad" required="/">
                                        </div>
                                           <div class="col-xs-4">
                                                       <br>
                                                       <label style="color : #000">Genero:</label>
                                            <select class="form-control" name ="genero">
                                                <option>Femenino</option>
                                                <option>Masculino</option>
                                            </select>
                                        </div>
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Direccion exacta de casa </label>
                                            <input class="form-control" name="direc_casa" required="/">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de telefono de casa:</label>
                                            <input class="form-control" name="tel_casa" required="/">
                                        </div>
                                     
                                          
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Centro de estudios anteriores:</label>
                                            <input class="form-control" name="estudio_anteriores" required="/">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Razon por la que se retiro:</label>
                                            <input class="form-control" name="razon_retiro" required="/">
                                        </div>
                                        <div class="col-xs-12">
                                                       <br>
                                                       <br>
                                                

                                        </div>
                                     <div class="x_title col-md-12 col-sm-12 col-xs-12">

                                    <h2 style="color : #000" >INGRESAR DATOS DEL PADRE <br><small></small></h2>
                                    <br>
                                    <div class="clearfix"></div>

                                     </div>
                                        <div class="col-xs-3">
                                            <label style="color : #000">DUI del padre:</label>
                                            <input class="form-control" name="dui_padre" required="/">
                                        </div>
                                     
                                            <div class="col-xs-12">
                                                       <br>
                                                        
                                        </div>
                                       
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres del padre:</label>
                                            <input class="form-control" name="nombre_padre" required="/">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Apellidos del padre:</label>
                                            <input class="form-control" name="apellido_padre" required="/">
                                        </div>
                                         
                                        
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Direccion exacta de casa </label>
                                            <input class="form-control" name="direc_casa_padre" required="/">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de telefono de casa:</label>
                                            <input class="form-control" name="tel_casa_padre" required="/">
                                        </div>
                                      <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de celular:</label>
                                            <input class="form-control" name="cel_padre" required="/">
                                        </div>
                                          
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Lugar de trabajo:</label>
                                            <input class="form-control" name="trabajo_padre" required="/">
                                        </div>
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Cargo que desempeña:</label>
                                            <input class="form-control" name="cargo_desempeña_padre" required="/">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Profesion:</label>
                                            <input class="form-control" name="profesion_padre" required="/">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Correo:</label>
                                            <input class="form-control" name="correo_padre" required="/">
                                        </div>
                                      <div class="col-xs-12">
                                                       <br>
                                                       <br>
                                                

                                        </div>
                                     <div class="x_title col-md-12 col-sm-12 col-xs-12">
                                            <br>
                                    <h2 style="color : #000">INGRESAR DATOS DE LA MADRE   <small></small></h2>
                                    <br>
                                    <div class="clearfix"></div>

                                     </div>
                                        <div class="col-xs-3">
                                            <label style="color : #000">DUI del madre:</label>
                                            <input class="form-control" name="dui_madre" required="/">
                                        </div>
                                     
                                            <div class="col-xs-12">
                                                       <br>
                                                        
                                        </div>
                                       
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres del madre:</label>
                                            <input class="form-control" name="nombre_madre" required="/">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Apellidos del madre:</label>
                                            <input class="form-control" name="apellido_madre" required="/">
                                        </div>
                                         
                                        
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Direccion exacta de casa </label>
                                            <input class="form-control" name="direc_casa_madre" required="/">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de telefono de casa:</label>
                                            <input class="form-control" name="tel_casa_madre" required="/">
                                        </div>
                                      <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de celular:</label>
                                            <input class="form-control" name="cel_madre" required="/">
                                        </div>
                                          
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Lugar de trabajo:</label>
                                            <input class="form-control" name="trabajo_madre" required="/">
                                        </div>
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Cargo que desempeña:</label>
                                            <input class="form-control" name="cargo_desempeña_madre" required="/">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Profesion:</label>
                                            <input class="form-control" name="profesion_madre" required="/">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Correo:</label>
                                            <input class="form-control" name="correo_madre" required="/">
                                        </div>

                                        <div class="col-xs-12">
                                                       <br>
                                                       <br>
                                                

                                        </div>
                                     <div class="x_title col-md-12 col-sm-12 col-xs-12">
                                            <br>
                                    <h2 style="color : #000">PERSONA RESPONDABLE ANTE EL COLEGIO <small></small></h2>
                                    <br>
                                    <div class="clearfix"></div>

                                     </div>
                                        <div class="col-xs-3">
                                            <label style="color : #000">DUI del responsable:</label>
                                            <input class="form-control" name="dui_responsable" required="/">
                                        </div>
                                     
                                            <div class="col-xs-12">
                                                       <br>
                                                        
                                        </div>
                                       
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres del responsable:</label>
                                            <input class="form-control" name="nombre_responsable" required="/">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Apellidos del responsable:</label>
                                            <input class="form-control" name="apellido_responsable" required="/">
                                        </div>
                                         
                                        
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Direccion exacta de casa </label>
                                            <input class="form-control" name="direc_casa_responsable" required="/">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de telefono de casa:</label>
                                            <input class="form-control" name="tel_casa_responsable" required="/">
                                        </div>
                                      <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de celular:</label>
                                            <input class="form-control" name="cel_responsable" required="/">
                                        </div>
                                          
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Lugar de trabajo:</label>
                                            <input class="form-control" name="trabajo_responsable" required="/">
                                        </div>
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Cargo que desempeña:</label>
                                            <input class="form-control" name="cargo_desempeña_responsable" required="/">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Profesion:</label>
                                            <input class="form-control" name="profesion_responsable" required="/">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Correo:</label>
                                            <input class="form-control" name="correo_responsable" required="/">
                                                                                                   <br>
                                                       <br>

                                        </div>
                                <div class="x_title col-md-12 col-sm-12 col-xs-12">
                                    <h2 style="color : #000">OTROS DATOS! <br><small></small></h2>
                                    
                                    <div class="clearfix"></div>

                                </div>
                                <div class="x_content">
                                    <br />
                  
                                        <div class="col-xs-4">
                                          
                                        </div>
                                         <div class="col-xs-4">
                                                       <br>
                                                       <label style="color : #000">Estado civil:</label>
                                            <select class="form-control" name ="estado_civil">
                                                <option>Casado</option>
                                                <option>Soltero</option>
                                                <option>Divorsiados</option>
                                                <option>Soltero</option>

                                            </select>
                                        </div>
                                         <div class="col-xs-4">
                                          
                                        </div>
                                        <div class="col-xs-12">
                                                                            <br />

                                            <label style="color : #000">Aque iglesia asisten:</label>
                                            <input class="form-control" name="iglesia" >
                                        </div>
                                     
                                        <div class="col-xs-6">
                                                                            <br />

                                            <label style="color : #000">En caso de emergencia avisar a:</label>
                                            <input class="form-control" name="emergencia" required="/">
                                        </div>
                                   
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Que parentesco tiene con esa persona:</label>
                                            <input class="form-control" name="parentesco" required="/">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono:</label>
                                            <input class="form-control" name="telefono_emergencia" required="/">
                                        </div>
                                         <div class="col-xs-12">

                                          
                                        </div>
                                         <div class="col-xs-12">
                                                                                   <br>

                                             <br>
                                                        <label style="color : #000">Persona autorizada por el responsable para retirar al alumno de la institucion:</label>
                                            <input class="form-control" name="persona_retiro" required="/">
                                        </div>
                                        <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono person autorizada:</label>
                                            <input class="form-control" name="telefono_retiro" required="/">
                                        </div>
                                         <div class="col-xs-12">

                                          
                                        </div>
                                        <div class="col-xs-12">
                                                                                   <br>

                                             <br>
                                                        <label style="color : #000">Otro responsable:</label>
                                            <input class="form-control" name="persona_otro" required="/">
                                        </div>
                                        <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono otro responsable:</label>
                                            <input class="form-control" name="telefono_otro" required="/">
                                        </div>
                                         <div class="col-xs-12">

                                          
                                        </div>
                                        
                                     <div class="col-xs-12">
                                                                                   <br>

                                             <br>
                                                        <label style="color : #000">Si se va en microbus, escriba el nombre del responsable:</label>
                                            <input class="form-control" name="persona_micro" required="/">
                                        </div>
                                        <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono microbus:</label>
                                            <input class="form-control" name="telefono_micro" required="/">
                                        </div>
                                         <div class="col-xs-12">

                                          
                                        </div>

                                </div>

                                        

                                              <div class="col-xs-12">
                                              <br>
                                              <button type="submit" class="btn btn-default col-md-12" >Enviar informacion</button>
                                              </div>   
                                             
                                       
                                        
                                    </form>
                                <div class="text-right">
                                </div>
                            </div>
                        </div>

                    </div>
                 
            
        <footer><p>Aplicacion creada por Anthony Melgar & Jonathan Vargas</p>
                
        
                </footer>
        
                </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
     
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    
    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>
    
     <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 

</body>

</html>