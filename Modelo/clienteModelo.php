<?php
function  adicionarCliente($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo) {

	$sql  =  "INSERT INTO usuario (nomeusuario, email, senha, cpf, datadenascimento, sexo, tipousuario) VALUES ('$nome', '$email', '$senha', '$cpf', '$nasc', '$sexo', '$tipo')" ;

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

function Enviarmsg($nome, $email, $assunto, $end, $msg){

	$sql = "INSERT INTO contato (Nome, Email, Assunto, Endereco, Mensagem) VALUES ('$nome', '$email', '$assunto', '$end', '$msg')";

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die('Erro ao enviar a mensagem' . mysqli_error($cnv)); }

	return 'Mensagem enviada';

}

function exibirMsg() {

	$sql = "SELECT * FROM contato";
	$resultado = mysqli_query(conn(), $sql);

	$mensagem = array();
	while($linha = mysqli_fetch_assoc($resultado)) {
		$mensagem[] = $linha;
	}
	return $mensagem;
}
?>