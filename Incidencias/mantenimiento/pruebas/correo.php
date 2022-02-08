<?php

//$dia=$_GET['fecha_dia'];
$dia = '2015-07-10';
$nombre_usuario = 'JOSE';
$id_usuario = '1';
$modulo = 'VENTAS';


//$correo="$nombre_usuario"."@hotmail.com";
$correo = "lazaroortizdaniel@gmail.com";
$destinatario = " $correo";
$asunto = "PRECIO VENTAS DIA " . $dia . " ";
$cuerpo = '
<html>
<head>
   <title> REPORTE VENTAS TIENDA $dia </title>
</head>
<body>
<h1></h1>
<p>
<b></b>.
YO  ' . $nombre_usuario . ' MANDE LOS PRECIOS DE LA FECHA ' . $dia . ' DEL MODULO ' . $modulo . '.
</p>
<p>
<p>DETALLES DE MI MODIFICACION </p>
<p>MODULO :&nbsp;&nbsp;' . $modulo . '
</p>



<p> </p>

<p> </p>
<p> </p>  
<p> Para VIALIZAR LOS PRECIOS HACER CLICK  <a href="http://avicolaintegral.com/avicola_integral_2015/avicola_integral/modulos/proforma_ventas/listado_movil_ventas.php?fec_venta_hoy=' . $dia . ' && id_user=' . $id_usuario . ' && modulo=' . $modulo . ' && nombre=' . $nombre_usuario . ' ">Aqui</a>    </a>
<p> Saludos.
<p> Atte: SERVER ADMINISTRATION  Negociaciones Dilujxi S.A.C </p>


</body>
</html>
';

//para el envÃ­o en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//direcciÃ³n del remitente  gabyguerrero1981@gmail.com
$headers .= "From: AVICOLA INTEGRAL G&G <daniel_tornado123@hotmail.com>\r\n";

//direcciÃ³n de respuesta, si queremos que sea distinta que la del remitente
$headers .= "Reply-To: daniel_tornado123@hotmail.com\r\n";

//ruta del mensaje desde origen a destino
$headers .= "Return-path: daniel_tornado123@hotmail.com\r\n";

//direcciones que recibiÃ¡n copia
$headers .= "Cc: daniel_tornado123@hotmail.com\r\n";

//direcciones que recibirÃ¡n copia oculta
//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);
?>