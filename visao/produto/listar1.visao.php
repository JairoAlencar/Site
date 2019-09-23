<h2>Detalhes do produto</h2>

	<p>Id: <?=$produto['idproduto']?> </p>
	<p>Nome: <?=$produto['nomeproduto']?> </p>
	<p>Imagem:<br><img src="<?=$produto['imagem']?>" style="height: 200px; width: 200px;"> </p>
	<p>Preço: <?=$produto['preco']?> </p>
	<p>Descrição: <?=$produto['descricao']?> </p>
	<p>Categoria: <?=$produto['categoria']?> </p>
	<p>Estoque Minimo: <?=$produto['estoque_minimo']?> </p>
	<p>Estoque Maximo: <?=$produto['estoque_maximo']?> </p>
	<p>Quantidade Estoque: <?=$produto['quant_estoque']?></p>

	<a href="./produto/listarProdutos">Voltar</a>