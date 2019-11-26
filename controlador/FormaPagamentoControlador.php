<?php

include("servico/validacaoServico.php");
require_once "modelo/FormaPagamentoModelo.php";

/** Adm */
function FormaPagamento() {

	if (ehpost()) {
		$desc = $_POST['descricao'];

		$vali = validacaoFormaPagamento($desc);
		
			if (count($vali)==0){
					$msg = adicionarFormaPagamento($desc);
					redirecionar("FormaPagamento/listarFormaPagamento/?cod=0");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("FormaPagamento/adicionarFormaPagamento", $dados);
			}	
	}
	exibir("FormaPagamento/adicionarFormaPagamento");
}

/** Adm */
function editar($id){

	if(ehpost()){

		$desc = $_POST['descricao'];

		$vali = validacaoFormaPagamento($desc);

			if(count($vali)==0){
					$msg = editarFormaPagamento($desc, $id);
					redirecionar("FormaPagamento/listarFormaPagamento/?cod=0");
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

/** Adm */
function listarFormaPagamento() {

	$dados = array();

	$dados["FormaPagamento"] = exibirFormaPagamento();
	exibir("FormaPagamento/listar2", $dados);
}

/** Adm */
function ver($id){
	$dados["FormaPagamento"] = pegarFormaPagamentoPorId($id);
	exibir("FormaPagamento/listar1", $dados);
}

/** Adm */
function deletar($id){

	$msg = deletarFormaPagamento($id);
	redirecionar("FormaPagamento/listarFormaPagamento/?cod=0");
}

?>