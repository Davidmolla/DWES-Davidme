<?php
    $datos = array();

    foreach ($_GET as $clave => $valor) {
        $datos[$clave] = $valor;
    }


    foreach ($datos as $clave => $valor) {
        if (is_null($valor) || $valor === '') {
            echo "No se ha recibido ningún dato o es un valor nulo.";
        } elseif (is_numeric($valor)) {
            echo "Se ha recibido un número.";
        } else {
            echo "Se ha recibido una cadena de caracteres.";
        }
    }
} else {
    echo "No se ha recibido ningún dato por la ruta.";
}
?>
