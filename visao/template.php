<!DOCTYPE html> 
<html>
  <head>
    <title>IFTech</title> 
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./publico/css/css.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="shoutcut icon" href="publico/imagens/icone.ico"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
          

           
  </head> 
<body style="width: 100%; margin-top: 0%;" class="container"><!--arrumar essa merda de container!-->

<?php 
  if (($_SERVER['PHP_SELF'] != '/site/index.php/cliente/adicionar') && ($_SERVER['PHP_SELF'] != '/site/index.php/login/')) {
            require('cabecalho.php');
        }
  if (($_SERVER['PHP_SELF'] != '/site/index.php/cliente/adicionar') && ($_SERVER['PHP_SELF'] != '/site/index.php/login/')) {
            require('info.php');
        }      
?> 
<base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
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