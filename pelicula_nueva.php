<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Formulario de Película</title>
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-center" href="index.php">
                <img src="./assets/brand/logo.jpg" alt="" width="150" height="50" class="d-inline-block align-text-top" />
            </a>
            <h2>Agregar nueva película</h2>
            <a href="index.php">
                <button type="button" class="btn btn-outline-secondary">
                    Inicio
                </button>
            </a>
        </div>
    </nav>
        <div class="container mt-4">
            <h2 class="mb-4">Formulario de Película</h2>
            <form action="procesar_formulario.php" method="post">

        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" name="id" required>
        </div>

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" name="titulo" required>
        </div>

        <div class="form-group">
            <label for="ano">Año:</label>
            <input type="number" class="form-control" name="anio" required>
        </div>

        <div class="form-group">
            <label for="genero">Género:</label>
            <input type="text" class="form-control" name="genero" required>
        </div>

        <div class="form-group">
            <label for="disponibilidad">Disponibilidad:</label>
            <select class="form-control" name="disponibilidad">
                <option value="disponible">Disponible</option>
                <option value="no_disponible">No disponible</option>
            </select>
        </div>

        <div class="form-group">
            <label for="resena">Reseña:</label>
            <textarea class="form-control" name="resenia" rows="4" ></textarea>
        </div><br>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="administrador.php" class="btn btn-secondary">Cancelar</a>
    </form>
    <p class="mt-3 mb-3 text-muted fixed-bottom text-center">
            &copy; Tus peliculas | Pedro Roberti • Andrés Ramirez • Bautista DiBenedetto
    </p>
</div>

</body>
</html>