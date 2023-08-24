<?php 
$servername = "localhost";
$username = "fernando";
$password = "fernandosenai";
$db_nome = "blog";

$conexao = new mysqli($servername, $username, $password, $db_nome);

if($conexao->connect_errno){
    die("Conectou não, o erro é: " . $conexao -> connect_error);
}
?>