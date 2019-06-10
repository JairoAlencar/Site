<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Produto</title>
    <link rel="stylesheet" type="text/css" href="./publico/css/rodape">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
    <div id="topo" style="background: black; height: 88px;">
        <div id="logo" class="col-4" style="margin-left:43%;">
          <a href="//localhost/site" id="logo" >
            <img src="./publico/imagens/Logo.PNG" style="margin-top: 2%;">
          </a>
        </div>
    </div>
  <h1>Adicionar produto</h1>
    
<?php
    if(ehPost()){
      foreach($erros as $erro){
        echo "$erro<br>";
      }
    }
?>   

  <form action="" method="post" class="">
    <input type="text" name="nome_produto" placeholder="Nome do Produto">
      <br>
    <input type="radio" name="pagamento" value="vista" checked="checked">A vista
      <br>
    <input type="radio" value="Parcelado" name="pagamento">Parcelado
      <br>
    <label for="dinheiro">R$</label>  
    <input type="money" name="valor" placeholder="Valor">
      <br>
    Ficha técnica
      <textarea name="ficha_tec" placeholder="Ficha Tecnica"></textarea>
        <br>
    Descrição
      <textarea name="descricao" placeholder="Descrição"></textarea>
        <br>
    Telefone do Vendedor
      <textarea name="contato_vendedor" placeholder="Contato Vendedor"></textarea>
        <br>
    <input type="checkbox" name="" required=""> Li, aceito e concordo com as condições e os termos de uso
      <br>
    <input type="submit" name="vai na fé" value="Adicionar">        
  </form>
   
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


