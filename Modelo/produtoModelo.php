<?php

function adicionarProduto($nome, $pag, $val, $cat, $ficha, $desc, $vend){

	$sql = "INSERT INTO produto (Nome, Pagamento, Valor, Categoria, Ficha_Tec, Descricao, Vendedor) VALUES ('$nome', '$pag', '$val', '$cat', '$ficha', '$desc', '$vend')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if(!$resultado) { die('Erro ao cadastrar produto ' . mysqli_error($cnv)); }

	return 'Produto cadastrado com sucesso!';
	
}

function exibirProduto(){

	$sql = "SELECT * FROM produto";	
	$resultado = mysqli_query(conn(), $sql);

	$produto = array();
	while($linha = mysqli_fetch_assoc($resultado)){
		$produto[] = $linha;
	}
	return $produto;
}

function buscarProduto($busca){

	$sql = "SELECT Nome FROM produto WHERE categoria=$busca";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if(!$resultado) { die('Erro ao buscar produto' . mysqli_error($cnv)); }

	return 'TESTE';
}

?> 