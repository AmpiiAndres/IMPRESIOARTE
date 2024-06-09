<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);

/*if(isset($_POST['newsletter'])){
	$news="si";
}else{
	$news="no";
}*/
	if ($_POST['newsletter'] === "") {
		$news="no";
	} else {
		$news="si";
	}
	
	include("conexion.php");

	$consulta = mysqli_query($conexion, "INSERT INTO login (nombre, apellido, email, usuario, password) VALUES('$nombre','$apellido','$email', '$usuario', '$password')");

	header("Location:form-login.php");

?>	

    

</body>
</html>