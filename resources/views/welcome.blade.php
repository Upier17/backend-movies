<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Películas</title>

    <!-- Enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1524985069026-dd778a71c7b4');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 1rem;
            border-radius: 10px;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.8);
            text-align: center;
            padding: 1rem;
            border-radius: 10px;
            margin-top: 2rem;
        }

        .descripcion {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 2rem;
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">

        <!-- Header -->
        <header class="d-flex align-items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Film_reel_icon.svg/120px-Film_reel_icon.svg.png"
                 alt="Logo Catálogo" class="me-3" width="60">
            <h1 class="m-0">Catálogo de Películas</h1>
        </header>

        <!-- Cuerpo -->
        <main class="my-5 descripcion">
            <h2>Bienvenido</h2>
            <p>
                Este catálogo reúne una colección de películas seleccionadas por género, año y popularidad.
                Aquí podrás consultar información básica de cada cinta, su sinopsis y algunos datos curiosos.
                ¡Disfruta explorando el séptimo arte!
            </p>
        </main>

        <!-- Footer -->
        <footer>
            <p>Materia: Desarrollo Web</p>
            <p>Nombre: Upier</p>
            <p>Código: 000000</p>
            <p>Correo: upier@example.com</p>
        </footer>

    </div>

    <!-- Script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
