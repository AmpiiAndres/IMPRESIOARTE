<?php session_start(); 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ImpresioArte</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Groundation+Foundation&family=Dream+Orphan&family=Louis&display=swap" rel="stylesheet">
  <style>
    .welcome-container-2 {
      text-align: center;
      margin-top: 50px;
    }

    h1, p {
      margin: 20px;
      color: black;
    }

    .welcome-message {
      color: #FF914D;
      font-size: 3.5vw;
      font-family: 'Groundation Foundation', sans-serif;
      animation: fadeIn 2s, slideInFromTop 1s;
      position: relative;
      display: inline-block;
    }

    .container {
      background-color: #efd2c0;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      margin-top: 20px;
      height: 100%;
    }

    .news-section {
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      margin-top: 20px;
      margin-bottom: 100px;

      margin-left: auto;
      margin-right: auto;
    }

    .news-section h2 {
      font-family: 'Dream Orphan', sans-serif;
      font-size: 45px;
      font-weight: bold; /* Añadir negrita */
    }

    .news-item {
      margin-bottom: 20px;
      padding: 10px;
      transition: transform 0.3s, opacity 0.5s;
    }

    .news-item img {
      width: 100%;
      border-radius: 10px;
    }

    .news-item h3 {
      font-family: 'Louis', sans-serif;
      margin-top: 10px;
      cursor: pointer;
      font-weight: bold; /* Añadir negrita */
    }

    .news-item h3:hover {
      color: #ff6404;
      transform: scale(1.05);
    }

    .news-detail {
      display: none;
      margin-top: 10px;
      animation: fadeIn 1s, slideInFromBottom 0.5s;
    }

    .news-description {
      text-align: left;
      font-family: "Louis";
      font-size: 20px;
    }

    .additional-info {
      display: none;
      font-family: 'Louis', bold;
      margin-top: 10px;
      text-align: left;
      font-size: 18px;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slideInFromTop {
      from { transform: translateY(-50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes slideInFromBottom {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
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

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <img src="Imagenes/logo web.png" height="60px">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sobre la vanguardia</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sobre la vanguardia1.html">Descubre el Arte Post Impresionista</a></li>
              <li><a class="dropdown-item" href="sobre la vanguardia2.html">La Revolución del Color y la Emoción.</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Artistas</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="artistas-1.html">Vincent Van Gogh</a></li>
              <li><a class="dropdown-item" href="artistas-2.html">Paúl Cezanne</a></li>
              <li><a class="dropdown-item" href="artistas-3.html">Paul Gauguin</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="galeria de obras.html">Galeria de Obras</a></li>
          <li class="nav-item"><a class="nav-link" href="tecnicas.html">Tecnicas y Estilos</a></li>
          <li class="nav-item"><a class="nav-link" href="contacto.html.html">Contacto</a></li>
          <li class="nav-item"><a class="nav-link" href="registro.html">Registrarse</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="welcome-container-2">
    <?php
      if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {
          echo "<h1 class='welcome-message'>Hola! " . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "</h1>";
          echo "<a href='salir.php' class='btn btn-primary'> Cerrar sesión</a>"; 
      } 
      else {
          echo "<h1 class='welcome-message'>Solo usuarios registrados...</h1>";
          echo "<a href='salir.php' class='btn btn-primary'> Cerrar sesión</a>"; 
          
      }
    ?>
  </div>
  <div class="news-section container">
    <h2>Últimas Noticias</h2>
    <div class="row">
      <div class="col-md-4 news-item">
        <img src="Imagenes/noticia-1.jpg" alt="Noticia 1">
        <h3 onclick="toggleNews('news-detail-1')">¡Nuevo artículo sobre Van Gogh publicado!</h3>
        <div id="news-detail-1" class="news-detail">
          <p class="news-description">Van Gogh es uno de los artistas más icónicos del postimpresionismo. Su vida y obra continúan inspirando a generaciones...</p>
          <div class="additional-info">
          El legado de Vincent van Gogh, el genio atormentado del postimpresionismo, sigue cautivando al mundo del arte. 
          En un emocionante desarrollo, un nuevo artículo titulado "El misterio de las cartas perdidas de Van Gogh" ha sido publicado, 
          revelando detalles fascinantes sobre la vida íntima del artista. Este hallazgo revolucionario llega tras el descubrimiento 
          de una serie de cartas anteriormente desconocidas, encontradas en un ático olvidado en Francia. Estas cartas ofrecen una ventana 
          única hacia la mente creativa de Van Gogh, arrojando luz sobre sus pensamientos más profundos, sus luchas personales y su apasionada dedicación al arte.
          </div>
          <button class="btn btn-danger" onclick="toggleAdditionalInfo('news-detail-1')">Ver más</button>
        </div>
      </div>
      <div class="col-md-4 news-item">
        <img src="Imagenes/Noticia-2.jpg" alt="Noticia 2">
        <h3 onclick="toggleNews('news-detail-2')">Exposición de arte postimpresionista el próximo mes</h3>
        <div id="news-detail-2" class="news-detail">
          <p class="news-description">Se avecina una emocionante exposición de arte postimpresionista. No te la pierdas...</p>
          <div class="additional-info">
          El mundo del arte está listo para recibir una emocionante exposición de arte postimpresionista el próximo mes. 
          La galería local se transformará en un santuario de la creatividad, albergando una amplia selección de obras maestras 
          que encapsulan la esencia del movimiento postimpresionista. Desde los evocadores paisajes de Monet hasta las íntimas escenas de la vida cotidiana de Renoir, 
          los visitantes tendrán la oportunidad de sumergirse en la belleza y la innovación de uno de los períodos más destacados en la historia del arte. 
          Esta exhibición no solo ofrece un escaparate de obras icónicas, sino también una ventana a la revolución artística que transformó la percepción del mundo 
          en el siglo XIX. 
          </div>
          <button class="btn btn-danger" onclick="toggleAdditionalInfo('news-detail-2')">Ver más</button>
        </div>
      </div>
      <div class="col-md-4 news-item">
        <img src="Imagenes/Noticia-3.jpg" alt="Noticia 3">
        <h3 onclick="toggleNews('news-detail-3')">Aprende a pintar como tu artista favorito</h3>
        <div id="news-detail-3" class="news-detail">
          <p class="news-description">Aprovecha la oportunidad y inscríbete en uno de nuestros cursos para aprender las técnicas de los maestros del arte...</p>
          <div class="additional-info">
          Alguna vez has soñado con capturar la esencia de tus artistas favoritos en lienzo? Ahora puedes convertir ese sueño en realidad. 
          Nuestros cursos de arte te brindan la oportunidad de explorar las técnicas y estilos de los grandes maestros, desde la audacia 
          expresiva de Picasso hasta la maestría técnica de Rembrandt y la emotividad de Frida Kahlo. Nuestros instructores expertos te guiarán 
          a través de ejercicios prácticos diseñados para ayudarte a comprender y dominar las técnicas distintivas de cada artista. 
          No se requiere experiencia previa, solo una pasión ardiente por aprender y crear. ¡Únete a nosotros y descubre tu potencial artístico!
          </div>
          <button class="btn btn-danger" onclick="toggleAdditionalInfo('news-detail-3')">Ver más</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="copyright-container">
      <p>&copy; 2024 ImpresioArte. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function toggleNews(detailId) {
      const detailElement = document.getElementById(detailId);
      if (detailElement.style.display === 'none' || detailElement.style.display === '') {
        detailElement.style.display = 'block';
        detailElement.classList.add('slide-in');
      } else {
        detailElement.style.display = 'none';
      }
    }

    function toggleAdditionalInfo(detailId) {
      event.stopPropagation();
      const detailElement = document.getElementById(detailId);
      const additionalInfo = detailElement.querySelector('.additional-info');
      const button = detailElement.querySelector('button');
      
      if (additionalInfo.style.display === 'none' || additionalInfo.style.display === '') {
        additionalInfo.style.display = 'block';
        button.textContent = 'Ver menos';
      } else {
        additionalInfo.style.display = 'none';
        button.textContent = 'Ver más';
      }
    }
  </script>
</body>
</html>
