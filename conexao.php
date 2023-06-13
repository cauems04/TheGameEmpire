<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$dbname = 'TheGameEmpire';

$conn = new mysqli($servidor,$usuario,$senha,$dbname);

if($conn->connect_errno){
    echo "Erro";
}else{
    echo "Conexão efetuada com sucesso";
}