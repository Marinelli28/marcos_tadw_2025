<?php
require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de Clientes</h1>

    <table>
        <tr>
            <td>Id. Cliente</td>
            <td>nome</td>
            <td>tipo</td>
            <td>preco_compra</td>
            <td>preco_venda</td>
            <td>margem_lucro</td>
            <td>quantidde</td>
        </tr>
        <?php
        
        $sql = "SELECT * FROM tb_produto";
        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idproduto'];
            $nome = $linha['nome'];
            $tipo = $linha['tipo'];
            $preco_compra = $linha['preco_compra'];
            $preco_venda = $linha['preco_venda'];
            $margem_lucro = $linha['margem_lucro'];
            $quantidde = $linha['quantidde'];
            
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$tipo</td>";
            echo "<td>$preco_compra</td>";
            echo "<td>$preco_venda</td>";
            echo "<td>$margem_lucro</td>";
            echo "<td>$quantidde</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>