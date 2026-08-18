<?php

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

$peso = 40;
$altura = 1.65;

$imc = calcularIMC($peso, $altura);

echo "IMC: $imc \n";

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc < 25) {
    echo "Peso normal";
} elseif ($imc < 30) {
    echo "Sobrepeso";
} else {
    echo "Obesidade";
}

?>
