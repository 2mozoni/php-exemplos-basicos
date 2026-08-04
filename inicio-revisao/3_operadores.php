<?php

// criando variáveis
$idade = 19;
$temDocumento = false;

// Estrutura de decisão (operador)
if($idade >= 18 && $temDocumento) {
    echo "pode tirar a carta";
} else {
    echo "não pode tirar a carta";
}

// Estrutura de decisão (operador)
if($idade >= 18 || $temDocumento) {
    echo "\npode tirar a carta";
} else {
    echo "não pode tirar a carta";
}
// operador de negação 
$presente = false;

if (!$presente){
    echo "\no aluno está presente";
} else {
    echo "\no aluno está ausente";
}


