<?php
function calcularAreaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

function calcularAreaRectangulo($base, $altura) {
    return $base * $altura;
}

function calcularAreaCirculo($radio) {
    return pi() * pow($radio, 2);
}