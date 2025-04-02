<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "fulano";
$cpf = "111.222.333";
$endereco = "rua 14";

editarCliente($conexao, $nome, $cpf, $endereco);
?>