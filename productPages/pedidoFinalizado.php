<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="final.css" />
    <title>La Basketeira</title>
  </head>
  <body id="body">
    <header id="header">
      <nav id="navBar">
        <a href="../produtos.php">Camisetas</a>
        <img
          onClick="window.location.href='../index.php'"
          class="logoImg"
          src="../img/logoLaBask.png"
          alt="logo"
        />
        <button onClick="window.location.href='../prodImg.php'" class="navBtn">
          Cadastrar
        </button>
      </nav>
    </header>
    <main id="main">
      <section class="sales-section">
        <h2 class="final">Pedido realizado com sucesso!</h2>
      </section>
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
            <a
              href="https://www.youtube.com/channel/UCWJ2lWNubArHWmf3FIHbfcQ"
              target="_blank"
            >
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
