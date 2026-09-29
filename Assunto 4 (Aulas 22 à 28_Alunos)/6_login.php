<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuário</title>
</head>
<body>
    <form method="post" action="">
        <!-- Campo para nome -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <!-- Campo para senha -->
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <!-- Botão para entrar -->
        <button type="submit">Entrar</button>
    </form>

    <!-- Lógica de Login -->
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = trim($_POST['nome']);
        $senha = trim($_POST['senha']);

        // Lista de caminhos possíveis para encontrar o ficheiro gerado pelo cadastro
        $possiveis_caminhos = [
            __DIR__ . '/../Assunto_3/Códigos/usuários.txt',
            __DIR__ . '/../Assunto_3/usuários.txt',
            __DIR__ . '/../Assunto 3/Códigos/usuários.txt',
            __DIR__ . '/../Assunto 3/usuários.txt'
        ];

        $caminho_encontrado = null;

        foreach ($possiveis_caminhos as $caminho) {
            if (file_exists($caminho)) {
                $caminho_encontrado = $caminho;
                break;
            }
        }

        $login_sucesso = false;

        if ($caminho_encontrado) {
            $arquivo = fopen($caminho_encontrado, 'r');

            while (($linha = fgets($arquivo)) !== false) {
                $linha = trim($linha);
                if (empty($linha)) continue;

                if (strpos($linha, ';') !== false) {
                    list($usuario_arquivo, $senha_arquivo) = explode(';', $linha);

                    if ($nome == trim($usuario_arquivo) && $senha == trim($senha_arquivo)) {
                        $login_sucesso = true;
                        break;
                    }
                }
            }
            fclose($arquivo);

            if ($login_sucesso) {
                echo "<p style='color: darkgreen; font-weight: bold;'>Login realizado com sucesso!<br> Bem-vindo, " . htmlspecialchars($nome) . "!</p>";
            } else {
                echo "<p style='color: red; font-weight: bold;'>Usuário ou senha incorretos!</p>";
            }
        } else {
            echo "<p style='color: red; font-weight: bold;'>O ficheiro 'usuários.txt' não foi encontrado em nenhum dos locais prováveis.</p>";
            echo "<p>Certifique-se de correr o ficheiro de cadastro <code>5_cadastro.php</code> primeiro para gerar o ficheiro de texto!</p>";
        }
    }
    ?>   
</body>
</html>