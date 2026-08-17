<?php
$nota = (float) readline("digite a nota do aluno: ");
$falta = (int) readline("digite a quantidade de faltas do aluno: ");

if ($nota >= 6 && $falta <= 15) {
    echo "O aluno foi aprovado.";
} else {
    echo "O aluno foi reprovado.";
}
?>