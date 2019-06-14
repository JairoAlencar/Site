<?php

function adicionarProduto($preco, $nome, $desc, $imagem, $estoque_min, $estoque_max){

	$sql = "INSERT INTO produtos (idproduto, preco, nomeproduto, descricao, imagem, estoque_minimo, estoque_maximo) VALUES (null, '$preco', '$nome', '$desc', '$imagem', '$estoque_min', '$estoque_max')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if(!$resultado) { die('Erro ao cadastrar produto ' . mysqli_error($cnv)); }

	return 'Produto cadastrado com sucesso!';
	
}

function exibirProduto(){

	$sql = "SELECT * FROM produtos";	
	$resultado = mysqli_query(conn(), $sql);

	$produto = array();
	while($linha = mysqli_fetch_assoc($resultado)){
		$produto[] = $linha;
	}
	return $produto;
}

function pegrProdutoPorId($id){
	$sql = "SELECT * FROM produtos WHERE idproduto = $id";
	$resultado = mysqli_query(conn(), $sql);

	$produto = mysqli_fetch_assoc($resultado);
	return $produto;
}

function deletarProduto(){
	$sql = "DELETE FROM produtos WHERE idproduto = $id";
	$resultado = mysqli_query(conn(), $sql);

	if(!$resultado){
		die('Erro ao deletar produto'. mysqli_error($cnx));
	}

	return 'Produto deletado com sucesso';
}

?> 