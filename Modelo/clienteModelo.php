<?php

function buscar_usuario($buscar){
	$sql = "SELECT * FROM usuario WHERE (nomeusuario LIKE '%$buscar%' OR email LIKE '%$buscar%' OR cpf LIKE '%$buscar%')";

		$resultado = mysqli_query(conn(), $sql);

		$clientes = array();
			while($linha = mysqli_fetch_assoc($resultado)){
				$clientes[] = $linha;
			}

	return $clientes;
}

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

function editarCliente($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo, $id){

	$sql = "UPDATE usuario SET nomeusuario = '$nome', email = '$email', senha = '$senha', cpf = '$cpf', datadenascimento = '$nasc', sexo = '$sexo', tipousuario = '$tipo' WHERE idusuario = $id";

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao atualizar cadastro de cliente' . mysqli_error($cnv)); }

	return 'Cadastro de cliente atualizado com sucesso!';
}

function pegarUsuarioPorEmailSenha($email, $senha) {
    $sql = "SELECT * FROM usuario WHERE email= '$email' and senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
?>