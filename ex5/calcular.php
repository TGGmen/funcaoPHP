<?php
function checarIdade($a) {
    if ($a >= 18 && $a <= 60) {
        return "maior de idade";
    } else if ($a < 18) {
        return "menor de idade";
    }
    else {
        return "idoso";
    }
}

$valor1 = $_POST['valor1'];
$idade = checarIdade($valor1);

echo "$idade";
?>