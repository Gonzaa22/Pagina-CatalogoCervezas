<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
        require_once "../PHP/config.php";
    }

    if(!isset($_SESSION["logueado"]) || $_SESSION["logueado"] !== true){
        header("location: login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='../CSS/estiloPanel.css'>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">-->
    <title>Panel De Control</title>
</head>
<body>
    <?php include "header.php" ?>
    <main>
        <section id = "tablas">
            <h2> CERVEZAS </h2>
            <div style="overflow-x: auto;">
                <table width="500" border="2" style="background-color: #F9F9F9;" id = "tabla-cervezas">
                    <tr>
                        <th>Id</th>
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Litros</th>
                        <th>Precio</th>
                        <th>Imagen</th>
                    </tr>       
                </table>
            </div>
        <br>
            <h2> USUARIOS </h2>
            <div style="overflow-x: auto;">
                <table width="500" border="2" style="background-color: #F9F9F9;" id = "tabla-usuarios">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Contraseña</th>
                    </tr>
                </table>
            </div>
        </section>
        <section id="editarBorrar">
            <h1>Editar o Borrar</h1>
            
            <div id="editarCerveza">
                <h2>Cervezas</h2>
                <form action="../PHP/abmCerveza.php" method="POST">
                    <p id="ID">Id:</p>
                    <select name="cervezas" id="cervezas">
                    </select>
                   <!-- <input type="TEXT" placeholder="Ingresar id de Cerveza" name="id">-->
                    <button type="SUBMIT" id="cervezas" name="agregarC">Agregar</button>
                    <button type="SUBMIT" id="cervezas" name="editarC" >Editar</button>
                    <button type="SUBMIT" id="cervezas" name="borrarC">Borrar</button>
                </form>
            </div>

            <br/>
            <br/>
            <br/>
            
            <div id="editarUsuario">
                <h2>Usuarios</h2>
                    <form action="../PHP/abmUsuario.php" method="POST">
                        <p>Id</p>
                        <select name="usuarios" id="usuarios">
                        </select>
                        <!--<input type="TEXT" placeholder="Ingresar Usuario" name="user" required> -->
                        <button type="SUBMIT" id="usuarios" name="agregarU">Agregar</button>
                        <button type="SUBMIT" id="usuarios" name="editarU">Editar</button>
                        <button type="SUBMIT" id="usuarios" name="borrarU">Borrar</button>
                    </form>
                
            </div>
            

        </section>
    </main>
    <script src="../JS/jquery.js"></script>
    <script src="../JS/panel.js"></script>

    
</body>
</html>