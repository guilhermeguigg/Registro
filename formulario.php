<?php

if (isset($_POST['submit'])) {
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['Genero'];
    $data_nascimento = $_POST['data_nascimento'];

    $sql = "INSERT INTO pessoas (nome, email, telefone, sexo, data_nascimento) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nascimento')";

    if ($conexao->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso.";
    } else {
        echo "Erro ao inserir dados: " . $conexao->error;
    }

    $conexao->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>Formulario de cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser required">
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser required">
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser required">
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo</p>
                <input type="radio" name="Genero" id="Feminino" value="Feminino" required>
                <label for="Feminino">Feminino</label>
                <br>
                <input type="radio" name="Genero" id="Masculino" value="Masculino" required>
                <label for="Masculino">Masculino</label>
                <br>
                <input type="radio" name="Genero" id="Outro" value="Outro" required>
                <label for="Outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento">
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
