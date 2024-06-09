<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ImpresioArte</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<form id="formcontacto" action="enviar.php" method="post">
        <label>Nombre
            <input type="text" name="nombre" required/>	
        </label>
        <label>Apellido
            <input type="text" name="apellido" required/>	
        </label>
        <label>Email
            <input type="email" name="email"required />
        </label>
        <label>Mensaje
            <textarea name="mensaje"></textarea>
        </label>
        <input type="submit" value="Enviar" />
    </form>	

</body>
</html>