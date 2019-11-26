<?php

function buscar_prod($buscar){
	$sql = "SELECT * FROM produtos WHERE (nomeproduto LIKE '%$buscar%' OR categoria LIKE '%$buscar%' OR descricao LIKE '%$buscar%')";

		$resultado = mysqli_query(conn(), $sql);

		$produto = array();
			while($linha = mysqli_fetch_assoc($resultado)){
				$produto[] = $linha;
			}

	return $produto;
}

function adicionarProduto($cate, $preco, $nome, $desc, $imagem, $estoque_min, $estoque_max, $quant_estoque){

	$sql = "INSERT INTO produtos (idproduto, categoria, preco, nomeproduto, descricao, imagem, estoque_minimo, estoque_maximo, quant_estoque) VALUES (null, '$cate', '$preco', '$nome', '$desc', '$imagem', '$estoque_min', '$estoque_max', '$quant_estoque')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if(!$resultado) { 
		die('Erro ao cadastrar produto ' . mysqli_error($cnv)); 
	}

	return 'Produto cadastrado com sucesso!';
	
}

function exibirProduto(){

	$sql = "SELECT * FROM produtos INNER JOIN categoria ON produtos.categoria=categoria.idcategoria";	
	$resultado = mysqli_query(conn(), $sql);

	$produto = array();
	while($linha = mysqli_fetch_assoc($resultado)){
		$produto[] = $linha;
	}
	return $produto;
}

function pegarProdutoPorId($id){
	$sql = "SELECT produtos.idproduto, produtos.preco, produtos.nomeproduto, produtos.descricao, produtos.imagem, produtos.estoque_minimo, produtos.estoque_maximo, produtos.quant_estoque, categoria.descricao AS nomeCate  FROM produtos INNER JOIN categoria ON produtos.categoria = categoria.idcategoria WHERE idproduto = $id ";

	$resultado = mysqli_query(conn(), $sql);
	$produto = mysqli_fetch_assoc($resultado);
	return $produto;
}

function deletarProduto($id){
	$sql = "DELETE FROM produtos WHERE idproduto = $id";
	$resultado = mysqli_query(conn(), $sql);

	if(!$resultado){
		die('Erro ao deletar produto'. mysqli_error($cnx));
	}

	return 'Produto deletado com sucesso';
}

function editarProduto($preco, $nome, $desc, $imagem, $estoque_min, $estoque_max, $id){

	$sql = "UPDATE produtos SET preco = '$preco', nomeproduto = '$nome', descricao = '$desc', imagem = '$imagem', estoque_minimo = '$estoque_min', estoque_maximo = '$estoque_max' WHERE idproduto = $id";

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao atualizar edição de produto' . mysqli_error($cnv)); }

	return 'Edição de produto atualizado com sucesso!';
}

?> 
