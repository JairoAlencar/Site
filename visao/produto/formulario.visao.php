<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Produto</title>
    <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
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
   
</body>
</html>


