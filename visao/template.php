<html>
    <head>
        <title>template MVC</title>
        <meta charset="utf-8">
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
      <a href="http://iftech-2019.000webhostapp.com/"> Inicial</a>
      <a href="./cliente/listarCliente">Clientes</a>
      <a href="./produto/listarProdutos">Produtos</a>
      <a href="./categoria/listarCategoria">Categorias</a>

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        
<div class="row" id="rodape">
    <div class="col-3" id="adms">
      <h5><strong>Administradores</strong></h5>
        <a href="">
          <h6>Jairo de Alencar</h6>
        </a>
          
        <a href=""> 
          <h6>Samuel Veloso</h6>
        </a>
    </div>  

    <div class="col-5" id="sobre">
      <h5><strong>Um pouco sobre nossa loja</strong></h5>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet temporibus minus nam, sed quaerat odio iste ipsa autem suscipit, magnam mollitia iusto enim praesentium possimus modi tenetur neque, molestiae ratione.</p>        
    </div>  

    <div class="col-3" id="social">
      <i class="fab fa-facebook-square"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-twitter-square"></i>
    </div>                            
</div>
    </body>
</html>