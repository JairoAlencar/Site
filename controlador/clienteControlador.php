<?php

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

		echo "$nome <br>, $sobrenome,<br>, $email,<br>, $senha,<br>, $sexo,<br>, $cpf,<br>, $nasc<br>, $cidade,<br>, $est" ;
		}else{
		exibir("cliente/cadastro");
	}	

}

function contato(){
	if (ehpost()) {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$assunto = $_POST["assunto"];
		$tell = $_POST["tell"];
		$end = $_POST["end"];
		$msg = $_POST["msg"];

		echo "$nome, <br>, $email,<br>, $assunto,<br>, $tell,<br>, $end,<br>, $msg" ;
		}else{
		exibir("cliente/contato");
	}
}

?>