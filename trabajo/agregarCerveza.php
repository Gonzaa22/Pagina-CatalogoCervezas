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
    <form action="PHP/agregarCerveza.php" method="POST">
        <div class="container">

            <h2>Agregar Cerveza</h2>
            <br>
            <label for="id"><b>Id:</b></label>
            <input type="TEXT" placeholder="" name="id" disabled>
            <br>
            <label for="marca"><b>Marca:</b></label>
            <input type="TEXT" placeholder="Ingresar Marca" name="marca" required>
            <br>
            <label for="tipo"><b>Tipo:</b></label>
            <input type="TEXT" placeholder="Ingresa Tipo" name="tipo" required>
            <br>
            <label for="litros"><b>Litros:</b></label>
            <input type="TEXT" placeholder="Ingresa Litros" name="litros" required>
            <br>
            <label for="precio"><b>Precio:</b></label>
            <input type="TEXT" placeholder="Ingresa Precio" name="precio" required>
            <br>
            <label for="imagen"><b>Imagen:</b></label>
            <input type="TEXT" placeholder="Ingresa dirección de la imagen" name="imagen" required>
            <br>
            <button type="SUBMIT">Cargar</button>

          </div>
    </form>
    <script src="JS/editar.js"></script>
</body>
</html>