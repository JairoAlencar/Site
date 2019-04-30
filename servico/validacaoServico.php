<?php

	function validacao_cadastro(){
		if (strlen($nome)==0) {
			$erros[] = "Você precisa preencer o campo nome.";
		}

		if (strlen($sobrenome)==0) {
			$erros[] = "Você precisa preencer o campo sobrenome.";
		}

		if (strlen($email)==0) {
			$erros[] = "Você precisa preencer o campo email.";
		}

		if (strlen($senha)==0) {
			$erros[] = "Você precisa preencer o campo senha.";
		}

		if (strlen($sexo)==0) {
			$erros[] = "Você precisa preencer o campo sexo.";
		}

		if (strlen($cpf)==0) {
			$erros[] = "Você precisa preencer o campo cpf.";
		}

		if (strlen($nasc)==0) {
			$erros[] = "Você precisa preencer o campo nascimento.";
		}

		if (strlen($cidade)==0) {
			$erros[] = "Você precisa preencer o campo cidade.";
		}

		if (strlen($est)==0) {
			$erros[] = "Você precisa preencer o campo estado.";
		}

		return(print_r($erros));
	}
?>