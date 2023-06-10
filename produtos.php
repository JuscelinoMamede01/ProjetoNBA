<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="produtos.css" />
    <title>La Basketeira</title>
  </head>
  <body id="body">
    <header id="header">
      <nav id="navBar">
        <a href="produtos.php">Camisetas</a>
        <img onClick="window.location.href='index.php'" class="logoImg" src="img/logoLaBask.png" alt="logo"/>
        <button onClick="window.location.href='prodImg.php'" class="navBtn"> Cadastrar</button>
      </nav>
    </header>
    <main id="main">
    <?php
      session_start();
      include_once("dbConnection/conexao.php");

      // Consulta para recuperar os produtos cadastrados
      $query = "SELECT * FROM cadastroproduto";
      $result = mysqli_query($conn, $query);

      // Verifica se a consulta retornou algum resultado
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              // Recupera a imagem correspondente ao id_img
              $imagemQuery = "SELECT * FROM imagem WHERE id_img = " . $row['id_img'];
              $imagemResult = mysqli_query($conn, $imagemQuery);
              if ($imagemResult && mysqli_num_rows($imagemResult) > 0) {
                  $imagemRow = mysqli_fetch_assoc($imagemResult);
                  
                  echo '<div class="product">';
                  echo '<img class="jerseyImgBox" src="caminho_completo/' . $imagemRow['path'] . '" alt="boston-jersey1"/>';
                  echo '<p class="productTitle">' . $row['nome'] . '</p>';
                  echo '<p class="stars">⭐⭐⭐⭐★</p>';
                  echo '<p class="currency">R$ <span class="price">' . $row['preco'] . '</span></p>';
                  echo '<button onClick="window.location.href=\'' . $row['PgVenda'] . '\'" class="productBtn">';
                  echo 'Ver mais';
                  echo '</button>';
                  echo '</div>';
              } else {
                  echo "Nenhuma imagem encontrada para o produto.";
              }
          }
      } else {
          echo "Nenhum produto cadastrado.";
      }
    ?>    
    </main>
    <footer id="footer">
      <section class="footerColumns">
        <ul class="footerList">
          <h3 onClick="window.location.href='produtos.php'">Compre já!</h3>
          <li onClick="window.location.href='produtos.php'">Camisetas NBA</li>
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
    <script src="index.js"></script>
  </body>
</html>
