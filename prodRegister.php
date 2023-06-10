<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="prodRegister.css" />
    <title>Cadastro de produto</title>
  </head>
  <body>
    <header id="header">
      <nav id="navBar">
        <a href="produtos.php">Camisetas</a>
      </nav>
      <img onClick="window.location.href='index.php'" class="logoImg" src="img/logoLaBaskW.png" alt="logo"/>
    </header>
    <section class="formSection">

      <form id="form"  action="dbConnection/processo.php" method="POST">
        <h1>Cadastro de camiseta</h1> 
        <label for="productCode">Registre o código produto:</label>
        <input type="text" name="codProduto" id="productCode" required />
        <label for="name">Digite o nome do produto:</label>
        <input type="text" name="nome" id="name" required />
        <label for="size">Tamanho:</label>
        <select name="tamanho" id="size" required>
          <option value="P">P</option>
          <option value="M">M</option>
          <option value="G">G</option>
          <option value="GG">GG</option>
          <option value="XGG">XGG</option>
        </select>
        <label for="stock">Quantidade em Estoque:</label>
        <input type="number" name="estoque" id="stock" min="0" value="0" />
        <label for="price">Preço de venda:</label>
        <input type="text" name="preco" id="price" required />
        <label for="id_img">Id Img no Banco</label>
        <input type="number" name="id_img" id="id_img" min="0" value="0" required />
        <label for="PgVenda">Pg Venda:</label>
        <input type="text" name="PgVenda" id="PgVenda"required />
        <div class="formBtnContainer">
          <button class="formBtn" type="submit">Cadastrar</button>
          <button class="formBtn" type="reset">Apagar</button>
        </div>

        <div class="registerInfomation-p">
          <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }    
          ?>
        </div>
      </form>
      
    </section>
    <footer class="footer"></footer>
  </body>
</html>
