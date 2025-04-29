<?php
function Multiplicar($a, $b) {
    return ($a * $b);
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$multi = Multiplicar($valor1, $valor2);

echo "A multiplicação de $valor1 e $valor2 é: $multi";
?>