<?php
session_start();
include("conexao.php");

$codProd = $_POST['codProd'];
$productname = $_POST['productname'];
$color = $_POST['color'];
$quantidade = $_POST['quantidade'];
$tamanho = $_POST['sizebtn'];

// Obter o ID do cadastroProduto correspondente ao produto
$query_cadastroProduto = "SELECT id FROM cadastroProduto WHERE nome = '$productname'";
$resultado_cadastroProduto = mysqli_query($conn, $query_cadastroProduto);

if ($resultado_cadastroProduto && mysqli_num_rows($resultado_cadastroProduto) > 0) {
    $row = mysqli_fetch_assoc($resultado_cadastroProduto);
    $id_cadastroProduto = $row['id'];

    // Inserir os valores no banco de dados
    $result_carrinho = "INSERT INTO carrinho (FKcadastroProduto, codProd, productname, color, quantidade, sizebtn, created) VALUES ('$id_cadastroProduto', '$codProd', '$productname', '$color', '$quantidade', '$tamanho', NOW())";
    $resultado_carrinho = mysqli_query($conn, $result_carrinho);

    if (mysqli_insert_id($conn)) {
        header("Location: ../productPages/carrinho.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;font-size: 18px;'>Não foi possível realizar seu pedido!</p>";
        header("Location: ".$_SERVER['PHP_SELF']);
    }
} 

?>
