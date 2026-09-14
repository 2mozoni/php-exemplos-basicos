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
    <label for="senha">Senha:</label>
    <input type="password" name="senha" required>

    <!-- botão de enviar -->
     <button type="submit">cadastrar</button>
   </form>

   <!-- Lógica de cadastro (PHP) -->
    <?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        // RECEBO OS VALORES
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        // gravando a informação recebida em um arquivo de texto
// o "fopen" significa (file open ou abrir arquivo) e o 'a' append que significa acrescentar.
        $arquivo = fopen('usuários.txt', 'a');

        // criando uma linha com o nome e senha separados por;
        $linha = $nome . ';' . $senha . '\n';

        // escreve a linha no arquivo (insere de fato)
        fwrite($arquivo, $linha);

        // fecha o arquivo
        fclose($arquivo);

        //  mensagem de sucesso (feedback visual para o usuário)
        echo '<p>Usuário cadastrado com sucesso!</p>';
    } 
    ?>
 
 
</body>
</html>