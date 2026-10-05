<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="css/login.css">

</head>
<body>

<div class="login-container">
  <form method="POST" action="config.login.php" class="formLogin">
  <h2>Login</h2>
  <form id="loginForm">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="nome" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="senha" required>
    </div>
    <div class="form-group">
      <input type="submit" name="submit" value="Acessar" class="bnt"/>
    </div>
    <div class="form-group">
      <a href="redefinir_senha.php">Esqueceu sua senha?</a>

    <p>não tem cadastro?<a href="cadastro.php">Faça aqui</a></p>

    </div>
  </form>
</div>

</body>
</html>