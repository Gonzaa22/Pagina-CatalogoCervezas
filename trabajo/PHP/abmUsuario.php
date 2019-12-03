<?php
    include("config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['agregarU'])) {
            header("Location: ../agregarUsuario.php");
        }else{

            $id = $_POST["usuarios"];
            $sql = "SELECT id, nombre, contrasenia
            FROM Usuarios WHERE id = $id";
    
            $respuesta = $DBcon->query($sql);
            $row = $respuesta->fetch();
    
            if ($id != "") {
                if (isset($_POST['editarU'])) {
                    ?>
    
                    <form action="editarUsuario.php" method="POST">
                            <div class="container">
    
                                <label for="id"><b>Id</b></label>
                                <input id="id" type="TEXT" placeholder="" name="id" value=<?php echo "$row[id]" ?> disabled>
    
                                <label for="nombre"><b>Marca</b></label>
                                <input id="nombre" type="TEXT" placeholder="Ingresar Nombre" name="nombre" value=<?php echo "$row[nombre]" ?> required>
                                
                                <label for="contrasenia"><b>Tipo</b></label>
                                <input id="contrasenia" type="TEXT" placeholder="Ingresa Contraseña" name="contrasenia" value=<?php echo "$row[contrasenia]" ?> required>
    
                                
                                <button type="SUBMIT">Cargar</button>
    
                            </div>
                        </form>
    
                    <?php
                    
                } else if (isset($_POST['borrarU'])) {
                    
                    $query = $DBcon -> prepare("DELETE FROM Usuarios WHERE id = $id ");
                    $query -> execute();
    
                    header("Location: ../panelDeControl.php");
                }
            }else {
                echo '<script>alert("Debe completar el campo"); location.href="../panelDeControl.php";</script>';
                
            }
        }
    }

    
?>