<!DOCTYPE html> 
<html>
<head>
  <title>Detalhes</title> 
  <meta charset="utf-8">
  <link rel="stylesheet" href="./publico/css/css.css">   
  <link rel="shoutcut icon" href="publico/imagens/icone.ico">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>

	<h2>Detalhes do produto</h2>

	<p>Id: <?=$produto['idproduto']?> </p>
	<p>Nome: <?=$produto['nomeproduto']?> </p>
	<p>Imagem: <?=$produto['imagem']?> </p>
	<p>Preço: <?=$produto['preco']?> </p>
	<p>Descrição: <?=$produto['descricao']?> </p>
	<p>Categoria: <?=$produto['idcategoria']?> </p>
	<p>Estoque Minimo: <?=$produto['estoque_minimo']?> </p>
	<p>Estoque Maximo: <?=$produto['estoque_maximo']?> </p>

	<a href="./produto/listarProdutos">Voltar</a>