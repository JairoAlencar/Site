<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body class="container">
  <div id="topo">
        <div id="logo" class="col-4">
          <a href="//localhost/site" id="logo">
            <h1 id="logo1">IF Tech</h1>
          </a>
        </div>

        <div class="search-box">
          <input class="search-txt" type="text" name="busca" placeholder="Pesquisa">
          <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
        </div>

         <div class="icons-btn">
          <a class="icons-user" href="./cliente/login"><i class="fas fa-user"></i></a>
          <a class="icons-car" href=""><i class="fas fa-cart-plus"></i></a>  
        </div> 
        

  </div>
       
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">

        <!--css do site de add produto!-->
        <link rel="stylesheet" type="text/css" href="./publico/css/cadastro.css">
          <link rel="shoutcut icon" href="imagens/icone.ico">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
          <style>
          /* Make the image fully responsive */
          .carousel-inner img {
              width: 100%;
              height: 100%;
          }
          </style>
    

        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

        <h1  style="color: black">Produtos IFtech</h1>

  <TABLE class="table" style="color: black">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Valor</th>
          <th>Vendedor</th>
          <th>Ver Detalhes</th>
          <th>Deltar Produto</th>
        </tr>
      </thead>

      <?php foreach($produtos as $produto): ?>
      <tr>
        <td><?= $produto['idproduto']?></td>
        <td><?= $produto['nomeproduto']?></td>
        <td><?= $produto['preco']; echo",00";?></td>
        <td><?= $produto['categoria']?></td>
        <td> <a href="./produto/ver/<?=$produto['idProduto']?>">Ver</a> </td>
        <td> <a href="./produto/ver/<?=$produto['idProduto']?>">Deletar</a> </td>
      </tr>
      <?php endforeach; ?>  
  </TABLE>

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
