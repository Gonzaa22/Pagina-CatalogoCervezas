<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        require_once "config.php";

        $sql = $DBcon -> prepare("UPDATE Usuarios SET nombre = ?, contrasenia = ? WHERE id = ?");
        $sql -> bindParam (1,$_POST["nombre"]);
        $sql -> bindParam (2,$_POST["contrasenia"]);
        $sql -> bindParam (3,$_POST["id"]);

        $sql->execute();

        header("Location: ../HTML/panelDeControl.php");
    }
?>
