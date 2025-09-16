<?php
$datos = [
    1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto",
];

$suma = 0;
$posicion = 1;

foreach ($datos as $clave => $valor) {
    $suma += $clave;

    echo "Posición $posicion, valor: $valor";

    if ($posicion % 2 != 0) {
        echo "Estas en una posición impar";
        $impar = true;
        $par = false;
    } else {
        echo "Estas en una posición par";
        $par = true;
        $impar = false;
    }

    echo "La suma de las claves hasta ahora es: $suma";

    if ($suma > 20) {
        echo "El valor de la suma es mayor que 20";
    } elseif ($suma > 10) {
        echo "El valor de la suma es mayor que 10";
    } elseif ($suma > 5) {
        echo "El valor de la suma es mayor que 5";
    }

    $posicion++;
}
?>
