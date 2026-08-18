<?php

$preço = (float) readline("digite o preço do produto: ");
$quantidade = (int) readline("digite a quantidade do produto: ");
$total = $preço * $quantidade;
 if ($total >= 200) {
    $desconto = $total * 0.1;
    $total = $total - $desconto;
    echo "O valor total é:  $total\n";
 } else {
    echo "O valor total é: $total";
 }
 ?>