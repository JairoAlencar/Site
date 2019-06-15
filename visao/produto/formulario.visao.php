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
    <label for="dinheiro">R$</label>  
    <input type="money" name="preco" placeholder="Valor">
      <br>
    <input type="text" name="imagem" placeholder="Imagem">
      <br>
    <input type="number" name="categoria" placeholder="categoria">  
    Estoque minimo:  
    <input type="number" name="estoque_min" placeholder="Estoque minimo">
      <br>
    Estoque maximo:  
    <input type="number" name="estoque_max" placeholder="Estoque maximo">      
      <br>
    Descrição
      <textarea name="descricao" placeholder="Descrição"></textarea>
        <br>
    <input type="checkbox" name="" required=""> Li, aceito e concordo com as condições e os termos de uso
      <br>
    <input type="submit" name="vai na fé" value="Adicionar">        
  </form>
   
</body>
</html>


