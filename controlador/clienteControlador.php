<?php

include("servico/validacaoServico.php");

function cadastro(){
	if (ehpost()) {

		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$sexo = $_POST["sexo"];
		$cpf = $_POST["cpf"];
		$nasc = $_POST["nasc"];
		$cidade = $_POST["cidade"];
		$est = $_POST["estado"];


		print_r(validacao_cadastro($nome, $sobrenome, $email, $senha, $sexo, $cpf, $nasc, $cidade, $est));

		echo "<br> $nome <br> $sobrenome <br> $email <br> $senha <br> $sexo <br> $cpf <br> $nasc <br> $cidade <br> $est" ;
		}else{
		exibir("cliente/cadastro");
	}	

}

function contato(){
	if (ehpost()) {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$assunto = $_POST["assunto"];
		$end = $_POST["end"];
		$msg = $_POST["msg"];

		print_r(validacao_contato($nome, $email, $assunto, $end, $msg));

		echo "$nome <br> $email <br> $assunto <br> $end <br> $msg" ;
		}else{
		exibir("cliente/contato");
	}
}

?>