<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Produto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="publico/css/cadastro.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Adicionar produto</h1>
    <br>

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
    <?php
$nome_produto = $_POST["nome_produto"];
$valor = $_POST["valor"];
$ficha_tec = $_POST["ficha_tec"];
$descricao = $_POST["descricao"];
$contato_vendedor = $_POST["contato_vendedor"];
$erro = 0;

if(empty($nome_produto) OR strlen($nome_produto)<1)
{
    echo("Favor digitar o nome do produto<br>");  
}

if(empty($descricao) OR strlen($descricao)<30 ==false)
{
    echo("Favor digitar o valor do produto<br>");
}

if(strlen($ficha_tec)<30 || strstr($ficha_tec,'')==false)
{
    echo("Favor digitar a ficha tecnica de seu produto<br>");    
}

if(!is_numeric($valor) and strlen($valor)>9) 
{
    echo("Preencha o campo do valor somente com números.<br>");
}

if(empty($contato_vendedor) AND strlen($contato_vendedor)!=11 AND !is_numeric($contato_vendedor))
{
    echo("Favor digite seu numero corretamente<br>");    
} 
    ?>
</body>
</html>