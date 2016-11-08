    <?php 
					@session_start();

           include("conexion.php");

            $query = "SELECT id_paciente,alergias, responsable, numero_documento, datos_generales.nombre, datos_generales.apellido FROM  paciente INNER JOIN datos_generales ON datos_generales.id_datos_generales = paciente.id_datos_generales";


			$resultado = $conexion -> query($query);

       
        ?>
                 