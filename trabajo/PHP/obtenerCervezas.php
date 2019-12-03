<?php
    require_once "config.php";

    $sql = "SELECT id, marca, tipo, litros, precio, img
    FROM Cervezas";

    $respuesta = $DBcon->query($sql);

    if ($respuesta->rowCount() > 0) {
        $cervezas = array();
        while($row = $respuesta->fetch()) {
            
            $cerveza = array(
                'id' => (int) $row['id'],
                'marca' => $row['marca'],
                'tipo' =>  $row['tipo'],
                'litros' => (float) $row['litros'],
                'precio' => (float) $row['precio'],
                'img' => $row['img'],
            );
            array_push($cervezas, $cerveza);
        }
    }

    echo json_encode($cervezas);

?>