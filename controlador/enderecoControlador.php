<?php

include("servico/validacaoServico.php");
require_once "modelo/enderecoModelo.php";
require_once "modelo/clienteModelo.php";

/** anon */
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

/** anon */
function editar($id, $id2){

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
				redirecionar("cliente/ver/$id2");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
			}
		
	}else{
		$dados["endereco"] = pegarEnderecoPorId($id);
		exibir("endereco/cadastro", $dados);
	}
}

/** anon */
function listarEndereco() {

	$dados = array();

	$dados["endereco"] = exibirEndereco();
	exibir("endereco/listar", $dados);
}

/** anon */
function ver($id){

	$dados["endereco"] = exibirEndereco($id);
	exibir("endereco/listar1", $dados);
}

/** anon */
function deletar($id, $id2){
	$msg = deletarEndereco($id);
        redirecionar("./endereco/ver/$id2");
}

?>