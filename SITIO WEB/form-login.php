<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ImpresioArte</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <style>
    body {
      background-image: url('Imagenes/fondo-form-login.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
      display: flex;
      flex-direction: column;
    }
    .content-wrapper {
      display: flex;
      flex: 1;
      justify-content: center;
      align-items: center;
    }
    .login-container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 45px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    h2 {
      color: #FF914D;
      font-size: 4vw;
      font-family: 'Groundation Foundation', sans-serif;
      margin-bottom: 20px;
      animation: fadeIn 2.5s;
    }
    form {
      max-width: 500px;
      margin: 0 auto;
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-size: 18px;
      font-family: Louis;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    input[type="submit"], a.button {
      background-color: #FF914D;
      color: white;
      font-family: Louis;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      text-align: center;
      text-decoration: none;
      display: block;
      font-size: 16px;
      transition: background-color 0.3s;
    }
    input[type="submit"]:hover, a.button:hover {
      background-color: #FF4500;
    }
    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      width: 100%;
      position: fixed;
      bottom: 0;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <img src="Imagenes/logo web.png" height="60px">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
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

  <div class="content-wrapper">
    <div class="login-container">
      <h2>Logueate!</h2>
      <form action="login.php" method="post">
        <label>Nombre de usuario
          <input name="usuario" type="text" maxlength="12" />
        </label><br />
        <label>Contraseña
          <input type="password" name="password" maxlength="12" />
        </label><br />
        <input type="submit" value="Login"/>  
      </form>
      <a href="registro.html" class="button">Registrate</a>
    </div>
  </div>
    
  <footer class="footer">
    <div class="copyright-container">
      <p>&copy; 2024 ImpresioArte. Todos los derechos reservados.</p>
    </div>
  </footer>
</body>
</html>
