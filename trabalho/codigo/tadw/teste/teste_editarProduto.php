<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$nome = "ciclano";
$tipo = "bebida";
$preco_compra = "13 reais";
$preco_venda = "14 reais";
$margem_lucro = "5 reais"; 
$quantidade = "4";

salvarProduto($conexao, $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade);
?>  