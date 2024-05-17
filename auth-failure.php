<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión exitoso</title>
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100%;
    }

    /* Fondo general para la página */
    .fondito {
      background-color: #3f352c;
    }

    /* Fondos para las cajas de texto */
    #floatingInput,
    #floatingPassword,
    #flexCheckDefault {
      background-color: #00000091;
    }

    /* Estilos para la cajita con las credenciales default */
    .credenciales {
      border-radius: 5px;
      /* font-family: 'Courier New', Courier, bold; */
      color: whitesmoke;
      background-color: #00000091;
    }

    .form-signin {
      max-width: 330px;
      padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

<body class="fondito">
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card credenciales">
          <div class="card-body">
            <h1 class="card-title text-center mb-4">Alto ahí! Quien es usted!?</h1>
            <p class="card-text text-center">Bienvenido a la página de error, por favor lárguese de aqui.</p>
            <div class="d-grid gap-2">
              <a href="tienda.php" name="volver" class="btn btn-warning btn-block">Volver al inicio</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>