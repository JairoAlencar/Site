<?php

	function validacao_cadastro($nome, $sobrenome, $email, $senha, $sexo, $cpf, $nasc, $cidade, $est){
		if (strlen(trim($nome))==0) {
			$erros[] = "Você precisa preencer o campo nome.";
		}

		if (strlen(trim($sobrenome))==0) {
			$erros[] = "Você precisa preencer o campo sobrenome.";
		}

		if (strlen(trim($email))==0) {
			$erros[] = "Você precisa preencer o campo email.";
		}

		if (strlen(trim($senha))==0) {
			$erros[] = "Você precisa preencer o campo senha.";
		}

		if (strlen(trim($sexo))==0) {
			$erros[] = "Você precisa preencer o campo sexo.";
		}

		if (strlen(trim($cpf))==0) {
			$erros[] = "Você precisa preencer o campo cpf.";
		}

		if (strlen(trim($nasc))==0) {
			$erros[] = "Você precisa preencer o campo nascimento.";
		}

		if (strlen(trim($cidade))==0) {
			$erros[] = "Você precisa preencer o campo cidade.";
		}

		if (strlen(trim($est))==0) {
			$erros[] = "Você precisa preencer o campo estado.";
		}

		return($erros);
	}

	function validacao_contato ($nome, $email, $assunto, $end, $msg){

		if (condition) {
				# code...
			}	
	}
?>