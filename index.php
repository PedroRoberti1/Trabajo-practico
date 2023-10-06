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
<body><nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-center" href="#">
      <img src="./assets/brand/logo.jpg" alt="" width="150" height="50" class="d-inline-block align-text-top ">
    </a>
    <h2>Bienvenido a tus peliculas</h2>
   <a href="login.php"><button type="button" class="btn btn-outline-primary">Login</button></a> 
    
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
                <p class="mt-3 mb-3 text-muted">&copy; Tus peliculas -Pedro Roberti -  Andres Ramirez - Bautista Di Benedetto </p>
            </div>

</html>