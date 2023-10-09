<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Bienvenido al sistema</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <h2>Crear un nuevo usuario:</h2>
            <a class="navbar-center" href="index.php">
                <img src="./assets/brand/logo.jpg" alt="" width="150" height="50" class="d-inline-block align-text-top ">
            </a>
        </div>
    </nav>
    <div class="text-center">

        <?php
        if (isset($_GET['mensaje'])) {
            echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>' . $_GET['mensaje'] . '</p></div>';
        }
        ?>

        <form action="" method="post">
            <input name="usuario" class="form-control form-control-lg" placeholder="Usuario"><br>

            <input name="clave" type="password" class="form-control form-control-lg" placeholder="Contraseña"><br>

            <input name="nombre" class="form-control form-control-lg" placeholder="Nombre"><br>

            <input name="apellido" class="form-control form-control-lg" placeholder="Apellido"><br>

            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email"><br>

            <input type="submit" value="Registrarse" class="btn btn-primary">
        </form>
    </div>
</body>

</html>