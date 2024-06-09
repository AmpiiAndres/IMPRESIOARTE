<?php session_start(); ?>
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
 <style>
   body {
      background-position: center;
      background-repeat: no-repeat;
      background-image: url('Imagenes/fondo-login.jpg');
      background-size: cover;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      position: relative;
      min-height: 100vh;
    }
    .container-login {
      max-width: 900px;
      margin: 5% auto 0; /* Cambié margin-top a margin */
      padding: 50px 20px;
      text-align: center;
    }

    .welcome-text {
      color: #FF914D;
      font-size: 3vw;
      font-family: Groundation Foundation;
      margin-bottom: 30px;
      animation: fadeIn 3s;
    }

    .info-text {
      color: rgb(0, 0, 0);
      font-size: 1.7vw;
      font-family: Louis;
      margin-bottom: 30px;
      animation: fadeIn 3s;
    }

    .btn-primary {
      background-color: #FF914D;
      border: none;
      outline: none;
      box-shadow: none;
    }

    .btn-primary:hover{
      background-color: red;
    }

    .btn-primary:focus {
      outline: none;
      box-shadow: none;
    }

    .footer {
      background-color: #44291b;
      padding: 20px 0;
      text-align: center;
      width: 100%;
      margin-top: auto; /* Cambié margin-top a auto */
      position: absolute;
      bottom: 0;
      left: 0;
    }

    .footer p {
      margin: 0;
      color: #fff;
    }

    .copyright-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }


.tick-container {
  position: relative;
  height: 60px;
  width: 100px;
  margin-top: 3%;
  margin-left: 47%;
}

.tick-arm-container {
  position: absolute;
  display: inline-block;
  transform: rotate(45deg);
  top: 10%;
  left: 67px;
}

.tick-arm-1 {
  opacity: 0;
  background-color: #2ED06E;
  width: 8px;
  height: 8px;
  border-radius: 4px;
  position: absolute;
  top: 61px;
  left: 19px;
  animation: tick-arm-1-draw 0.4s 1s cubic-bezier(0.8,0.2,0,0) forwards;
  -webkit-animation: tick-arm-1-draw 0.4s 1s cubic-bezier(0.8,0.2,0,0) forwards;
}

.tick-arm-2 {
  background-color: #2ED06E;
  width: 8px;
  height: 0px;
  border-radius: 4px;
  position: absolute;
  top: 66px;
  left: 44px;
  animation: tick-arm-2-draw 0.4s 1s cubic-bezier(0.5,0,0,1) forwards;
  -webkit-animation: tick-arm-2-draw 0.4s 1s cubic-bezier(0.5,0,0,1) forwards;
}

.tick-circle {
  animation: draw 0.8s cubic-bezier(0.8,0.2,0.2,1);
  -webkit-animation: draw 0.8s cubic-bezier(0.8,0.2,0.2,1);
}

@keyframes tick-arm-1-draw {
  0% {
    opacity: 0;
    width: 8px;
  }
  2% {
    opacity: 1;
  }
  30% {
    width: 33px;
  }
  100% {
    opacity: 1;
    width: 33px;
  }
}

@keyframes tick-arm-2-draw {
  0% {
    height: 0px;
    top: 66px;
  }
  29% {
    height: 0px;
    top: 66px;
  }
  100% {
    height: 69px;
    top: 0;
  }
}

@keyframes draw {
  0% {
    stroke-dashoffset: 400;
    stroke-dasharray: 400;
  }
  100% {
    stroke-dashoffset: 0;
    stroke-dasharray: 400;
  }
}

 </style>


    <?php
    
      $usuario=$_POST['usuario'];
      $password=md5($_POST['password']);

      include("conexion.php");

      $consulta=mysqli_query($conexion, "SELECT nombre, apellido FROM login WHERE usuario='$usuario' AND password='$password'");

      $resultado=mysqli_num_rows($consulta);

      if($resultado!=0){
	     $respuesta=mysqli_fetch_array($consulta);
	
	      $_SESSION['nombre']=$respuesta['nombre'];
	      $_SESSION['apellido']=$respuesta['apellido'];
          echo ' <div class="tick-container m-b-lg" id="tick-container">
          <div class="tick-arm-container">
            <div class="tick-arm-1"></div>
            <div class="tick-arm-2"></div>
          </div>
          <svg 	version="1.1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
               x="0px" y="0px"
               width="134px" height="134px"
               viewBox="0 0 134 134"
               enable-background="new 0 0 134 134" xml:space="preserve">
            <circle 	class="tick-circle "
                    fill="transparent"
                    stroke="#2ED06E"
                    stroke-width="3"
                    stroke-linejoin="miter"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    cx="68"
                    cy="68"
                    r="64"
                    transform = "rotate(-90 68 68)"/>
          </svg>
        </div>';
        echo '  <div class="container-login">';
		      echo "<div class='welcome-text'>¡Gracias por registrarte, " . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "!</div>";
          echo "<div class='info-text'>Ahora puedes acceder al panel de usuarios donde encontrarás noticias exclusivas para miembros.</div>";
          echo "<a href='panel.php' class='btn btn-primary'>Acceder al Panel de Usuarios</a>  </div>";
          
        }
        else {
        echo "<div class='container-login'><h1 class='welcome-message'>Solo usuarios registrados...</h1><div>";
        echo "<a href='registro.html' class='btn btn-primary'>Registrate</a>  </div>";
        
    }
    ?>


  <footer class="footer">
    <div class="copyright-container">
      <p>&copy; 2024 ImpresioArte. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>