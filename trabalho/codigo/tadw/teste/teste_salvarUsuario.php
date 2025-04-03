<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "fulano";
$email = "marcos@gmail.com";
$senha = "abc";

salvarUsuario($conexao, $nome, $email, $senha);
?>