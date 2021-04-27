<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        require_once "config.php";

        $sql = $DBcon -> prepare("INSERT INTO Usuarios (nombre, contrasenia) VALUES ( ?, ?)");
        $sql -> bindParam (1,$_POST["nombre"]);
        $sql -> bindParam (2,$_POST["contrasenia"]);

        $sql->execute();

        header("Location: ../HTML/panelDeControl.php");
    }
?>