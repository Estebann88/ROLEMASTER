<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLEMASTER - Gestión de Roles y Usuarios</title>
    <link rel="stylesheet" href="public/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/landing.css">
</head>
<body class="d-flex flex-column min-vh-100" style="background: #1a233a;">
    <!-- Header con botón de inicio de sesión -->
    <header class="navbar navbar-expand-lg navbar-dark" style="background: #27304b;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" style="color: #f8d90f;">ROLEMASTER</a>
            <div class="ms-auto">
                <a href="login/index.php" class="btn btn-warning fw-semibold text-dark">Iniciar sesión</a>
            </div>
        </div>
    </header>

    <!-- Sección principal creativa -->
    <main class="flex-grow-1">
        <section class="hero py-5 text-center" style="background: #21294a;">
            <div class="container">
                <h1 class="display-4 fw-bold mb-3" style="color: #f8d90f;">Bienvenido a ROLEMASTER</h1>
                <p class="lead mb-4 text-white-50">
                    La plataforma definitiva para gestionar roles, usuarios, niveles y grados en tu institución.<br>
                    Optimiza procesos, ahorra tiempo y mantén el control total de tu organización educativa.
                </p>
                <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-gestion-equipo_114360-5835.jpg?w=700" alt="Gestión de equipos" class="img-fluid rounded shadow mb-4" style="max-width: 400px;">
                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm" style="background: #27304b; border: none;">
                            <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-seguridad-cuenta_114360-4575.jpg?w=700" class="card-img-top" alt="Seguridad">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #f8d90f;">Seguridad y Control</h5>
                                <p class="card-text text-white-50">Tus datos siempre protegidos. Controla el acceso de cada usuario según su rol.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm" style="background: #27304b; border: none;">
                            <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-gestion-datos_114360-616.jpg?w=700" class="card-img-top" alt="Gestión">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #f8d90f;">Gestión Eficiente</h5>
                                <p class="card-text text-white-50">Administra niveles, grados y usuarios de forma sencilla y rápida desde un solo lugar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm" style="background: #27304b; border: none;">
                            <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-soporte-tecnico_114360-3484.jpg?w=700" class="card-img-top" alt="Soporte">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #f8d90f;">Soporte y Actualizaciones</h5>
                                <p class="card-text text-white-50">Siempre a la vanguardia, con soporte técnico y mejoras continuas para tu tranquilidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <button class="btn btn-secondary btn-lg" disabled title="Registro solo por invitación" style="background: #f8d90f; color: #21294a; border: none;">Registrarse</button>
                    <p class="mt-2 text-white-50"><small>¿Necesitas acceso? Contacta al administrador para recibir una invitación.</small></p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto" style="background: #27304b !important;">
        <div class="container">
            &copy; <?php echo date('Y'); ?> ROLEMASTER &mdash; Todos los derechos reservados.
        </div>
    </footer>

    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>