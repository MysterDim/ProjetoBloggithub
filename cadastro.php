<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
    <img src="dragao.gif">
        <nav>
            <ul>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="formulario">
   
        <form action="cadastrarnobanco.php" method="post">
        <?php 
        session_start();
            if (isset($_SESSION['mensagem'])){
            echo "<p class='session-mensagem'>" . $_SESSION["mensagem"] . "</p>";
            unset($_SESSION["mensagem"]);
        }
    ?>

        <h1>Cadastrar Usuário</h1>

        <label for="inome">Nome: </label>
        <input type="text" name="nome" id="inome" required>
        <br> <br>
        <label for="iemail">Email: </label>
        <input type="email" name="email" id="iemail" required>
        <br> <br>
        <label for="isenha">Senha: </label>
        <input type="password" name="senha" id="isenha" required>
        <br> <br>
        <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>