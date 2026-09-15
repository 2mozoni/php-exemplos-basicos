<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
   <form method="post" action="">
    <!-- campo nome -->
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>
    <!-- campo senha -->
    <label for="Nascimento">Ano de Nascimento:</label>
    <input type="number" name="ano_nascimento" required>

    <!-- botão de enviar -->
     <button type="submit">cadastrar</button>
   </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $anoNascimento = $_POST["ano_nascimento"];

    // Verifica se o usuário é maior de idade
      $idade = date("Y") - $anoNascimento;

    if ($idade >= 18) {
        echo "<p>Cadastro realizado com sucesso! Bem-vindo, $nome.</p>";
         $arquivo = fopen('log_acessos.txt', 'a');

        
        $linha = "nome: $nome, Idade: $idade\n";

     
        fwrite($arquivo, $linha);

        
        fclose($arquivo);
    } else {
        echo "<p>Desculpe $nome, você precisa ser maior de idade para se cadastrar.</p>";
    }
}
?>
</body>
</html>
