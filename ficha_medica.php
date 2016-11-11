<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Howard Gardner</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>

<?php 
include("sql/mostrar_modulo.php");
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
                <a class="navbar-brand" href="home.php"><i class="fa fa-gear"></i> <strong>Howard</strong></a>
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
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                        <?php @session_start();
include_once('sql/pantallas.php') ?>

                 
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Modificar Estudiante <small>                               
</small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading"> PACIENTES </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                

                                    <?php 
                    @session_start();

            include("sql/conexion.php");

            $query = "SELECT estudiante.id_estudiante,estudiante.nombre as nombree, estudiante.grado,estudiante.apellido as apellidoe, estudiante.fecha_nacimiento  FROM estudiante where  estudiante.id_estudiante ='" . $_GET['id'] . "' ";
           


            $resultado = $conexion -> query($query);

            $row = $resultado -> fetch_assoc();

              

            //$id_datos_generales = $row['id_datos_generales'];
           $id_estudiante = $row['id_estudiante'];

         ?>
                               

                                       
    <form role="form" method="POST" action="sql/agregar_ficha_medica1.php">
                                        <div class="col-xs-12">
                                          
                                        <input type="hidden" value="<?php echo $row['id_estudiante'];  ?>" name="id_estudiante" >
                                    
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Periodo de actualizacion:</label>
                                            <input type="date" class="form-control" name="periodo" required="/">
                                        </div>
                                        <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Grado:</label>
                                            <input class="form-control" name="grado" required="/"value="<?php echo $row['grado']; ?>">
                                        </div>

                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres del alumno:</label>
                                            <input class="form-control" name="nombre" required="/"value="<?php echo $row['nombree']; echo ' '; echo  $row['apellidoe'];  ?>">
                                        </div>
                                         
                                         <div class="col-xs-3">
                                         <br>

                                            <label style="color : #000">Fecha de nacimiento:</label>
                                            <input type="date" class="form-control" name="fecha_nac" required="/" value="<?php echo $row['fecha_nacimiento'];  ?>">
                                        </div>
                                         <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Tipo de sangre:</label>
                                            <input class="form-control" name="sangre" required="/">
                                        </div>
                                         <div class="col-xs-12">
                                                       <br>
                                                        <label style="color : #000">Historia de enfermedades relevantes:</label>
                                            <input class="form-control" name="historia" required="/">
                                        </div>
                                        <div class="col-xs-4">
                                                       <br>
                                                       <label style="color : #000">Procede de enfermedades cronicas:</label>
                                            <select class="form-control" name ="cronicas" >
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-12">
                                                       <br>
                                                        <label style="color : #000">En caso afirmativo especifiquelas:</label>
                                            <input class="form-control" name="cronicas_especifiquelo" required="/">
                                        </div>
                                        <div class="col-xs-4">
                                                       <br>
                                                       <label style="color : #000">Toma medicamento especial:</label>
                                            <select class="form-control" name ="medicamento" >
                                                <option>Si</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                       <div class="col-xs-12">
                                                       <br>
                                                        <label style="color : #000">Especifiquelos:</label>
                                            <input class="form-control" name="medicamento_especifiquelo" required="/">
                                        </div>
                                         <div class="col-xs-12">
                                                       <br>
                                                        <label style="color : #000">Nombre del medico de la familia:</label>
                                            <input class="form-control" name="medico" required="/">
                                        </div>
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono del medico </label>
                                            <input class="form-control" name="tel_medico" required="/" >
                                        </div>
                                          <div class="col-xs-12">
                                                       <br>
                                                        <label style="color : #000">En caso de no poder contactar al padre, madre o responsable, favor indicar el nmbre de la persona a llamar en caso de emergencia:</label>
                                            <input class="form-control" name="otro" required="/">
                                        </div>
                                        <div class="col-xs-12">
                                                       <br>
                                                        <label style="color : #000">telefono:</label>
                                            <input class="form-control" name="tel_otro" required="/">
                                        </div>
                                     <div class="x_title col-md-12 col-sm-12 col-xs-12">

                                   
                                </div>

                                        

                                              <div class="col-xs-12">
                                              <br>
                                              <button type="submit" class="btn btn-default col-md-12" style="color: #000  "  > <strong>Guardar informacion</strong></button>
                                              </div>   

                                             
                                       
                                        
                                    </form>
                                    <br><br><br><br><br><br>
                                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">     
            <thead>
            <tr><td colspan="12">  <h2>Historial fichas medicas</h2>
</td></tr>
                <tr>
                    <th>Periodo de actualizacion</th>
                    <th>Grado</th>
                    <th>Nombre</th>
                    <th>Tipo de sangre</th>
                    <th>Enfermedades relevantes</th>
                    <th>Enfermedades cronicas</th>
                    <th>Medicamentos especiales</th>                          
                    <th>Nombre del medico</th>
                    <th>Telefono del medico</th>
                    <th>En caso de emergencia</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    @session_start();

            include("sql/conexion.php");
        

            $query = "SELECT grado, nombre,apellido, ficha_medica.periodo_actualizacion,ficha_medica.tipo_sangre ,ficha_medica.enfermedad,ficha_medica.historia_enfermedad,ficha_medica.medicamentos,ficha_medica.nombre_medico,ficha_medica.telefono_medico, ficha_medica.otro,ficha_medica.telefono_otro FROM  ficha_medica INNER JOIN estudiante ON estudiante.`id_estudiante` = ficha_medica.id_estudiante WHERE estudiante.id_estudiante = $id_estudiante";
            $resultado = $conexion -> query($query);

            while ($row = $resultado -> fetch_assoc()) {

         ?>
                               
          <tr>
         <td><?php echo $row['periodo_actualizacion']; ?> </td>
         <td><?php echo $row['grado']; ?> </td>
         <td><?php echo $row['nombre']; echo " "; echo $row['apellido']; ?> </td>
         <td><?php echo $row['tipo_sangre']; ?> </td>
         <td><?php echo $row['historia_enfermedad']; ?> </td>
         <td><?php echo $row['enfermedad']; ?> </td>
         <td><?php echo $row['medicamentos']; ?> </td>
         <td><?php echo $row['nombre_medico']; ?> </td>
         <td><?php echo $row['telefono_medico']; ?> </td>
         <td><?php echo $row['otro']; ?> </td>
         <td><?php echo $row['telefono_otro']; ?> </td>

            
      </tr>
      <?php } ?>
           </tbody>
         </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
