<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Faça Login</title>
</head>
<body>
<header>
<img src="dragao.gif">
    <nav>
        <ul>
            <li><a href="cadastro.php">Cadastrar</a></li>
        </ul>
    </nav>
</header>
        
    <main>
        <form action="login.php" method="post">
        <h2>Faça Login</h2>
        <?php 
    
        if (isset($_SESSION['mensagem'])){
            echo "<p class='session-mensagem'>" . $_SESSION["mensagem"] . "</p>";
            unset($_SESSION["mensagem"]);
        }
        ?>
            <label for="iemail">Email:</label>
            <input type="email" id="iemail" name="email">

            <label for="isenha">Senha:</label>
            <input type="password" id="isenha" name="senha" required>
            <br> <br>
            <button type="submit">Entrar</button>
        </form>
    </main>
    
</body>
</html>