<?php

function deletarCliente($conexao, $idcliente) {
    $sql = "DELETE FROM tb_cliente WHERE idcliente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idcliente);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    
    return $funcionou; //true ou false
}


function listarClientes($conexao) {
    $sql = "SELECT * FROM tb_cliente";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_clientes = [];
    while ($cliente = mysqli_fetch_assoc($resultado)) {
        $lista_clientes[] = $cliente;
    }

    mysqli_stmt_close($comando);
    return $lista_clientes;
};


function salvarCliente($conexao, $nome, $cpf, $endereco) {
    $sql = "INSERT INTO tb_cliente (nome, cpf, endereco) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sss', $nome, $cpf, $endereco);
    
    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
};


function deletarProduto($conexao, $idproduto) {
    $sql = "DELETE FROM  tb_produto WHERE idproduto = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idproduto);
    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    
    return $funcionou; //true ou false
};


function salvarProduto($conexao, $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade) {
    $sql = "INSERT INTO tb_produto (nome, tipo, preco_compra, preco_venda, margem_lucro, quantidade) VALUES (?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssdddd', $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade);

    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
};


function listarProdutos($conexao) {
    $sql = "SELECT * FROM tb_produto";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_Produtos = [];
    while ($produto = mysqli_fetch_assoc($resultado)) {
        $lista_produto[] = $produto;
    }

    mysqli_stmt_close($comando);
    return $lista_produto;
};
    

function editarCliente($conexao, $nome, $cpf, $endereco,) {
    $sql = "INSERT INTO tb_cliente (nome, cpf, endereco) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sss', $nome, $cpf, $endereco);
    
    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
};


function editarProduto($conexao, $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade) {
    $sql = "INSERT INTO tb_produto (nome, tipo, preco_compra, preco_venda, margem_lucro, quantidade) VALUES (?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ssdddd', $nome, $tipo, $preco_compra, $preco_venda, $margem_lucro, $quantidade);

    $funcionou = mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);
    return $funcionou;
};
 

function salvarUsuario($conexao, $nome, $email, $senha) {
    $sql = "INSERT INTO tb_usuario (nome, email, senha) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sss', $nome, $email, $senha);
    
    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
};


function pesquisarClienteId($conexao, $idcliente) {
    $sql = "SELECT * FROM tb_cliente WHERE idcliente = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idcliente);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $cliente = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $cliente;
};

function pesquisarProdutoId($conexao, $idproduto) {
    $sql = "SELECT * FROM  tb_produto WHERE idproduto = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idproduto);
    
    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $produto = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $produto;
};
    

function listarVenda($conexao){
    $sql = "SELECT * FROM tb_venda";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_vendas = [];
    while ($venda = mysqli_fetch_assoc($resultado)){
        $lista_vendas[] = $venda;
    }
    
    mysqli_stmt_close($comando);
    return $lista_vendas;
};


function salvarVenda($conexao, $idcliente, $valor_total, $data) {
    $sql = "INSERT INTO tb_venda (idcliente, valor_total, data) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'ids', $idcliente, $valor_total, $data);

    mysqli_stmt_execute($comando);
    
    $id_venda = mysqli_stmt_insert_id($comando);
    mysqli_stmt_close($comando);
    
    return $id_venda;
};

function listarItemVenda($conexao){
    $sql = "SELECT * FROM tb_item_venda";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $lista_venda = [];
    while ($venda = mysqli_fetch_assoc($resultado)){
        $lista_venda[] = $venda;
    }
    
    mysqli_stmt_close($comando);
    return $lista_venda;
};


 
// varchar, string, data -> s
// inteiro -> i
// dinheiro, decimal -> d
?>