<?php
session_start();
include_once("conexao.php");

$codProduto = filter_input(INPUT_POST, 'codProduto', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
$estoque = filter_input(INPUT_POST, 'estoque', FILTER_SANITIZE_NUMBER_INT);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$id_img = filter_input(INPUT_POST, 'id_img', FILTER_SANITIZE_NUMBER_INT);
$PgVenda = filter_input(INPUT_POST, 'PgVenda', FILTER_SANITIZE_STRING);

$result_produto = "INSERT INTO cadastroproduto (codProduto, nome, tamanho, estoque, preco, created, id_img,PgVenda) VALUES ('$codProduto', '$nome', '$tamanho', '$estoque', '$preco', NOW(), '$id_img','$PgVenda')";
$resultado_produto = mysqli_query($conn, $result_produto);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:#000;font-size: 18px;'>Produto cadastrado com Sucesso!</p>";
    header("Location: ../prodRegister.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;font-size: 18px;'>Não foi possível realizar o cadastro do produto!</p>";
    header("Location: ../prodRegister.php");
}
?>
