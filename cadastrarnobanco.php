<?php 
session_start();

require_once "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

$query = "INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha_criptografada);

if(mysqli_stmt_execute($stmt)){
    $_SESSION['mensagem'] = "Usuário cadastrado com Sucesso!";
    header("location: cadastro.php");
}else{
    $_SESSION['mensagem'] = "Erro ao cadastrar Usuário";
    header("location: cadastro.php");
}
mysqli_close($conexao);
?>