<?php

function adicionarCategoria($nome){

	$sql = "INSERT INTO categoria (Nome) VALUES ('$nome')";

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

?>