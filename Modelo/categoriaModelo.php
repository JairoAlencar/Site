<?php

function adicionarCategoria($nome){

	$sql = "INSERT INTO categoria (idcategoria, descricao) VALUES (NULL, '$nome')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if (!$resultado) { 
		die ('Erro ao cadastrar categoria' . mysqli_error($cnv));
	}

	return "Categoria adicionada.";
}

function exibirCategoria(){

	$sql = "SELECT * FROM categoria";
	$resultado = mysqli_query(conn(), $sql);

	$categoria = array();
	while($linha = mysqli_fetch_assoc($resultado)) {
		$categoria[] = $linha;
	}
	return $categoria;
}

function pegarCategoriaPorId($id){

	$sql = "SELECT * FROM categoria WHERE idcategoria = $id";
	$resultado = mysqli_query(conn(), $sql);

	$categoria = mysqli_fetch_assoc($resultado);
	return $categoria;
}

function deletarCategoria($id){

	$sql = "DELETE FROM categoria WHERE idcategoria = $id";
	$resultado = mysqli_query(conn(), $sql);

	if(!$resultado){
		die('Erro ao deletar categoria'. mysqli_error($cnx));
	}

	return 'Categoria deletado com sucesso';
}

function editarCategoria($nome){

	$sql = "UPDATE categoria SET descricao='$nome'";

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao atualizar edição de categoria' . mysqli_error($cnv)); }

	return 'Edição de categoria atualizado com sucesso!';	
}

?>