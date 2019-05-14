<?php

function adicionarCliente($nome, $sobrenome, $senha, $sexo, $cpf, $nasc, $cidade, $est, $email){

	$sql = "INSERT INTO cliente (nome, sobrenome, email, senha, cidade, sexo, cpf, nascimento, estado) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$cidade', '$sexo', '$cpf', '$nasc', '$est')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if(!$resultado) { die('Erro ao cadastrar cliente ' . mysqli_error($cnv)); }

	return 'Cliente cadastrado com sucesso!';

}

function EnviarMsg($nome, $email, $assunto, $end, $msg){

	$sql = "INSERT INTO contato(nome, email, assunto, endereco, mensagem) VALUES ('$nome', '$email', '$assunto', '$end', '$msg')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if(!$resultado) { die('Erro ao enviar a mensagem ' . mysqli_error($cnv)); }

	return 'Mensagem enviada com sucesso!';
}
?>