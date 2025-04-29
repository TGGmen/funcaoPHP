<?php
function parOuImpar($a) {
    return ($a % 2);
}

$valor1 = $_POST['valor1'];

if ($valor1 % 2 == 0) {
    echo "par";
} else {
    echo "impar";
}

?>