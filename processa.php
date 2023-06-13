<?php

include_once("conexao.php");
include("protect.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

echo "nome: $nome <br>";
echo "e-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (Nome, Email, Celular, Senha) VALUES ('$nome','$email', '$celular', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    header("location:home.html");
}else{
    header("location:home.html");
}