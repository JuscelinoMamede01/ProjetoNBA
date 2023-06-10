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
    <link rel="stylesheet" href="prodImg.css" />
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
      <form class="formImg" enctype="multipart/form-data" Method="POST"action="dbConnection/processoImg.php">
        <h1>Cadastro de camiseta</h1>         
          <label for="imgFile">Enviar imagens: 🏀</label>
          <input  multiple type="file" name="imgFile" id="imgFile" required />
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
