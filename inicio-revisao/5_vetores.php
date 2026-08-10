<?php

// vetor (array simples)
$frutas = ["maçã","banana", "uva"];

// exibindo (usando laço)
foreach ($frutas as $indice => $frutas) {
    echo "Posição $indice: $frutas\n";
}

//  Matriz (array completo "linhas e colunas)
$matriz = [
    ["Max Verstappen", "Lando Norris", "Oscar Piastri"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russel"],
    ["Fernando Alonso", "Carlos Sainz", "Ayrton Senna"]
];

// exibindo nome dos pilotos
echo "<br><br>";
echo "melhores pilotos de f1: <br><br>";
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
        }
        echo "<br>";
}

    

