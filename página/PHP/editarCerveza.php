<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        require_once "config.php";

        $sql = $DBcon -> prepare("UPDATE Cervezas SET marca = ?, tipo = ?, litros = ?, precio = ?, img = ? WHERE id = ?");
        $sql -> bindParam (1,$_POST["marca"]);
        $sql -> bindParam (2,$_POST["tipo"]);
        $sql -> bindParam (3,$_POST["litros"]);
        $sql -> bindParam (4,$_POST["precio"]);
        $sql -> bindParam (5,$_POST["imagen"]);
        $sql -> bindParam (6,$_POST["id"]);

        $sql->execute();

       header("Location: ../HTML/panelDeControl.php");
    }
?>
