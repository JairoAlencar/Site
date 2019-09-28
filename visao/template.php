<!DOCTYPE html> 
<html>
  <head>
    <title>IFTech</title> 
    <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./publico/css/css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="shoutcut icon" href="publico/imagens/icone.ico"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <style>
      tr:nth-child(even) {
       background-color: #dddd;
    }
    </style>     
  </head> 
<body style="width: 100%; margin-top: 0%;">

<?php 
  if (($_SERVER['PHP_SELF'] != '/site/index.php/cliente/adicionar') && ($_SERVER['PHP_SELF'] != '/site/index.php/login/')) {
            require('cabecalho.php');
        }
  if (($_SERVER['PHP_SELF'] != '/site/index.php/cliente/adicionar') && ($_SERVER['PHP_SELF'] != '/site/index.php/login/')) {
            require('info.php');
        }      

$URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($URL_ATUAL=="http://localhost/site/produto/" || $URL_ATUAL== "http://localhost/site/"){
    require "visao/produto/produtos.visao.php";
    echo "<br>";
} 
?>

<main class = "container"  id = "content">
            <?php
            require  $viewFilePath ;
            ?> 
</main> 

<?php
  if (($_SERVER['PHP_SELF'] != '/site/index.php/cliente/adicionar') && ($_SERVER['PHP_SELF'] != '/site/index.php/login/')) {
            require('rodape.php');
        }
?>
            </body>
          </html> 