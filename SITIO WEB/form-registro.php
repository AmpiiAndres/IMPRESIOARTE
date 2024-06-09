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
  <nav class="navbar navbar-expand-lg bg-body-tertiary" ><img src="Imagenes/logo web.png" height="60px">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sobre la vanguardia
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sobre la vanguardia1.html">Descubre el Arte Post Impresionista</a></li>
              <li><a class="dropdown-item" href="sobre la vanguardia2.html">La Revolución del Color y la Emoción.</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Artistas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="artistas-1.html">Vincent Van Gogh</a></li>
              <li><a class="dropdown-item" href="artistas-2.html">Paúl Cezanne</a></li>
              <li><a class="dropdown-item" href="artistas-3.html">Paul Gauguin</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeria de obras.html">Galeria de Obras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tecnicas.html">Tecnicas y Estilos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.html">Registrarse</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<body>
	<h2>Registrate en el sitio</h2>
    <form action="registro.php" method="post" >
    	<label>Nombre
        	<input type="text" name="nombre" required />
        </label><br />
		<label>Apellido
        	<input type="text" name="apellido" required />
        </label><br />
        <label>Email
        	<input type="email" name="email" required />
        </label><br />
        <label>Nombre de usuario
        	<input name="usuario" type="text"/>
        </label><br />
        <label>Contraseña
        	<input type="password" name="password" />
        </label><br />
        <input type="submit" value="Registrarse"/>	
    </form>

</body>
</html>