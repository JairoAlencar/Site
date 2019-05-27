<?php
function  adicionarCliente($nome, $sobrenome, $email, $senha, $sexo, $cpf, $nasc, $cidade, $est) {

	$sql  =  "INSERT INTO cliente (Nome, Sobrenome, Email, Senha, Sexo, Cpf, Nascimento, Cidade, Estado) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$sexo', '$cpf', '$nasc', '$cidade', '$est')" ;

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao cadastrar cliente' . mysqli_error($cnv)); }

	return 'Cliente cadastrado com sucesso!';
}

function exibirClientes(){

	$sql = "SELECT * FROM cliente";
	$resultado = mysqli_query(conn(), $sql);

	$clientes = array();
	while($linha = mysqli_fetch_assoc($resultado)) {
		$clientes[] = $linha;
	}
	return $clientes;
}

function Enviarmsg($nome, $email, $assunto, $end, $msg){

	$sql = "INSERT INTO contato (Nome, Email, Assunto, Endereco, Mensagem) VALUES ('$nome', '$email', '$assunto', '$end', '$msg')";

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die('Erro ao enviar a mensagem' . mysqli_error($cnv)); }

	return 'Mensagem enviada';

}

function exibirMsg() {



}

?>