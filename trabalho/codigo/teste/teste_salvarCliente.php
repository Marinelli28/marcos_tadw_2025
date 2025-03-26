<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "ciclano";
$cpf = "111.222.333";
$endereco = "rua 14";

salvarCliente($conexao, $nome, $cpf, $endereco);
?>