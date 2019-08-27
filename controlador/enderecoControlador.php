<?php

include("servico/validacaoServico.php");
require_once "modelo/enderecoModelo.php";

function cadastro($idCliente){
	if (ehpost()) {

            $idCliente = $idCliente;
            $logradouro = $_POST["logradouro"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $cep = $_POST["cep"];

		$vali = validacao_endereco($logradouro, $numero, $bairro, $cidade, $cep);

			if(count($vali)==0){
				$msg = adicionarEndereco($idCliente, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
				redirecionar("cliente/ver/$idCliente");			
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("endereco/cadastro", $dados);
			}
		
		} else {
			$dados = array();                    
			exibir("endereco/cadastro", $dados);
		}	
		
}

function editar($id){

	if(ehpost()){

            $logradouro = $_POST["logradouro"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $cep = $_POST["cep"];

		$vali = validacao_endereco($logradouro, $numero, $bairro, $cidade, $cep);
		
			if(count($vali)==0){
				$msg = editarEndereco($logradouro, $numero, $complemento, $bairro, $cidade, $cep, $id);
				redirecionar("endereco/listarEndereco");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
			}
		
	}else{
		$dados["endereco"] = pegarEnderecoPorId($id);
		exibir("endereco/cadastro", $dados);
	}
}

function listarEndereco() {

	$dados = array();

	$dados["endereco"] = exibirEndereco();
	exibir("endereco/listar", $dados);
}

function ver($id){

	$dados["endereco"] = pegarEnderecoPorId($id);
	exibir("endereco/listar1", $dados);
}

function deletar($id){
	$msg = deletarEndereco($id);
	redirecionar("endereco/listarEndereco");
}

?>