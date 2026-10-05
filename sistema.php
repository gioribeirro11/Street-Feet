<?php
    session_start();

    //verifica se a sessão esta iniciada ou não
    if((!isset($_SESSION['email'])== true) and (!isset($_SESSION['senha']) == true)){

        unset($_SESSION['email']);//"destroi a sessão casp não tenha
        unset($_SESSION['senha']);
        header('Location: login.php');

    }else{

    $logado=$_SESSION['email'];

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>sistema</title>

</head>
<body>

<!---->

    <div class="navbar">
        <a class="active" href="#home"> pagina inicial</a>
        <a href="#promocoes">promoções</a>
        <a href="#contact">atendimento</a>
        <a href="#products">produtos</a>
        <a href="#destaque">destaque</a>
        <a style="float:right" href="sair.php">sair</a>
    </div>

    <div style="padding: 20px;">
    <div class="content">
        <?php
        echo "<h2>seja bem vindo ao sistema <br> $logado </h2>";
        ?>
        </div>
        </div>

</body>
</html>
