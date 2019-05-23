<?php

include("servico/validacaoServico.php");
require_once "modelo/clienteModelo.php";

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

		$vali = validacao_cadastro($nome, $sobrenome, $email, $senha, $sexo, $cpf, $nasc, $cidade, $est);

		echo '<pre>';
        	print_r($vali);
        echo  '</pre>';

			if(count($vali)==0){
				$msg = adicionarCliente($nome, $sobrenome, $senha, $sexo, $cpf, $nasc, $cidade, $est, $email);
				print "Cadastro concluido";				
			}else{
				print"É obrigatorio preencer todos os campos";
			}
		
		} else {
			//sem resposta	
		}	
		exibir("cliente/cadastro");
}

function contato(){
	if (ehpost()) {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$assunto = $_POST["assunto"];
		$end = $_POST["end"];
		$msg = $_POST["msg"];


		$vali = validacao_contato($nome, $email, $assunto, $end, $msg);
		
			if(count($vali)==0){
				$msg = Enviarmsg($nome, $email, $assunto, $end, $msg); 
				echo $msg;
			}else{
				print"É preciso preencher todos os campos";
			}
		
		}else{
			//sem resposta
		}
		exibir("cliente/contato");
}

?>