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
    <link rel="stylesheet" href="products.css" />
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
      <section class="productImg">
        <ul class="prodImgList">
          <li>
            <img
              src="../img/lakers (2).png"
              alt="bostonImg1"
              onclick="changeImg('../img/lakers (2).png');"
            />
          </li>
          <li>
            <img
              src="../img/lakers (1).png"
              alt="bostonImg1"
              onclick="changeImg('../img/lakers (1).png');"
            />
          </li>
          <li>
            <img
              src="../img/lakersRoxa (1).png"
              alt="bostonImg1"
              onclick="changeImg('../img/lakersRoxa (1).png');"
            />
          </li>

          <li>
            <img
              src="../img/lakersRoxa (2).png"
              alt="bostonImg1"
              onclick="changeImg('../img/lakersRoxa (2).png');"
            />
          </li>
          <li>
            <img
              src="../img/lakers (3).png"
              alt="bostonImg1"
              onclick="changeImg('../img/lakers (3).png');"
            />
          </li>
          <li>
            <img
              src="../img/TAMimg.png"
              alt="bostonImg1"
              onclick="changeImg('../img/TAMimg.png');"
            />
          </li>
        </ul>
        <img src="../img/lakers (2).png" alt="mainImg" id="mainImg" />
      </section>
      <section class="sales-section">
      
        <form
          action="../DbConnection/processoCarrinho.php"
          method="POST"
          class="productinfo"
          onsubmit="updateCodProdValue()"
        >
        <input type="hidden" name="productname" value="Camiseta NBA Los Angeles Lakers">
        <input type="hidden" name="codProd" id="codProdValue">
        <h2>Camiseta NBA Los Angeles Lakers</h2>
        <p id="codProd">Cod: LA006</p>
          <p>Escolha a <span>COR</span> :</p>
          <input
            type="color"
            id="color"
            name="amarelo"
            value="#F3C200"
            disabled
          />
          <input type="radio" name="color" id="amarelo" value="amarelo"/>
          <label for="amarelo">Amarelo</label>
          <input type="color" id="color" name="azul" value="#160084" disabled />
          <input type="radio" name="color" id="azul" value="azul"/>
          <label for="azul">Azul</label>
          <div class="btnQtd">
            <label for="contador">Quantidade:</label><br />
            <button type="button" id="btnDiminuir">-</button>
            <input
              type="number"
              id="contador"
              name="quantidade"
              value="1"
              readonly
            />
            <button type="button" id="btnAumentar">+</button>
          </div>
          <p>Escolha o <span>TAMANHO</span> :</p>
          <input type="radio" name="sizebtn" id="P" value="P" />
          <label for="P">P</label>
          <input type="radio" name="sizebtn" id="M" value="M" />
          <label for="M">M</label>
          <input type="radio" name="sizebtn" id="G" value="G" />
          <label for="G">G</label>
          <input type="radio" name="sizebtn" id="GG" value="GG" />
          <label for="GG">GG</label>
          <input type="radio" name="sizebtn" id="XGG" value="XGG" />
          <label for="XGG">XGG</label>
          <button type="submit" class="prodBtn">Add no carrinho</button><br />
          <label for="cep">Digite seu CEP:</label><br />
          <input type="text" class="cepBar" />
          <button class="navBtn">Calcular</button>
        </form>
      </section>
      <section class="prod-description">
        <h2>INFORMAÇÕES</h2>
        <hr />
        <h4>DESCRICAO</h4>
        <ul class="descripitionList">
          <li>Modelo: Masculino</li>
          <li>
            Tecido: Sport Dry.Ele tem resistência, durabilidade e muito conforto
            para quem procura um tecido com muita tecnologia.
          </li>
          <li>Embalada individualmente</li>
        </ul>
        <h4>PRAZO DE POSTAGEM</h4>
        <p>
          Após a confirmação do pagamento, pedimos o prazo de (72 horas úteis)
          para levar (realizar a postagem) do seu pedido nos correios ou
          transportadora, mas não se preocupe, sempre nos esforçamos pra enviar
          antes( Este prazo pode ser alterado em dias de promoção, sendo avisado
          previamente nos canais de comunicação da loja ).
        </p>
        <h4>DÚVIDAS?</h4>
        <p>
          Estamos a sua disposição, de Segunda à Sexta das 8:30h às 17:30h, para
          esclarecer qualquer dúvida e te ajudar no que for preciso.
        </p>
        <i id="whatsLogo" class="fab fa-whatsapp"> (81)99999-9999</i>
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
