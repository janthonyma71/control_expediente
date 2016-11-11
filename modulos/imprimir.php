 <?php
require_once("dompdf/dompdf_config.inc.php");
require("../sql/conexion.php");




 	$dompdf = new DOMPDF();
	$query ="SELECT informacion_encargado.id_informacion_encargado as id_padre,estudiante.id_estudiante ,estudiante.NIE, estudiante.grado, estudiante.fecha_nacimiento, estudiante.lugar_nacimiento, estudiante.edad, estudiante.estudio_anterior, estudiante.razon_retiro,estudiante.nombre as nombree ,estudiante.apellido as apellidoe, estudiante.direccion_casa as direccionC, estudiante.telefono_casa as telefonoC, estudiante.genero, informacion_encargado.nombre as nombre_padre, informacion_encargado.apellido as apellido_padre ,informacion_encargado.dui as dui_padre,informacion_encargado.profesion as profesion_padre,informacion_encargado.telefono_trabajo as trabajo_padre ,informacion_encargado.direccion_trabajo as direccion_trabajo_padre, informacion_encargado.correo as correo_padre, informacion_encargado.cargo as cargo_padre,informacion_encargado.direccion_casa_encargado as casa_padre,informacion_encargado.telefono_casa_encargado as telefono_casa_padre ,informacion_encargado.celular as celular_padre FROM informacion_encargado INNER JOIN estudiante ON estudiante.id_estudiante = informacion_encargado.id_estudiante INNER JOIN encargado ON informacion_encargado.id_encargado = encargado.id_encargado WHERE informacion_encargado.id_encargado = '1' AND estudiante.id_estudiante ='" . $_GET['id'] . "' ";
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
	$html='';
	$html.='<head><meta charset="utf-8"/>
			</head>
		<body style="margin:200px 0 100px 0; height:100%; position:center;"><header style="top:0; position:fixed;"><table style="width:100%; border:solid; font-size: 16pt;">
		<tr>
			<td rowspan="5" style="width: 10%;"><img src="pdfs/logo.jpg" width="85" height="85" style="margin-left: 10%;">     </td>
			<td rowspan="3" style="width: 25%;"><br><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      Colegio Howard  Gardner</strong><br>
			      AMERICAN CHRISTIAN SCHOOL<br>
			      &nbsp;&nbsp; SOLICITUD DE MATRICULA</td>
		</tr><tr></tr><tr></tr>
        
</table><hr></header>';


	$html.='<style type="text/css">
		.normal { 
			border: 0px solid #000; 
			border-radius: 5px; 
			border-collapse: collapse; 
			width:100%; 
			font-family: Arial;
			font-size:12pt;
		} 

		.normal tr, 
		.normal td, 
		.normal th { 
			border: 0px  ; 
			text-aling:center;
						width:100%; 
									border-collapse: collapse; 


		} 
		</style>';


	$html.='<table class="normal">
		<thead>
		<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
		    <tr>
			    <td colspan = 3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>DATOS DEL ASPITANTE</u></strong> </td>
			</tr>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Grado al que desea ingresar:</strong> <u> '.$row['grado'].'</u></td><td colspan = 2><strong>NIE:</strong><u> '.$row['NIE'].'</u></td>
			</tr>
			<tr>
			<td > &nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nombre Completo del Alumn@ segun partida de nacimineto:</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>'.$row['nombree'].' '.$row['apellidoe'].'</u></td>
			</tr>
			

			<tr>
			    <td colspan = 2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Edad:</strong>  <u>'.$row['edad'].'</u></td><td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sexo:</strong> <u>'.$row['genero'].'</u></td>
			

			<tr>
			    <td colspan = 4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Direccion Exacta De Casa:</strong> <u>'.$row['direccionC'].'</u></td>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Numero de telefono de casa:</strong> <u> '.$row['telefonoC'].'</u></td>
			
               <tr>
			    <td colspan = 5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Centro de estudio de donde procede:</strong> <u> '.$row['estudio_anterior'].'</u></td>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Razon por la que retiro de su centro de estudio :</strong>  </td><td colspan = 2><u>'.$row['razon_retiro'].'</u></td>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			 <tr>
			    <td colspan = 3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>DATOS DEL PADRE</strong></u> </td>
			</tr>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No. De DUI del Padre :</strong> <u> '.$row['dui_padre'].'</u></td>
			
			<tr>
			    <td colspan = 4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nombre del Padre :</strong> <u> '.$row['nombre_padre'].'  '.$row['apellido_padre'].'</u></td>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Direccion Casa:</strong><u> '.$row['casa_padre'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono casa:</strong><u>  '.$row['telefono_casa_padre'].'</u></td><td colspan = 2><strong>Telefono celular:</strong><u> '.$row['celular_padre'].'</u></td>
			</tr>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Lugar de Trabajo:</strong> <u> '.$row['trabajo_padre'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono de Trabajo:</strong><u>  '.$row['celular_padre'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Cargo que desempeña:</strong><u>  '.$row['cargo_padre'].'</u></td><td colspan = 2><strong>Profesion:</strong><u> '.$row['profesion_padre'].'</u></strong></td>
			</tr>
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Correo:</strong>  <u>'.$row['correo_padre'].'</u></td>
			    			</tr>


			    			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			 <tr>
			    <td colspan = 3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>DATOS DE LA MADRE</strong></u> </td>
			</tr>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No. De DUI del madre :</strong> <u> '.$row1['dui_madre'].'</u></td>
			
			<tr>
			    <td colspan = 4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nombre del madre :</strong> <u> '.$row1['nombre_madre'].'  '.$row1['apellido_madre'].'</u></td>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Direccion Casa:</strong><u> '.$row1['casa_madre'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono casa:</strong><u>  '.$row1['telefono_casa_madre'].'</u></td><td colspan = 2><strong>Telefono celular:</strong><u> '.$row1['celular_madre'].'</u></td>
			</tr>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Lugar de Trabajo:</strong> <u> '.$row1['trabajo_madre'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono de Trabajo:</strong><u>  '.$row1['celular_madre'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Cargo que desempeña:</strong><u>  '.$row1['cargo_madre'].'</u></td><td colspan = 2>&nbsp;&nbsp;&nbsp;<strong>Profesion:</strong><u> '.$row1['profesion_madre'].'</u></td>
			</tr>
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Correo:</strong>  <u>'.$row1['correo_madre'].'</u></td>
			    			</tr>
<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			 <tr>
			    <td colspan = 3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>DATOS DE ENCARGADO</strong></u> </td>
			</tr>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>No. De DUI del encargado :</strong> <u> '.$row2['dui_encargado'].'</u></td>
			
			<tr>
			    <td colspan = 4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nombre del encargado :</strong> <u> '.$row2['nombre_encargado'].'  '.$row2['apellido_encargado'].'</u></td>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Direccion Casa:</strong><u> '.$row2['casa_encargado'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono casa:</strong><u>  '.$row2['telefono_casa_encargado'].'</u></td><td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono celular:</strong><u> '.$row2['celular_encargado'].'</u></td>
			</tr>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Lugar de Trabajo:</strong> <u> '.$row2['trabajo_encargado'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono de Trabajo:</strong><u>  '.$row2['celular_encargado'].'</u></td>
			    			</tr>

			
			<tr>
			    <td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Cargo que desempeña:</strong><u>  '.$row2['cargo_encargado'].'</u></td><td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Profesion:</strong><u> '.$row2['profesion_encargado'].'</u></td>
			</tr>
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Correo:</strong>  <u>'.$row2['correo_encargado'].'</u></td>
			    			</tr>


<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr><tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			 <tr>
			    <td colspan = 3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>OTROS DATOS</strong></u> </td>
			</tr>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Estado Civil de los padres :</strong> <u> '.$row3['estado_civil'].'</u></td>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Auqe iglesia asiste :</strong> <u> '.$row3['iglesia'].' </u></td>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>En caso de emergencia avisar a:</strong><u> '.$row3['emergencia'].'</u></td>
			    			</tr>

			
				<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>En Que parentesco tiene con la persona:</strong><u> '.$row3['parentesco'].'</u></td>
			    			</tr>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono:</strong> <u> '.$row3['telefono_paren'].'</u></td>
			    			</tr>

			<tr>
			    <td colspan = 5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Persona autorizada por el responsable para retirar al alumn@ de la</strong>
</td>
			    	</tr>
			    	<tr>
<td colspan = 5>
			     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>institucion, cuando el responsable no pueda venir a retirarlo:</strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>'.$row3['persona_autorizada'].'</u></td>
			</tr>
			
	<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono:</strong> <u> '.$row3['telefono_autorizado'].'</u></td>
			    			</tr>
				<tr>
			    <td colspan = 4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Otro responsable:</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>'.$row3['otra_persona'].'</u></td>
			</tr>
			
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono:</strong>  <u>'.$row3['telefono'].'</u></td>
			    			</tr>
				<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Si se va en microbus, nombre responsable:</strong>  <u>'.$row3['persona_micro'].'</u></td>
			    			</tr>
			    				<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Telefono celular:</strong>  <u>'.$row3['celular_micro'].'</u></td>
			    			</tr>
			
		</thead>
		<tbody>';
		
 	$html.='';

	$html.="<script type=\"text/php\"> 
		if ( isset(\$pdf) ) { 
		    @\$pdf->page_text(8,740,\"" . '_______________________________________________________________ Pagina: {PAGE_NUM} de {PAGE_COUNT}_________________________________________________________ ' . "\", Font_Metrics::get_font(\"helvetica\"), 8, array(0,0,0));
	   
		  	@\$pdf->page_text(8,750, \"Fecha Impresión: \", Font_Metrics::get_font(\"helvetica\"), 8, array(0,0,0)); 
		  	@\$pdf->page_text(8,760,\"" . date('d-m-Y') . "\");

		  	@\$pdf->page_text(8,770, \"Hora Impresión \", Font_Metrics::get_font(\"helvetica\"), 8, array(0,0,0)); 
		  	@\$pdf->page_text(8,780,\"" . date('H:i:s') . "\");

		} 
	</script>";

	$html.='</footer></body>';

	//echo $html;
	$dompdf->load_html($html);
	$dompdf->set_paper("letter", "portrait");
	$dompdf->render();
	if (file_put_contents('pdfs/'. "reporte"."".".pdf", $dompdf->output())){
		$response=array('success'=>true, 'link3'=>"<iframe src='pdfs/"."reporte.pdf?".md5(rand(1, 999999999))."' width='100%' height='100%'></iframe>");
	} else {
		$response=array('success'=>false, 'error'=>'No se pudo generar el PDF');
	}
	echo json_encode($response);
?>
