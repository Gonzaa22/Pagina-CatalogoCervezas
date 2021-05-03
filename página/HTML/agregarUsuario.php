<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agregar Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='../CSS/estiloAbm.css'>   
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo" /> 
</head>
<body>
    <form action="../PHP/agregarUsuario.php" method="POST">
        <div class="container">

            <label for="id" id="id"><b>Id</b></label>
            <input type="TEXT" id="id" placeholder="" name="id" disabled>

            <label for="nombre"><b>Nombre</b></label>
            <input type="TEXT" placeholder="Ingresar Nombre" name="nombre" required>
            
            <label for="contrasenia"><b>Contraseña</b></label>
            <input type="TEXT" placeholder="Ingresa Contraseña" name="contrasenia" required>
              
            <button type="SUBMIT">Cargar</button>

          </div>
    </form>
    <script src="JS/editar.js"></script>
</body>
</html>