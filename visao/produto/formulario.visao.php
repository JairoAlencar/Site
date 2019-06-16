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
    Nome:<br>
    <input type="text" name="nome_produto" placeholder="Ex: Samsung s10">
      <br><br>

    Preço:<br>  
    <input type="money" name="preco" placeholder="Ex: 100.00">
      <br><br>

    Imagem:<br> 
    <input type="text" name="imagem" placeholder="Ex: https//google/12v3ty">
      <br><br>

    Categoria:<br>  
    <input type="number" name="categoria" placeholder="Ex: 4">
    <br><br>

    Estoque minimo:<br> 
    <input type="number" name="estoque_min" placeholder="Ex: 1">
      <br><br>

    Estoque maximo:<br>  
    <input type="number" name="estoque_max" placeholder="Ex: 10">      
      <br><br>

    Descrição<br>
      <textarea name="descricao" placeholder="Descrição"></textarea>
        <br>
    <input type="checkbox" name="" required=""> Li, aceito e concordo com as condições e os termos de uso
      <br>
    <input type="submit" name="vai na fé" value="Adicionar">        
  </form>
   
</body>
</html>


