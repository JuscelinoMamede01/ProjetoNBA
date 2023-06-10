<?php
session_start();

include("conexao.php");

if (isset($_FILES['imgFile'])){
    $arquivo = $_FILES['imgFile'];

    if($arquivo['error'])
        die("Falha ao enviar arquivo");

    if ($arquivo['size'] > 5067152)
        die("Arquivo muito grande! MAX: 5MB");

    $pasta = '../files/';
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao != "png")
        die('Tipo de arquivo não aceito. Favor utilizar os formatos .jpg ou .png');

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);

    if($deu_certo){
        $sql = "INSERT INTO imagem (id_img, path) VALUES ('$nomeDoArquivo', '$path')";
        if(mysqli_query($conn, $sql)){
            echo "<p>Imagens enviadas com sucesso!</p>";
            $_SESSION['msg'] = "<p style='color:#000;font-size: 18px;'>Imagens enviadas com sucesso!</p>";
            header("Location: ../prodRegister.php");
        } else {
            echo "<p>Erro ao executar a consulta: " . mysqli_error($conn) . "</p>";
            $_SESSION['msg'] = "<p style='color:red;font-size: 18px;'>Não foi possível realizar o envio das imagens!</p>";
            header("Location: ../prodImg.php");
        }
    } else {
        echo "<p>Falha ao enviar arquivo</p>";
    }
    
}
?>
