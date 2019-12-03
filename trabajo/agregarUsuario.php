<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/agregar.css" />
</head>
<body>
    <form action="PHP/agregarUsuario.php" method="POST">
        <div class="container">

            <h2>Agregar Usuario</h2>
            <br>
            <label for="id"><b>Id</b></label>
            <input type="TEXT" placeholder="" name="id" disabled>
            <br>
            <label for="nombre"><b>Nombre</b></label>
            <input type="TEXT" placeholder="Ingresar Nombre" name="nombre" required>
            <br>
            <label for="contrasenia"><b>Contraseña</b></label>
            <input type="TEXT" placeholder="Ingresa Contraseña" name="contrasenia" required>
            <br>
            <button type="SUBMIT">Cargar</button>

          </div>
    </form>
    <script src="JS/editar.js"></script>
</body>
</html>