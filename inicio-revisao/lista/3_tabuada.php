<?php
$numero = (int) readline("Digite um número para ver a tabuada: ");
 
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $numero * $j;
        echo "$numero x $j = $resultado\n";
    }
