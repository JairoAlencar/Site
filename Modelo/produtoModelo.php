<?php

function adicionarProduto($nome, $pag, $val, $ficha, $desc, $vend){

	$sql = "INSERT INTO (nome, formaPagamento, valor, ficha, descricao, vendedor) VALUES ($nome, $pag, $val, $ficha, $desc, $vend)";

	$resultado = mysql_query($cnv = conn(), $sql);

	if(!$resultado) { die('Erro ao cadastrar produto ' . mysqli_error($cnv)); }

	return 'Produto cadastrado com sucesso!';
	
}


?>