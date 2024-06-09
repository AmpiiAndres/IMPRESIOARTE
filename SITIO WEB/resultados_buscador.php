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

<section>
<?php 
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM obras WHERE nombre LIKE '%$buscar%' ");
	
?>

  <article style="margin-left:20%">
	<p style= "font-family: Dream Orphan; font-size: 200%;" >Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_assoc($consulta)) {
	?>
    <p  style= "font-family: Dream Orphan; font-size: 150%;">
    <?php	
			echo $resultados['nombre'];
			echo $resultados['bio'];
			
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>
</html>