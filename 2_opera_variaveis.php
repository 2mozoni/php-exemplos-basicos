<?php

//  PAssando valores pela URL (Métoto GET)
// http://localhost/c:\Apache\htdocs\php-exemplos-basicos/2_opera_variaveis.php?numero1=10&numero2=5

// Recebe 2 valores 
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

// Verifica se os valores foram passados corretamente
//  A função nativa do PHP "isset faz isso
if (isset( $numero1 ) && ($numero2)) {
    $numero1 = (float)$numero1;
    $numero2 = (float)$numero2;


// cálculos
$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

// Exibe os resultados
echo "Soma: $soma <br>";
echo "Subtração: $subtracao <br>";
echo "Multiplicação: $multiplicacao <br>";
echo "Divisão: $divisao <br>";
} else {
    echo "Por favor, passe os valores corretamente pela URL.";
}
?>