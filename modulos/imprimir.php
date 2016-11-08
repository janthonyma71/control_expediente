 <?php
require_once("dompdf/dompdf_config.inc.php");
require("../sql/conexion.php");




 	$dompdf = new DOMPDF();
	$query ="SELECT informacion_encargado.id_informacion_encargado as id_padre,estudiante.id_estudiante ,estudiante.NIE, estudiante.grado, estudiante.fecha_nacimiento, estudiante.lugar_nacimiento, estudiante.edad, estudiante.estudio_anterior, estudiante.razon_retiro,estudiante.nombre as nombree ,estudiante.apellido as apellidoe, estudiante.direccion_casa as direccionC, estudiante.telefono_casa as telefonoC, estudiante.genero, informacion_encargado.nombre as nombre_padre, informacion_encargado.apellido as apellido_padre ,informacion_encargado.dui as dui_padre,informacion_encargado.profesion as profesion_padre,informacion_encargado.telefono_trabajo as trabajo_padre ,informacion_encargado.direccion_trabajo as direccion_trabajo_padre, informacion_encargado.correo as correo_padre, informacion_encargado.cargo as cargo_padre,informacion_encargado.direccion_casa_encargado as casa_padre,informacion_encargado.telefono_casa_encargado as telefono_casa_padre ,informacion_encargado.celular as celular_padre FROM informacion_encargado INNER JOIN estudiante ON estudiante.id_estudiante = informacion_encargado.id_estudiante INNER JOIN encargado ON informacion_encargado.id_encargado = encargado.id_encargado WHERE informacion_encargado.id_encargado = '1' AND estudiante.id_estudiante ='" . $_GET['id'] . "' ";
            $resultado = $conexion -> query($query);

            $row = $resultado -> fetch_assoc();
	$html='';
	$html.='<head><meta charset="utf-8"/>
			</head>
		<body style="margin:200px 0 100px 0; height:100%; position:center;"><header style="top:0; position:fixed;"><table style="width:100%; border:solid; font-size: 16pt;">
		<tr>
			<td rowspan="5" style="width: 10%;"><img src="pdfs/logo.jpg" width="85" height="85" style="margin-left: 10%;">     </td>
			<td rowspan="3" style="width: 25%;"><br><strong>      Colegio Howard  Gardner</strong><br>
			      AMERICAN CHRISTIAN SCHOOL<br>
			       SOLICITUD DE MATRICULA</td>
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
			    <td colspan = 3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>DATOS DEL ASPITANTE</strong> </td>
			</tr>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Grado al que desea ingresar:</strong>  '.$row['grado'].'</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>NIE:</strong> '.$row['NIE'].'</td>
			</tr>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nombre Completo del Alumn@ segun partida de nacimineto:</strong> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$row['nombree'].' '.$row['apellidoe'].'</td>
			</tr>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>

			<tr>
			    <td colspan = 2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Edad:</strong>  '.$row['edad'].'</td><td colspan = 2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Sexo:</strong> '.$row['genero'].'</td>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>

			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Direccion Exacta De Casa:</strong>  '.$row['direccionC'].'</td>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Numero de telefono de casa:</strong>  '.$row['telefonoC'].'</td>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
               <tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Centro de estudio de donde procede:</strong>  '.$row['estudio_anterior'].'</td>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			<tr>
			    <td colspan = 3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Razon por la que retiro de su centro de estudio :</strong>  '.$row['razon_retiro'].'</td>
			<tr>
			<td > &nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
		</thead>
		<tbody>';
		
 	$html.='';

	$html.="<script type=\"text/php\"> 
		if ( isset(\$pdf) ) { 
		    @\$pdf->page_text(8,730,\"" . '_______________________________________________________________ Pagina: {PAGE_NUM} de {PAGE_COUNT}_________________________________________________________ ' . "\", Font_Metrics::get_font(\"helvetica\"), 8, array(0,0,0));
	   
		  	@\$pdf->page_text(8,740, \"Fecha Impresión: \", Font_Metrics::get_font(\"helvetica\"), 8, array(0,0,0)); 
		  	@\$pdf->page_text(8,750,\"" . date('d-m-Y') . "\");

		  	@\$pdf->page_text(8,760, \"Hora Impresión \", Font_Metrics::get_font(\"helvetica\"), 8, array(0,0,0)); 
		  	@\$pdf->page_text(8,770,\"" . date('H:i:s') . "\");

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
