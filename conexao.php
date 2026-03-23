<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_produtos";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if(!$conexao){    
    die("Erro de conexao: ".mysqli_connect_error());
}
?>