<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        require_once "config.php";

        $sql = $DBcon -> prepare("INSERT INTO Cervezas (marca, tipo, litros, precio, img) VALUES ( ?, ?, ?, ?, ?)");
        $sql -> bindParam (1,$_POST["marca"]);
        $sql -> bindParam (2,$_POST["tipo"]);
        $sql -> bindParam (3,$_POST["litros"]);
        $sql -> bindParam (4,$_POST["precio"]);
        $sql -> bindParam (5,$_POST["imagen"]);

        $sql->execute();

        header("Location: ../panelDeControl.php");
    }
?>