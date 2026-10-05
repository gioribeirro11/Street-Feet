<!DOCTYPE html>
<html lang=pt-br>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Redefinir Senha</title>
        <style>

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f0f0f0;
}

.reset-password-container {
    width: 300px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    margin-bottom: 8px;
}

input {
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>
</head>
</body>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Redefinir Senha</title>
</head>
<body>
    <div class="reset-password-container">
        <form id="resetPasswordForm">
            <h2>Redefinir Senha</h2>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="newPassword">Nova Senha:</label>
            <input type="password" id="newPassword" name="newPassword" required>

            <label for="confirmNewPassword">Confirme a Nova Senha:</label>
            <input type="password" id="confirmNewPassword" name="confirmNewPassword" required>

            <button type="submit">Redefinir Senha</button>
            <a href="login.php"> Fazer login</a>
        </form>
    </div>
</body>
</html>
