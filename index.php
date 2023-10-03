<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tus peliculas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="./assets/brand/logo.jpg" alt="" width="150" height="50" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- fin alerta -->
                <div class="card">
                    <div class="card-header">
                        Lista de peliculas
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Año</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Reseña</th>
                                    <th scope="col">Disponibilidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí puedes agregar filas a la tabla según tus necesidades -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Ingrese con su cuenta:
                    </div>
                    <form class="p-4" method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Usuario: </label>
                            <input type="text" class="form-control" name="" autofocus required maxlength="40">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña: </label>
                            <input type="text" class="form-control" name="" autofocus required maxlength="10">
                        </div>
                        <div class="d-grid gap-2 text-center">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-primary" value="Ingresar">
                            <a href="create.php">Crear cuenta</a>        
                            <p class="mt-3 mb-1 text-muted">&copy; Tus Peliculas - Pedro Roberti - Andres Ramirez - Bautista Di Benedetto</p>      
                        </div>           
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>