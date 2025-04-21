<?php
include ('../app/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¿Olvidaste tu contraseña?</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <span class="navbar-brand mb-0 h1">Inicio</span>
        </div>
      </nav>
  <div class="container my-3 ">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-8 col-lg-6">
        <div class="card text-center p-3 shadow">
          <h2>¿Olvidaste tu contraseña?</h2>
          <form id="forgot-password-form">
            <div class="mb-3">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
          <div id="message" class="mt-3 d-none alert alert-success">
            Verifique en  su correo electrónico. Le hemos enviado un enlace para restablecer su contraseña.
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const form = document.getElementById("forgot-password-form");
    const message = document.getElementById("message");

    form.addEventListener("submit", (event) => {
      event.preventDefault();

      console.log("Enviando correo electrónico...");

      // Mostrar mensaje
      message.classList.remove("d-none");

      // Ocultar mensaje despues de 5 segundos
      setTimeout(() => {
        message.classList.add("d-none");
      }, 5000);
    });
  </script>
</body>
</html>
