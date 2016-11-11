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
include("sql/mostrar.php");
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
                <a class="navbar-brand" href="#"><i class="fa fa-gear"></i> <strong>Howard</strong></a>
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
                            Estudiantes <small></small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
Estudiantes                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>NIE</th>
                                            <th>Grado</th>
                                            <th>Fecha Nacimiento</th>
                                            <th>Edad</th>           
                                            <th>Genero</th>
                                            <th>Estudio Anterior</th>
                                            <th>Nombre Encargado</th>
                                            <th>Telefono Encargado</th>
                                            <th>Operacion</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 

            include("sql/conexion.php");
            $query = "SELECT estudiante.id_estudiante ,estudiante.NIE, estudiante.grado,CONCAT(informacion_encargado.nombre, ' ', informacion_encargado.apellido) As Nombre , estudiante.fecha_nacimiento, estudiante.lugar_nacimiento, estudiante.edad, estudiante.estudio_anterior, estudiante.razon_retiro,estudiante.nombre as nombree ,estudiante.apellido as apellidoe, estudiante.direccion_casa, estudiante.telefono_casa, estudiante.genero, informacion_encargado.nombre, informacion_encargado.apellido, informacion_encargado.correo, informacion_encargado.celular FROM informacion_encargado INNER JOIN estudiante ON estudiante.id_estudiante = informacion_encargado.id_estudiante INNER JOIN encargado ON informacion_encargado.id_encargado = encargado.id_encargado WHERE encargado.id_encargado = 3 ";
            $resultado = $conexion -> query($query);
            while ($row = $resultado -> fetch_assoc()) {

         ?>
                               
          <tr>
         <td><?php echo $row['nombree']; ?> </td>
         <td><?php echo $row['apellidoe']; ?> </td>
         <td><?php echo $row['NIE']; ?> </td>
         <td><?php echo $row['grado']; ?> </td>
         <td><?php echo $row['fecha_nacimiento']; ?> </td>
         <td><?php echo $row['edad']; ?> </td>
         <td><?php echo $row['genero']; ?> </td>
         <td><?php echo $row['estudio_anterior']; ?> </td>
         <td><?php echo $row['Nombre']; ?> </td>
         <td><?php echo $row['celular']; ?> </td>

         <th> <a href="modulos/modificar.php?id=<?php echo $row['id_estudiante']; ?>"> Modificar</a> 
          |   <a  target="_blank" href="modulos/imprimir.php?id=<?php echo $row['id_estudiante']; ?>">Imprimir ficha</a>| 
          <a href="ficha_medica1.php?id=<?php echo $row['id_estudiante']; ?>">
 Ficha medica</a> </th>
    
         </tr>

         
         <?php 
}
         ?>
                                       

                            </tbody>
                             <!-- Modal -->

  
</div>
                                </table>

  </div>
                            </div>
             
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
