<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="carrinho.css" />
    <title>La Basketeira</title>
  </head>
  <body id="body">
    <header id="header">
      <nav id="navBar">
        <a href="../produtos.php">Camisetas</a>
        <img onClick="window.location.href='../index.php'" class="logoImg" src="../img/logoLaBask.png" alt="logo"/>
        <button onClick="window.location.href='../prodImg.php'" class="navBtn">
          Cadastrar
        </button>
      </nav>
    </header>
    <main id="main">
    <?php
session_start();
include("../dbConnection/conexao.php");

// Recuperar informações do último pedido no carrinho
$query_ultimoPedido = "SELECT * FROM carrinho ORDER BY idPedido DESC LIMIT 1";
$resultado_ultimoPedido = mysqli_query($conn, $query_ultimoPedido);

if ($resultado_ultimoPedido && mysqli_num_rows($resultado_ultimoPedido) > 0) {
    $row = mysqli_fetch_assoc($resultado_ultimoPedido);

    echo '<section class="sales-section">';
    echo '<form action="pedidoFinalizado.php" method="POST" class="productinfo">';
    echo '<h2>Pedido: #00' . $row['idPedido'] . '</h2>';
    echo '<p>Cod: ' . $row['codProd'] . '</p>';
    echo '<p>Produto: ' . $row['productName']. '</p>';
    echo '<p>Cor: ' . $row['color']. '</p>';
    echo '<div class="btnQtd">';
    echo '<label for="contador">Quantidade:</label><br>';
    echo '<button type="button" id="btnDiminuir">-</button>';
    echo '<input type="number" id="contador" value="1" readonly>';
    echo '<button type="button" id="btnAumentar">+</button>';
    echo '</div>';
    echo '<p>Tamanho: ' . $row['sizebtn']. '</p>';
    echo '<button onClick="window.location.href=\'pedidoFinalizado.php\'" class="prodBtn">';
    echo 'Confirmar pedido';
    echo '</button>';
    echo '</form>';
    echo '</section>';
}
?>

    </main>
    <footer id="footer">
      <section class="footerColumns">
        <ul class="footerList">
          <h3 onClick="window.location.href='../produtos.php'">Compre já!</h3>
          <li onClick="window.location.href='../produtos.php'">
            Camisetas NBA
          </li>
        </ul>
        <section class="footerList2">
          <h3 onClick="window.location.href='produtos.php'">
            Redes Sociais NBA!
          </h3>
          <section class="social-icons">
            <a href="https://twitter.com/NBA" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/nba/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCWJ2lWNubArHWmf3FIHbfcQ" target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
          </section>
        </section>
      </section>
      <p class="footer-p">Copyright &copy; 2023.</p>
    </footer>
    <script src="productPages.js"></script>
  </body>
</html>
