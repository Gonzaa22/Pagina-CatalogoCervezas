<?php
    include("config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['agregarC'])) {
            header("Location: ../agregarCerveza.php");
        }else{

            $id = $_POST["cervezas"];
            $sql = "SELECT id, marca, tipo, litros, precio, img
            FROM Cervezas WHERE id = $id";
    
            $respuesta = $DBcon->query($sql);
            $row = $respuesta->fetch();
    
            if ($id != "") {
                if (isset($_POST['editarC'])) {
                    ?>
    
                    <form action="editarCerveza.php" method="POST">
                            <div class="container">
    
                                <label for="id"><b>Id</b></label>
                                <input id="id" type="TEXT" placeholder="" name="id" value=<?php echo "$row[id]" ?> disabled>
    
                                <label for="marca"><b>Marca</b></label>
                                <input id="marca" type="TEXT" placeholder="Ingresar Marca" name="marca" value=<?php echo "$row[marca]" ?> required>
                                
                                <label for="tipo"><b>Tipo</b></label>
                                <input id="tipo" type="TEXT" placeholder="Ingresa Tipo" name="tipo" value=<?php echo "$row[tipo]" ?> required>
    
                                <label for="litros"><b>Litros</b></label>
                                <input id="litros" type="TEXT" placeholder="Ingresa Litros" name="litros" value=<?php echo "$row[litros]" ?> required>
    
                                <label for="precio"><b>Precio</b></label>
                                <input id="precio" type="TEXT" placeholder="Ingresa Precio" name="precio" value=<?php echo "$row[precio]" ?> required>
    
                                <label for="imagen"><b>Imagen</b></label>
                                <input id="imagen" type="TEXT" placeholder="Ingresa dirección de la imagen" name="imagen" value=<?php echo "$row[img]" ?> required>
                                
                                <button type="SUBMIT">Cargar</button>
    
                            </div>
                        </form>
    
                    <?php
                  
                    
                } else if (isset($_POST['borrarC'])) {
                    
                    $query = $DBcon -> prepare("DELETE FROM Cervezas WHERE id = $id ");
                    $query -> execute();
    
                    header("Location: ../panelDeControl.php");
                }
            }else {
                echo '<script>alert("Debe completar el campo"); location.href="../panelDeControl.php";</script>';
                
            }
        }
    }

    
?>