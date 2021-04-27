<?php
    require_once "config.php";

    $sql = "SELECT id, nombre, contrasenia
    FROM usuarios";

    $respuesta = $DBcon->query($sql);

    if ($respuesta->rowCount() > 0) {
        $usuarios = array();
        while($row = $respuesta->fetch()) {
            
            $usuario = array(
                'id' => (int) $row['id'],
                'nombre' => $row['nombre'],
                'contrasenia' =>  $row['contrasenia'],
            );
            array_push($usuarios, $usuario);
        }
    }

    echo json_encode($usuarios);

?>