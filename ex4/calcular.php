<?php
function converterParaCelsius ($a) {
    return ($a - 32) * 5/9;
}

$valor1 = $_POST['valor1'];
$tempCelcius = converterParaCelsius($valor1);

echo "$valor1 Fahrenheits convertido para Celsius é: $tempCelcius";
?>