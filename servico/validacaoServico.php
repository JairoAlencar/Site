<?php

	function validacao_cadastro($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo){
		if (strlen(trim(strip_tags($nome)))==0) {
			$erros[] = "Você precisa preencer o campo nome.";
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

		if (strlen(trim($cpf))==0) {
					$erros[] = "Você precisa preencer o campo cpf.";
		}

		if (is_numeric($cpf)==0) {
			$erros[] = "Informe um numero de CPF valido";
		}

		if (strlen(trim($nasc))==0) {
			$erros[] = "Você precisa preencer o campo nascimento.";
		}

		if (strlen(trim($sexo))==0) {
			$erros[] = "Você precisa preencer o campo sexo.";
		}

		if (strlen(trim($tipo))==0) {
			$erros[] = "Você precisa preencer o campo tipo de usuario.";
		}

		return($erros);
	}

	function validacao_add_produto ($preco, $nome, $desc, $imagem, $estoque_min, $estoque_max){

		if (strlen(trim($nome))==0) {
				$erros[] = "Você precisa preencher o campo nome do produto";
			}

		if (strlen(trim($preco))==0) {
				$erros[] = "Você precisa preeencer o campo valor";
		}

		if (strlen(trim($imagem))==0) {
				$erros[] = "Você precisa preencher o campo da Imagem";
			}

		if (strlen(trim($desc))==0) {
				$erros[] = "Você precisa preencer o campo descrição";
			}	

		if (strlen(trim($estoque_min))==0) {
				$erros[] = "Você precisa preencher o campo estoque minimo";	
			}	
			
		if (strlen(trim($estoque_max))==0) {
				$erros[] = "Você precisa preencher o campo estoque maximo";	
			}
				
		return($erros); 					
	}

	function validacaoCategoria($desc) {

		if (strlen(trim($desc))==0) {
				$erros[] = "Você precisa preencher o descrição";
		}
		return($erros);
	}
?>	