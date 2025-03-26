<?php
require_once "conexao.php";
require_once "funcoes.php";


$id = $_GET['id'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];
$margem_lucro = $_POST['margem_lucro'];
$quantidade = $_POST['quantidade'];


if ($id == 0) {
    $sql = "INSERT INTO tb_produto (nome, tipo, preco_compra, preco_venda, margem_lucro, quantidade) VALUES (?, ?, ?, ?, ?, ?)";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssdddd', $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade);
   
} else {
    $sql = "UPDATE tb_produto SET nome=?, tipo=?, preco_compra=?, preco_venda=?, margem_lucro=?, quantidade=? WHERE id=?";

    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssddddi', $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade, $id);
    
    mysqli_query($conexao, $sql);
}

?>
