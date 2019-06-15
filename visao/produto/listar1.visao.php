<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>

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

</body>
</html>