<?php
function  adicionarEndereco($idCliente, $logradouro, $numero, $complemento, $bairro, $cidade, $cep) {

	$sql  =  "INSERT INTO endereco(idendereco ,idusuario, logradouro, numero, complemento, bairro, cidade, cep) VALUES (NULL, '$idCliente', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep')" ;

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao cadastrar endereco' . mysqli_error($cnv)); }

	return 'Endereco cadastrado com sucesso!';
}

function exibirEndereco($id){

	$sql = "SELECT * FROM endereco where idusuario=$id";
	$resultado = mysqli_query(conn(), $sql);

	$endereco = array();
	while($linha = mysqli_fetch_assoc($resultado)) {
		$endereco[] = $linha;
	}
	return $endereco;
}

function pegarEnderecoPorId($id){

	$sql = "SELECT * FROM endereco WHERE idendereco = $id";
	$resultado = mysqli_query(conn(), $sql);

	$endereco = mysqli_fetch_assoc($resultado);
	return $endereco;
}

function deletarEndereco($id){

	$sql = "DELETE FROM endereco WHERE idendereco = $id";
	$resultado = mysqli_query(conn(), $sql);

	if(!$resultado){
		die('Erro ao deletar endereco'. mysqli_error($cnx));
	}

	return 'Endereco deletado com sucesso';
}

function editarEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $id){

	$sql = "UPDATE endereco SET logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', cep = '$cep' where idendereco='$id'";
	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao atualizar cadastro de endereco' . mysqli_error($cnv)); }

	return 'Cadastro de endereco atualizado com sucesso!';
}

?>