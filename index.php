<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLEMASTER - Gestión de Roles y Usuarios</title>
    <link rel="stylesheet" href="public/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/landing.css">
</head>
<body class="bg-landing d-flex flex-column min-vh-100">
    <!-- Header con botón de inicio de sesión -->
    <header class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">
                <img src="public/images/configuracion/logo.png" alt="Logo" class="logo-img me-2">ROLEMASTER
            </a>
            <div class="ms-auto">
                <a href="login/index.php" class="btn btn-primary fw-semibold">Iniciar sesión</a>
            </div>
        </div>
    </header>

    <!-- Sección principal creativa -->
    <main class="flex-grow-1">
        <section class="hero-landing text-center">
            <div class="container">
                <h1 class="display-4 fw-bold mb-3 text-dark">Bienvenido a <span class="text-primary">ROLEMASTER</span></h1>
                <p class="lead mb-4 text-secondary">
                    La plataforma definitiva para gestionar roles, usuarios, niveles y grados en tu institución.<br>
                    Optimiza procesos, ahorra tiempo y mantén el control total de tu organización educativa.
                </p>
                <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-gestion-equipo_114360-5835.jpg?w=200" alt="Gestión de equipos" class="img-fluid rounded shadow mb-4 hero-img-small">
                <div class="row mt-4">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm card-landing">
                            <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-seguridad-cuenta_114360-4575.jpg?w=100" class="card-img-top card-img-small mx-auto mt-3" alt="Seguridad">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Seguridad y Control</h5>
                                <p class="card-text text-dark">Tus datos siempre protegidos. Controla el acceso de cada usuario según su rol.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm card-landing">
                            <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-gestion-datos_114360-616.jpg?w=100" class="card-img-top card-img-small mx-auto mt-3" alt="Gestión">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Gestión Eficiente</h5>
                                <p class="card-text text-dark">Administra niveles, grados y usuarios de forma sencilla y rápida desde un solo lugar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm card-landing">
                            <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-soporte-tecnico_114360-3484.jpg?w=100" class="card-img-top card-img-small mx-auto mt-3" alt="Soporte">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Soporte y Actualizaciones</h5>
                                <p class="card-text text-dark">Siempre a la vanguardia, con soporte técnico y mejoras continuas para tu tranquilidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary btn-lg" disabled title="Registro solo por invitación">Registrarse</button>
                    <p class="mt-2 text-muted"><small>¿Necesitas acceso? <span class="text-secondary">Contacta al administrador para recibir una invitación.</span></small></p>
                    <p class="mt-1 text-secondary"><small>¿Olvidaste tu contraseña? <span class="text-muted">Recupérala desde el inicio de sesión.</span></small></p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-landing text-center py-3 mt-auto">
        <div class="container">
            &copy; <?php echo date('Y'); ?> <span class="text-primary">ROLEMASTER</span> &mdash; Todos los derechos reservados.
        </div>
    </footer>

    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>