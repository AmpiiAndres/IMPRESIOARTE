<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enviar</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$mensaje=$_POST["mensaje"];



$destino="mail@mail.com,mail2@mail.com";
$asunto="Contacto desde el sitio";
// $mensaje="Nombre: ".$nombre."Apellido: ".$apellido." Email: ".$email ." Mensaje: ".$mensaje;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);
if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}
include 'conexion.php';
// $conexion = mysqli_connect("localhost","root","redcatanox", "contactos") or die('No se pudo conectar al servidor');


// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$localidad','$comentario')");

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre, apellido, email, mensaje) VALUES ( '$nombre', '$apellido', '$email','$mensaje')") or die(mysqli_error($conexion));

?>
</body>
</html>