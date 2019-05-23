<?php

	function validacao_cadastro($nome, $sobrenome, $email, $senha, $sexo, $cpf, $nasc, $cidade, $est){
		if (strlen(trim(strip_tags($nome)))==0) {
			$erros[] = "Você precisa preencer o campo nome.";
		}

		if (strlen(trim($sobrenome))==0) {
			$erros[] = "Você precisa preencer o campo sobrenome.";
		}

		if (strlen(trim($email))==0) {
			$erros[] = "Você precisa preencer o campo email.";
		}

		if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
    		$erros[] = "Informe um email valido";
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

		if (is_numeric($cpf)==0) {
			$erros[] = "Informe um numero de CPF valido";
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

		if (strlen(trim($nome))==0) {
			$erros[] = "Você precisa preencer o campo nome.";
		}

		if (strlen(trim($email))==0) {
			$erros[] = "Você precisa preencer o campo email.";
		}

		if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
    		$erros[] = "Informe um email valido";
		}

		if (strlen(trim($assunto))==0) {
			$erros[] = "Você precisa preencer o campo assunto.";
		}

		if (strlen(trim($end))==0) {
			$erros[] = "Você precisa preencer o campo endereço.";
		}

		if (strlen(trim($msg))==0) {
			$erros[] = "Você precisa preencer o campo mensagem.";
		}	

		return($erros);
	}

	function validacao_add_produto ($nome, $pag, $val, $ficha, $desc, $vend){

		if (strlen(trim($nome))==0) {
				$erros[] = "Você precisa preencher o campo nome do produto";
			}
		if (strlen(trim($pag))==0) {
				$erros[] = "Você precisa preencer o campo pagamento";	
			}

		if (strlen(trim($val))==0) {
				$erros[] = "Você precisa preeencer o campo valor";
		}

		if (is_numeric($val)==0) {
			$erros[] = "Informe um valor valido";
		}
	

		if (strlen(trim($ficha))==0) {
				$erros[] = "Você precisa preencher o campo da ficha tecnica";
			}

		if (strlen(trim($desc))==0) {
				$erros[] = "Você precisa preencer o campo descrição";
			}	

		if (strlen(trim($vend))==0) {
				$erros[] = "Você precisa preencher o campo contato vendedor";	
			}	

		return($erros); 					
	}
?>