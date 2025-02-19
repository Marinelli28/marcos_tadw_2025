<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];
$margem_lucro = $_POST['tipo'];
$tipo = $_POST['tipo'];


$sql = "INSERT INTO tb_cliente (nome, cpf, endereco) VALUES ('$nome', '$tipo', '$endereco')";

mysqli_query($conexao, $sql);
?>