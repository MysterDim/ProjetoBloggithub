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
    <link rel="stylesheet" href="home.css">
    <title>Pagina Inicial</title>
</head>
<body>
<header>
<img src="dragao.gif">
        <nav>
            <ul>
                <li><a href="postagem.php">Adicionar Post</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <h1>Blog...</h1>

    <?php 
    $sql = "SELECT * FROM posts";
    $result = $conexao->query($sql);

    if($result->num_rows > 0){
        while($linha = $result->fetch_assoc()){     
            echo "<p class='msg'>" . $linha['postagem'] . " <br> </p> <br>";      
        }
    }else{
        echo"Nenhum post foi encontrado!";
    }
    $conexao->close();
    ?>
    
    
</body>
</html>
    