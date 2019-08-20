<?php

function adicionarFormaPagamento($nome){

	$sql = "INSERT INTO FormaPagamento (idFormaPagamento, descricao) VALUES (NULL, '$nome')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if (!$resultado) { 
		die ('Erro ao cadastrar forma de pagamento' . mysqli_error($cnv));
	}

	return "Forma de pagamento adicionada.";
}

function exibirFormaPagamento(){

	$sql = "SELECT * FROM FormaPagamento";
	$resultado = mysqli_query(conn(), $sql);

	$FormaPagamento = array();
	while($linha = mysqli_fetch_assoc($resultado)) {
		$FormaPagamento[] = $linha;
	}
	return $FormaPagamento;
}

function pegarFormaPagamentoPorId($id){

	$sql = "SELECT * FROM FormaPagamento WHERE idFormaPagamento = $id";
	$resultado = mysqli_query(conn(), $sql);

	$FormaPagamento = mysqli_fetch_assoc($resultado);
	return $FormaPagamento;
}

function deletarFormaPagamento($id){

	$sql = "DELETE FROM FormaPagamento WHERE idFormaPagamento = $id";
	$resultado = mysqli_query(conn(), $sql);

	if(!$resultado){
		die('Erro ao deletar forma de pagamento'. mysqli_error($cnx));
	}

	return 'Forma de pagamento deletado com sucesso';
}

function editarFormaPagamento($nome, $id){

	$sql = "UPDATE FormaPagamento SET descricao='$nome' where idFormaPagamento='$id'";

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao atualizar edição da forma de pagamento' . mysqli_error($cnv)); }

	return 'Edição de forma de pagamento atualizado com sucesso!';	
}

?>