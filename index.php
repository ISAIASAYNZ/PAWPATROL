<!DOCTYPE html>
<html>
<head>
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Veterinaria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ver-mascotas">Ver Mascotas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#agregar-mascota">Agregar Mascota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="inicio" class="container">
        <h1>Bienvenido a Veterinaria</h1>
        <p>Ofrecemos servicios de atención médica y cuidado para tus mascotas.</p>
        <img src="veterinaria.jpg" alt="Imagen Veterinaria" style="width: 500px;">
    </div>

    <div id="ver-mascotas" class="container">
        <h2>Ver Mascotas</h2>
        <a href="ver-mascotas.php" class="btn btn-dark">Ver Mascotas</a>




        <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        select,
        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>


    </div>

    <div id="agregar-mascota" class="container">
        <h2>Agregar Mascota</h2>
        <!-- Aquí iría el formulario para agregar una nueva mascota -->

       


    <form method="POST" action="agregar-mascota.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" id="tipo" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required><br>

        <button type="submit">Agregar Mascota</button>
    </form>


    </div>

    <div id="contacto" class="container">
        <h2>Contacto</h2>
        <p>Puedes contactarnos en:</p>
        <ul>
            <li>Teléfono: 123456789</li>
            <li>Correo electrónico: contacto@veterinaria.com</li>
            <li>Dirección: Calle Veterinaria 123</li>
        </ul>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
