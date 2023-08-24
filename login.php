<?php 
session_start();
require_once "conexao.php";

 if(isset($_POST["email"]) && isset($_POST["senha"])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
 

 //Prepara contra o sql injection
        $email = mysqli_real_escape_string($conexao, $email);
        $senha = mysqli_real_escape_string($conexao, $senha);

        $query = "SELECT id, nome, email, senha FROM usuarios WHERE email= '$email'";
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);

        if($usuario && password_verify($senha, $usuario['senha'])){
        //Armazenado informações na Sessão
        $_SESSION["usuario_id"] = $usuario['id'];
        $_SESSION["usuario_nome"] = $usuario['nome'];
        header("location: home.php");
        }else{
            $_SESSION["mensagem"] = "Email ou Senha Invalidos!";
            header("location: index.php");
        }
    }else{
        header("location: index.php");
    }
?>