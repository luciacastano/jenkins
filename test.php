<?php

$url = 'https://api.jsonbin.io/v3/b/65d09283dc74654018a6024c';

$response = file_get_contents($url);

$data = json_decode($response, true);

$elemento1 = $data['record']['record']['elemento1'];
$elemento2 = $data['record']['record']['elemento2'];
$producto_esperado = $data['record']['record']['producto'];

$producto_calculado = $elemento1 * $elemento1;

if ($producto_calculado == $producto_esperado) {
    echo "El producto es correcto: $elemento1 * $elemento2 = $producto_esperado";
    exit(0);
} else {
    echo "Error: El producto es incorrecto: Se esperaba $producto_esperado pero se calculó $producto_calculado";
    exit(1);
}
