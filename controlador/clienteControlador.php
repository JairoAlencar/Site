<?php

include("servico/validacaoServico.php");
require_once "modelo/clienteModelo.php";

/** anon */
function cadastro(){
	if (ehpost()) {

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$cpf = $_POST["cpf"];
		$nasc = $_POST["nasc"];
		$sexo = $_POST["sexo"];
		$tipo = $_POST['tipo'];
		


		$vali = validacao_cadastro($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo);

			if(count($vali)==0){
				$msg = adicionarCliente($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo);
				redirecionar("cliente/listarCliente");			
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("cliente/cadastro", $dados);
			}
		
		} else {
			exibir("cliente/cadastro");	
		}	
		
}

/** anon */
function editar($id){

	if(ehpost()){

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$cpf = $_POST["cpf"];
		$nasc = $_POST["nasc"];
		$sexo = $_POST["sexo"];
		$tipo = $_POST['tipo'];

		$vali = validacao_cadastro($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo);
		
			if(count($vali)==0){
				$msg = editarCliente($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo, $id);
				redirecionar("cliente/listarCliente");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("cliente/cadastro", $dados);
			}
		
	}else{

		$dados["cliente"] = pegarClientePorId($id);
		exibir("cliente/cadastro", $dados);
	}
}


/** anon */
function listarCliente() {

	$dados = array();

	$dados["clientes"] = exibirClientes();
	exibir("cliente/listar", $dados);
}

/** admin,user */
function ver($idCliente){

	$dados["cliente"] = pegarClientePorId($idCliente);
	exibir("cliente/listar1", $dados);
}

/** Adm */
function deletar($id){
	$msg = deletarCliente($id);
	redirecionar("cliente/listarCliente");
}

?>
