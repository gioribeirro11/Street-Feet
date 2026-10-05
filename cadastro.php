<?php
        if(isset($_POST['submit'])){
        include_once('conf.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $conf_senha = $_POST['conf_senha'];
   
         $result= mysqli_query($conexao, "INSERT INTO atividade(nome,email,telefone,senha,conf_senha) VALUES ('$nome','$email','$telefone','$senha','$conf_senha') ");
        }
        ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Cadastro</title>
<link rel="stylesheet" href="css/cadastro.css">

</head>
<body>

<div class="form-container">
  <h2>Cadastro</h2>
  <form id="signupForm" action="cadastro.php" method="post">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
    </div>
    <div class="form-group">
      <label for="confSenha">Confirmar Senha:</label>
      <input type="password" id="confSenha" name="conf_senha" required>
    </div>
    <button type="submit" name="submit">Cadastrar</button>
    ja tem cadastro? <a href="login.php">faça login aqui!</a>

  </form>
</div>

</body>
</html>