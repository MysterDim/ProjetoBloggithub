<?php 
session_start();

require_once "conexao.php";

$posts = $_POST["post"];

$query = "INSERT INTO posts(postagem) VALUES (?) ";
$stmt = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($stmt, "s", $posts);

if(mysqli_stmt_execute($stmt)){
    $_SESSION['mensagem'] = "Enviado!";
    header("location: home.php");
}
mysqli_close($conexao);
?>
