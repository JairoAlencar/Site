<!DOCTYPE html> 
<html>
<head>
  <title>Cadastro</title> 
  <meta charset="utf-8">
  <link rel="stylesheet" href="./publico/css/css.css">   
  <link rel="shoutcut icon" href="publico/imagens/icone.ico">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>

  <h1>Adicionar produto</h1>
    
<?php
    if(ehPost()){
      foreach($erros as $erro){
        echo "$erro<br>";
      }
    }
?>   

  <form action="" method="post" class="box" enctype="multipart/form-data"> <!-- entype, um teste para o upload de imagens!-->
    Nome:<br>
    <input type="text" name="nome_produto" placeholder="Ex: Samsung s10" value="<?=@$produto['nomeproduto']?>">
      <br><br>

    Preço:<br>  
    <input type="money" name="preco" placeholder="Ex: 100.00" value="<?=@$produto['preco']?>">
      <br><br>

    Imagem:<br> 
    <input type="text" name="imagem" value="<?=@$produto['imagem']?>" placeholder="Ex: asjdnad.png">
    
    <!--<input type="file" name="imagem" value="<?=@$produto['imagem']?>">!-->
      <br><br>

    Categoria:<br>  
      <select name="categoria">
        <option value="default">Selecione uma categoria</option>
        <?php foreach ($categoria as $cate): ?>
          <option value="<?= $cate['idcategoria'] ?>" selected="selected"><?= $cate['descricao'] ?></option>
        <?php endforeach; ?>
      </select>
    <br><br>

    Estoque minimo:<br> 
    <input type="number" name="estoque_min" placeholder="Ex: 1" value="<?=@$produto['estoque_maximo']?>">
      <br><br>

    Estoque maximo:<br>  
    <input type="number" name="estoque_max" placeholder="Ex: 10 " value="<?=@$produto['estoque_minimo']?>">      
      <br><br>

    Descrição<br>
      <textarea name="descricao" placeholder="Descrição" value="<?=@$produto['descricao']?>"></textarea>
        <br>
    <input type="checkbox" name="" required=""> Li, aceito e concordo com as condições e os termos de uso
      <br>
    <input type="submit" name="vai na fé" value="Adicionar">        
  </form>