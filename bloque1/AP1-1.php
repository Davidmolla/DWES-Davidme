<?php

$datos = array();

foreach ($_GET as $clave => $valor) {
    $datos[$clave] = $valor;
}

foreach ($datos as $clave => $valor) {
    echo "Se ha recibido el $valor para la clave $clave.;
    }
} else {
    echo "No se han recibido datos por la ruta.;
}
?>