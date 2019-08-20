<?php

include("servico/validacaoServico.php");
require_once "modelo/FormaPagamentoModelo.php";

function FormaPagamento() {

	if (ehpost()) {
		$desc = $_POST['descricao'];

		$vali = validacaoFormaPagamento($desc);
		
			if (count($vali)==0){
					$msg = adicionarFormaPagamento($desc);
					redirecionar("FormaPagamento/listarFormaPagamento");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("FormaPagamento/adicionarFormaPagamento", $dados);
			}	
	}
	exibir("FormaPagamento/adicionarFormaPagamento");
}

function editar($id){

	if(ehpost()){

		$desc = $_POST['descricao'];

		$vali = validacaoFormaPagamento($desc);

			if(count($vali)==0){
					$msg = editarFormaPagamento($desc, $id);
					redirecionar("FormaPagamento/listarFormaPagamento");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("FormaPagamento/adicionarFormaPagamento", $dados);
			}
	}else{
		
		$dados["FormaPagamento"] = pegarFormaPagamentoPorId($id);
		exibir("FormaPagamento/adicionarFormaPagamento", $dados);
	}
}

function listarFormaPagamento() {

	$dados = array();

	$dados["FormaPagamento"] = exibirFormaPagamento();
	exibir("FormaPagamento/listar", $dados);
}

function ver($id){
	$dados["FormaPagamento"] = pegarFormaPagamentoPorId($id);
	exibir("FormaPagamento/listar1", $dados);
}

function deletar($id){

	$msg = deletarFormaPagamento($id);
	redirecionar("FormaPagamento/listarFormaPagamento");
}

?>