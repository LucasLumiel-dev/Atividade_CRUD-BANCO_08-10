<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <?php 
    Conectar com o banco de dados
    $servername = 'localhost';
    $username = 'root';
    $password = 'cimatec';
    $dbname = 'coismercadinho_shibata';

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ID_Produto = htmlspecialchars ($_POST['ID_Produto']);
        $Produto = htmlspecialchars ($_POST['Produto']);
        $Quantidade = htmlspecialchars ($_POST['Quantidade']);
        $Preco = htmlspecialchars ($_POST['Preco']);
    }
    // Preparar e vincular
    $stmt = $conn->prepare("INSERT INTO usuarios (ID_Produto, Produto, 
    Quantidade, Preco) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $ID_Produto, $Produto, $Quantidade,
    $Preco);

    /*if ($stmt->execute()) {
        echo "<h3>Cadastro realizado com sucesso!</h3>";
        echo "<p><strong>Nome Completo:</strong> $nome_completo</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
        echo "<p><strong>Gênero:</strong> $genero</p>";
        echo "<p><strong>Biografia:</strong> " . nl2br($biografia) . "</p>";
    } else {
        echo "Erro: " . $stmt->error;
    }
    // Fechar a declaração
        $stmt->close();
    } else {
    ?>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome_completo" required>
        <br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>
        <br><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outros">Outros</option>
        </select>
        <br><br>

        <label for="biografia">Biografia:</label>
        <textarea id="biografia" name="biografia" rows="4" cols="50" required></textarea>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <?php
    }
    
    // Fechar a conexão
    $conn->close();
    ?>
    */
    ?>
    
</body>
</html>