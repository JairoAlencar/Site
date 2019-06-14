<?php
function  adicionarCliente($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo) {

	$sql  =  "INSERT INTO usuario (idusuario ,nomeusuario, email, senha, cpf, datadenascimento, sexo, tipousuario) VALUES (NULL, '$nome', '$email', '$senha', '$cpf', '$nasc', '$sexo', '$tipo')" ;

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao cadastrar cliente' . mysqli_error($cnv)); }

	return 'Cliente cadastrado com sucesso!';
}

function exibirClientes(){

	$sql = "SELECT * FROM usuario";
	$resultado = mysqli_query(conn(), $sql);

	$clientes = array();
	while($linha = mysqli_fetch_assoc($resultado)) {
		$clientes[] = $linha;
	}
	return $clientes;
}

function pegarClientePorId($id){

	$sql = "SELECT * FROM usuario WHERE idusuario = $id";
	$resultado = mysqli_query(conn(), $sql);

	$cliente = mysqli_fetch_assoc($resultado);
	return $cliente;
}

function deletarCliente($id){

	$sql = "DELETE FROM usuario WHERE idusuario = $id";
	$resultado = mysqli_query(conn(), $sql);

	if(!$resultado){
		die('Erro ao deletar cliente'. mysqli_error($cnx));
	}

	return 'Cliente deletado com sucesso';
}

?>