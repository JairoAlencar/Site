<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>

	<h2>Detalhes do produto</h2>

	<p>Id: <?=$cliente['idproduto']?> </p>
	<p>Nome: <?=$cliente['nomeproduto']?> </p>
	<p>Imagem: <?=$cliente['imagem']?> </p>
	<p>Preço: <?=$cliente['preco']?> </p>
	<p>Sexo: <?=$cliente['sexo']?> </p>
	<p>Descrição: <?=$cliente['descricao']?> </p>
	<p>Categoria: <?=$cliente['categoria']?> </p>
	<p>Estoque Minimo: <?=$cliente['estoque_minimo']?> </p>
	<p>Estoque Maximo: <?=$cliente['estoque_maximo']?> </p>

	<a href="./produto/listarProduto">Voltar</a>

</body>
</html>