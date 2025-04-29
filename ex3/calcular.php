<?php
function checarMaior($a, $b, $c) {
    if ($a > $b && $a > $c) {
        return $a;
    } elseif ($b > $a && $b > $c) {
        return $b;
    } else {
        return $c;
    }
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$valor3 = $_POST['valor3'];
$maior = checarMaior($valor1, $valor2, $valor3);


echo "O maior número entre $valor1 , $valor2 e $valor3 é: $maior";
?>