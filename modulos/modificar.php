<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Howard</title>
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
include("../sql/mostrar_modulo.php");
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
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                        <?php @session_start();
include_once('../sql/pantalla_modulo.php') ?>

                 
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Modificar Estudiante <small>                               <a href="../mostrar_estudiante.php" ><button class="btn btn-default"> Regresar a la tabla</button> </a>
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

            include("../sql/conexion.php");

            $query = "SELECT informacion_encargado.id_informacion_encargado as id_padre,estudiante.id_estudiante ,estudiante.NIE, estudiante.grado, estudiante.fecha_nacimiento, estudiante.lugar_nacimiento, estudiante.edad, estudiante.estudio_anterior, estudiante.razon_retiro,estudiante.nombre as nombree ,estudiante.apellido as apellidoe, estudiante.direccion_casa as direccionC, estudiante.telefono_casa as telefonoC, estudiante.genero, informacion_encargado.nombre as nombre_padre, informacion_encargado.apellido as apellido_padre ,informacion_encargado.dui as dui_padre,informacion_encargado.profesion as profesion_padre,informacion_encargado.telefono_trabajo as trabajo_padre ,informacion_encargado.direccion_trabajo as direccion_trabajo_padre, informacion_encargado.correo as correo_padre, informacion_encargado.cargo as cargo_padre,informacion_encargado.direccion_casa_encargado as casa_padre,informacion_encargado.telefono_casa_encargado as telefono_casa_padre ,informacion_encargado.celular as celular_padre FROM informacion_encargado INNER JOIN estudiante ON estudiante.id_estudiante = informacion_encargado.id_estudiante INNER JOIN encargado ON informacion_encargado.id_encargado = encargado.id_encargado WHERE informacion_encargado.id_encargado = '1' AND estudiante.id_estudiante ='" . $_GET['id'] . "' ";
           


            $resultado = $conexion -> query($query);

            $row = $resultado -> fetch_assoc();

              $query1 = "SELECT  informacion_encargado.id_informacion_encargado as id_madre , informacion_encargado.nombre as nombre_madre, informacion_encargado.apellido as apellido_madre ,informacion_encargado.dui as dui_madre,informacion_encargado.profesion as profesion_madre,informacion_encargado.telefono_trabajo as trabajo_madre ,informacion_encargado.direccion_trabajo as direccion_trabajo_madre, informacion_encargado.correo as correo_madre, informacion_encargado.cargo as cargo_madre,informacion_encargado.direccion_casa_encargado as casa_madre,informacion_encargado.telefono_casa_encargado as telefono_casa_madre ,informacion_encargado.celular as celular_madre FROM informacion_encargado INNER JOIN estudiante ON estudiante.id_estudiante = informacion_encargado.id_estudiante INNER JOIN encargado ON informacion_encargado.id_encargado = encargado.id_encargado WHERE informacion_encargado.id_encargado = '2' AND estudiante.id_estudiante ='" . $_GET['id'] . "' ";
                       


                        $resultado1 = $conexion -> query($query1);

                        $row1 = $resultado1 -> fetch_assoc();

             $query2 = "SELECT informacion_encargado.id_informacion_encargado as id_encargado ,informacion_encargado.nombre as nombre_encargado, informacion_encargado.apellido as apellido_encargado ,informacion_encargado.dui as dui_encargado,informacion_encargado.profesion as profesion_encargado,informacion_encargado.telefono_trabajo as trabajo_encargado ,informacion_encargado.direccion_trabajo as direccion_trabajo_encargado, informacion_encargado.correo as correo_encargado, informacion_encargado.cargo as cargo_encargado,informacion_encargado.direccion_casa_encargado as casa_encargado,informacion_encargado.telefono_casa_encargado as telefono_casa_encargado ,informacion_encargado.celular as celular_encargado FROM informacion_encargado INNER JOIN estudiante ON estudiante.id_estudiante = informacion_encargado.id_estudiante INNER JOIN encargado ON informacion_encargado.id_encargado = encargado.id_encargado WHERE informacion_encargado.id_encargado = '3' AND estudiante.id_estudiante ='" . $_GET['id'] . "' ";
                                   


                                    $resultado2 = $conexion -> query($query2);

                                    $row2 = $resultado2 -> fetch_assoc();

                                      $query3 = "SELECT  estado_civil , iglesia , emergencia , parentesco , telefono_paren , persona_autorizada , telefono_autorizado , otra_persona , telefono , persona_micro , celular_micro  FROM otros_datos INNER JOIN estudiante ON estudiante.id_estudiante = otros_datos.id_estudiante WHERE estudiante.id_estudiante ='" . $_GET['id'] . "' ";
                                   
                                    $resultado3 = $conexion -> query($query3);

                                    $row3 = $resultado3 -> fetch_assoc();


            //$id_datos_generales = $row['id_datos_generales'];
           // $id_paciente = $row['id_estudiante'];

         ?>
                               

                                       
    <form role="form" method="POST" action="../sql/modificar.php">
                                        <div class="col-xs-2">
                                          
                                        </div>
                                        <input type="hidden" value="<?php echo $row['id_estudiante'];  ?>" name="id_estudiante" >
                                        <input type="hidden" value="<?php echo $row['id_padre'];  ?>" name="id_padre" >
                                        <input type="hidden" value="<?php echo $row1['id_madre'];  ?>" name="id_madre" >
                                        <input type="hidden" value="<?php echo $row2['id_encargado'];  ?>" name="id_encargado" >


                                        <div class="col-xs-3">
                                            <label style="color : #000">NIE:</label>
                                            <input class="form-control" name="nie" value="<?php echo $row['NIE'];  ?>">
                                        </div>
                                        <div class="col-xs-2">
                                          
                                        </div>
                                        <div class="col-xs-3">
                                            <label style="color : #000">Grado al que desea ingresar:</label>
                                            <input class="form-control" name="grado" required="/" value="<?php echo $row['grado'];  ?>">
                                        </div>
                                        <div class="col-xs-2">
                                          
                                        </div>
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres:</label>
                                            <input class="form-control" name="nombre" required="/"value="<?php echo $row['nombree'];  ?>">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Apellidos:</label>
                                            <input class="form-control" name="apellido" required="/" value="<?php echo $row['apellidoe'];  ?>">
                                        </div>
                                         <div class="col-xs-3">
                                                                                   <br>

                                            <label style="color : #000">Fecha de nacimiento:</label>
                                            <input type="date" class="form-control" name="fecha_nac" required="/" value="<?php echo $row['fecha_nacimiento'];  ?>">
                                        </div>
                                        <div class="col-xs-7">   
                                                       <br>
                                            <label style="color : #000">Lugar de nacimiento:</label>
                                            <input class="form-control" name="lugar_nac" required="/" value="<?php echo $row['lugar_nacimiento'];  ?>">
                                        </div>
                                        <div class="col-xs-2">
                                                       <br>
                                                        <label style="color : #000">Edad:</label>
                                            <input class="form-control" name="edad" required="/" value="<?php echo $row['edad'];  ?>">
                                        </div>
                                           <div class="col-xs-4">
                                                       <br>
                                                       <label style="color : #000">Genero:</label>
                                            <select class="form-control" name ="genero" value="<?php echo $row['genero'];  ?>">
                                                <option>Femenino</option>
                                                <option>Masculino</option>
                                            </select>
                                        </div>
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Direccion exacta de casa </label>
                                            <input class="form-control" name="direc_casa" required="/" value="<?php echo $row['direccionC'];  ?>">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de telefono de casa:</label>
                                            <input class="form-control" name="tel_casa" required="/" value="<?php echo $row['telefonoC'];  ?>">
                                        </div>
                                     
                                          
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Centro de estudios anteriores:</label>
                                            <input class="form-control" name="estudio_anteriores" required="/" value="<?php echo $row['estudio_anterior'];  ?>">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Razon por la que se retiro:</label>
                                            <input class="form-control" name="razon_retiro" required="/" value="<?php echo $row['razon_retiro'];  ?>">
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
                                            <input class="form-control" name="dui_padre" required="/" value="<?php echo $row['dui_padre'];  ?>">
                                        </div>
                                     
                                            <div class="col-xs-12">
                                                       <br>
                                                        
                                        </div>
                                       
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres del padre:</label>
                                            <input class="form-control" name="nombre_padre" required="/" value="<?php echo $row['nombre_padre'];  ?>">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Apellidos del padre:</label>
                                            <input class="form-control" name="apellido_padre" required="/" value="<?php echo $row['apellido_padre'];  ?>">
                                        </div>
                                         
                                        
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Direccion exacta de casa </label>
                                            <input class="form-control" name="direc_casa_padre" required="/" value="<?php echo $row['casa_padre'];  ?>">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de telefono de casa:</label>
                                            <input class="form-control" name="tel_casa_padre" required="/"value="<?php echo $row['telefono_casa_padre'];  ?>">
                                        </div>
                                      <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de celular:</label>
                                            <input class="form-control" name="cel_padre" required="/" value="<?php echo $row['celular_padre'];  ?>">
                                        </div>
                                          
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Lugar de trabajo:</label>
                                            <input class="form-control" name="trabajo_padre" required="/" value="<?php echo $row['direccion_trabajo_padre'];  ?>">
                                        </div>
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Cargo que desempeña:</label>
                                            <input class="form-control" name="cargo_desempeña_padre" required="/" value="<?php echo $row['cargo_padre'];  ?>">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Profesion:</label>
                                            <input class="form-control" name="profesion_padre" required="/" value="<?php echo $row['profesion_padre'];  ?>">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Correo:</label>
                                            <input class="form-control" name="correo_padre" required="/" value="<?php echo $row['correo_padre'];  ?>">
                                        </div>
                                      <div class="col-xs-12">
                                                       <br>
                                                       <br>
                                                

                                        </div>
                                     <div class="x_title col-md-12 col-sm-12 col-xs-12">
                                            <br>
                                    <h2 style="color : #000" >INGRESAR DATOS DEL MADRE <br><small></small></h2>
                                    <br>
                                    <div class="clearfix"></div>

                                     </div>
                                        <div class="col-xs-3">
                                            <label style="color : #000">DUI del madre:</label>
                                            <input class="form-control" name="dui_madre" required="/" value="<?php echo $row1['dui_madre'];  ?>">
                                        </div>
                                     
                                            <div class="col-xs-12">
                                                       <br>
                                                        
                                        </div>
                                       
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres del madre:</label>
                                            <input class="form-control" name="nombre_madre" required="/" value="<?php echo $row1['nombre_madre'];  ?>">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Apellidos del madre:</label>
                                            <input class="form-control" name="apellido_madre" required="/" value="<?php echo $row1['apellido_madre'];  ?>">
                                        </div>
                                         
                                        
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Direccion exacta de casa </label>
                                            <input class="form-control" name="direc_casa_madre" required="/" value="<?php echo $row1['casa_madre'];  ?>">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de telefono de casa:</label>
                                            <input class="form-control" name="tel_casa_madre" required="/"value="<?php echo $row1['telefono_casa_madre'];  ?>">
                                        </div>
                                      <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de celular:</label>
                                            <input class="form-control" name="cel_madre" required="/" value="<?php echo $row1['celular_madre'];  ?>">
                                        </div>
                                          
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Lugar de trabajo:</label>
                                            <input class="form-control" name="trabajo_madre" required="/" value="<?php echo $row1['direccion_trabajo_madre'];  ?>">
                                        </div>
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Cargo que desempeña:</label>
                                            <input class="form-control" name="cargo_desempeña_madre" required="/" value="<?php echo $row1['cargo_madre'];  ?>">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Profesion:</label>
                                            <input class="form-control" name="profesion_madre" required="/" value="<?php echo $row1['profesion_madre'];  ?>">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Correo:</label>
                                            <input class="form-control" name="correo_madre" required="/" value="<?php echo $row1['correo_madre'];  ?>">
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
                                            <input class="form-control" name="dui_encargado" required="/" value="<?php echo $row2['dui_encargado'];  ?>">
                                        </div>
                                     
                                            <div class="col-xs-12">
                                                       <br>
                                                        
                                        </div>
                                       
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Nombres del encargado:</label>
                                            <input class="form-control" name="nombre_encargado" required="/" value="<?php echo $row2['nombre_encargado'];  ?>">
                                        </div>
                                          <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Apellidos del encargado:</label>
                                            <input class="form-control" name="apellido_encargado" required="/" value="<?php echo $row2['apellido_encargado'];  ?>">
                                        </div>
                                         
                                        
                                            <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Direccion exacta de casa </label>
                                            <input class="form-control" name="direc_casa_encargado" required="/" value="<?php echo $row2['casa_encargado'];  ?>">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de telefono de casa:</label>
                                            <input class="form-control" name="tel_casa_encargado" required="/"value="<?php echo $row2['telefono_casa_encargado'];  ?>">
                                        </div>
                                      <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Numero de celular:</label>
                                            <input class="form-control" name="cel_encargado" required="/" value="<?php echo $row2['celular_encargado'];  ?>">
                                        </div>
                                          
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Lugar de trabajo:</label>
                                            <input class="form-control" name="trabajo_encargado" required="/" value="<?php echo $row2['direccion_trabajo_encargado'];  ?>">
                                        </div>
                                          <div class="col-xs-7">
                                                       <br>
                                                        <label style="color : #000">Cargo que desempeña:</label>
                                            <input class="form-control" name="cargo_desempeña_encargado" required="/" value="<?php echo $row2['cargo_encargado'];  ?>">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Profesion:</label>
                                            <input class="form-control" name="profesion_encargado" required="/" value="<?php echo $row2['profesion_encargado'];  ?>">
                                        </div>
                                         <div class="col-xs-5">
                                                       <br>
                                                        <label style="color : #000">Correo:</label>
                                            <input class="form-control" name="correo_encargado" required="/" value="<?php echo $row2['correo_encargado'];  ?>">
                                        </div>
                                      <div class="col-xs-12">
                                                       <br>
                                                       <br>
                                                

                                        </div>
                                     <div class="x_title col-md-12 col-sm-12 col-xs-12">
                                            <br>
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
                                            <input class="form-control" name="iglesia" value="<?php echo $row3['iglesia'];  ?>">
                                        </div>
                                     
                                        <div class="col-xs-6">
                                                                            <br />

                                            <label style="color : #000">En caso de emergencia avisar a:</label>
                                            <input class="form-control" name="emergencia" required="/" value="<?php echo $row3['emergencia'];  ?>">
                                        </div>
                                   
                                            <div class="col-xs-6">
                                                       <br>
                                                        <label style="color : #000">Que parentesco tiene con esa persona:</label>
                                            <input class="form-control" name="parentesco" required="/" value="<?php echo $row3['parentesco'];  ?>">
                                        </div>
                                          <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono:</label>
                                            <input class="form-control" name="telefono_emergencia" required="/" value="<?php echo $row3['telefono_paren'];  ?>">
                                        </div>
                                         <div class="col-xs-12">

                                          
                                        </div>
                                         <div class="col-xs-12">
                                                                                   <br>

                                             <br>
                                                        <label style="color : #000">Persona autorizada por el responsable para retirar al alumno de la institucion:</label>
                                            <input class="form-control" name="persona_retiro" required="/"value="<?php echo $row3['persona_autorizada'];  ?>">
                                        </div>
                                        <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono person autorizada:</label>
                                            <input class="form-control" name="telefono_retiro" required="/" value="<?php echo $row3['telefono_autorizado'];  ?>">
                                        </div>
                                         <div class="col-xs-12">

                                          
                                        </div>
                                        <div class="col-xs-12">
                                                                                   <br>

                                             <br>
                                                        <label style="color : #000">Otro responsable:</label>
                                            <input class="form-control" name="persona_otro" required="/"value="<?php echo $row3['otra_persona'];  ?>">
                                        </div>
                                        <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono otro responsable:</label>
                                            <input class="form-control" name="telefono_otro" required="/" value="<?php echo $row3['telefono'];  ?>">
                                        </div>
                                         <div class="col-xs-12">

                                          
                                        </div>
                                        
                                     <div class="col-xs-12">
                                                                                   <br>

                                             <br>
                                                        <label style="color : #000">Si se va en microbus, escriba el nombre del responsable:</label>
                                            <input class="form-control" name="persona_micro" required="/"value="<?php echo $row3['persona_micro'];  ?>">
                                        </div>
                                        <div class="col-xs-4">
                                                       <br>
                                                        <label style="color : #000">Telefono microbus:</label>
                                            <input class="form-control" name="telefono_micro" required="/" value="<?php echo $row3['celular_micro'];  ?>">
                                        </div>
                                         <div class="col-xs-12">

                                          
                                        </div>

                                </div>

                                        

                                              <div class="col-xs-12">
                                              <br>
                                              <button type="submit" class="btn btn-default col-md-12" >Guardar informacion</button>
                                              </div>   
                                             
                                       
                                        
                                    </form>
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
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
