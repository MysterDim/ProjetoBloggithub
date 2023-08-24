<?php 
    session_start();
    require_once "conexao.php";

    // Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])){
    // Redirecionar para a página de login ou exibir uma mensagem de erro
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="postagem.css">
    <title>Postagem</title>
</head>
<body>
<header>
<img src="dragao.gif">
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <form action="addpost.php" method="post">
    <label for="ipost">O que deseja postar? </label>
    <input type="text" name="post" id="ipost">
    <br> <br>
    <button type="submit">Enviar</button>
    </form>

    
</body>
</html>