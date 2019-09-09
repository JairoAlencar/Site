<h2>Detalhes do produto</h2>

	<p>Id: <?=$produto['idproduto']?> </p>
	<p>Nome: <?=$produto['nomeproduto']?> </p>
	<p>Imagem: <?=~$produtos['imagem']?> </p>
	<p>Preço: <?=$produto['preco']?> </p>
	<p>Descrição: <?=$produto['descricao']?> </p>
	<p>Categoria: <?=$produto['idcategoria']?> </p>
	<p>Estoque Minimo: <?=$produto['estoque_minimo']?> </p>
	<p>Estoque Maximo: <?=$produto['estoque_maximo']?> </p>

	<a href="./produto/listarProdutos">Voltar</a>