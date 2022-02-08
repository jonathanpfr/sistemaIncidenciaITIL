<html>

<head>
  <title>contacto.php</title>
</head>

<body>

<?php

$Nombre = $_POST['Nombre'];
$Fono = $_POST['Fono'];
$Mail = $_POST['Mail'];
$Mensaje = $_POST['Mensaje'];

$formsent = mail('Mi-email', '¡Usuario Con problemas!', "Peticion de: $Nombre\r\nFono: $Fono\r\nMail: $Mail\r\nMensaje: $Mensaje");
if ($formsent) {
    echo "<p>Hola, $Nombre. Hemos recibido tu mensaje, en breve reciviras una respuesta";
}   else {
    echo "Lo siento no se pudo entregar el mensaje.";
    }

?>
</body>
</html>