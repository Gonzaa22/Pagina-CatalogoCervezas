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
    <link rel='stylesheet' href='../CSS/estilo.css'>
    <title>Panel De Control</title>
</head>
<body>
    <?php include "header.php" ?>
    <main>
        <section id = "tablas">
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
            
            <div>
                <form action="../PHP/abmCerveza.php" method="POST">
                    <select name="cervezas" id="cervezas">
                    </select>
                   <!-- <input type="TEXT" placeholder="Ingresar id de Cerveza" name="id">-->
                    <button type="SUBMIT" name="agregarC">Agregar</button>
                    <button type="SUBMIT" name="editarC" >Editar</button>
                    <button type="SUBMIT" name="borrarC">Borrar</button>
                </form>
            </div>

            <br/>
            <br/>
            <br/>
            
            <div>
                
                <form action="../PHP/abmUsuario.php" method="POST">
                    <select name="usuarios" id="usuarios">
                    </select>
                    <!--<input type="TEXT" placeholder="Ingresar Usuario" name="user" required> -->
                    <button type="SUBMIT" name="agregarU">Agregar</button>
                    <button type="SUBMIT" name="editarU">Editar</button>
                    <button type="SUBMIT" name="borrarU">Borrar</button>
                </form>
                
            </div>
            

        </section>
    </main>
    <script src="../JS/jquery.js"></script>
    <script src="../JS/panel.js"></script>
    
</body>
</html>