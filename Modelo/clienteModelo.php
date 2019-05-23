<?php
function  adicionarCliente($nome, $sobrenome, $email, $senha, $sexo, $cpf, $nasc, $cidade, $est) {

	$sql  =  "INSERT INTO cliente (Nome, Sobrenome, Email, Senha, Sexo, Cpf, Nascimento, Cidade, Estado) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$sexo', '$cpf', '$nasc', '$cidade', '$est')" ;

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao cadastrar cliente' . mysqli_error($cnv)); }

	return 'Cliente cadastrado com sucesso!';
}

function exibirClientes(){

	$comando = "SELECT * FROM cliente";

	$conexao = conn();
	$retorno = mysqli_query($conexao, $comando);

	$clientes = array();
	while($registro = mysqli_fetch_assoc($retorno)) {
		$clientes = $registro;
	}
	return;
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