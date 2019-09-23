<?php

include("servico/validacaoServico.php");
require_once "modelo/cupomModelo.php";

/** Adm */
function cupom() {

	if (ehpost()) {
		$nomecupom = $_POST['nomecupom'];
                $desconto = $_POST['desconto'];

		$vali = validacaoCupom($nomecupom, $desconto);
		
			if (count($vali)==0){
					$msg = adicionarCupom($nomecupom, $desconto);
					redirecionar("cupom/listarCupom");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("cupom/adicionarCupom", $dados);
			}	
	}
	exibir("cupom/adicionarCupom");
}
/** Adm */
function editar($id){

	if(ehpost()){

		$nomecupom = $_POST['nomecupom'];
                $desconto = $_POST['desconto'];

		$vali = validacaoCupom($nomecupom, $desconto);

			if(count($vali)==0){
					$msg = editarCupom($nomecupom, $desconto, $id);
					redirecionar("cupom/listarcupom");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("cupom/adicionarCupom", $dados);
			}
	}else{
		
		$dados["cupom"] = pegarCupomPorId($id);
		exibir("cupom/adicionarCupom", $dados);
	}
}
/** Adm */
function listarCupom() {

	$dados = array();

	$dados["cupom"] = exibirCupom();
	exibir("cupom/listar", $dados);
}
/** Adm */
function ver($id){

	$dados["cupom"] = pegarCupomPorId($id);
	exibir("cupom/listar1", $dados);
}

/** Adm */
function deletar($id){

	$msg = deletarCupom($id);
	redirecionar("cupom/listarCupom");
}

?>