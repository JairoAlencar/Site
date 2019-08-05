<?php

include("servico/validacaoServico.php");
require_once "modelo/categoriaModelo.php";

function categoria() {

	if (ehpost()) {
		$desc = $_POST['descricao'];

		$vali = validacaoCategoria($desc);
		
			if (count($vali)==0){
					$msg = adicionarCategoria($desc);
					redirecionar("categoria/listarcategoria");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("categoria/adicionarCate", $dados);
			}	
	}
	exibir("categoria/adicionarCate");
}

function editar($id){

	if(ehpost()){

		$desc = $_POST['descricao'];

		$vali = validacaoCategoria($desc);

			if(count($vali)==0){
					$msg = editarCategoria($desc);
					redirecionar("categoria/listarcategoria");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("categoria/adicionarCate", $dados);
			}
	}else{
		
		$dados["categoria"] = pegarCategoriaPorId($id);
		exibir("categoria/adicionarCate", $dados);
	}
}

function listarCategoria() {

	$dados = array();

	$dados["categoria"] = exibirCategoria();
	exibir("categoria/listar", $dados);
}

function ver($id){

	$dados["categoria"] = pegarCategoriaPorId($id);
	exibir("categoria/listar1", $dados);
}

function deletar($id){

	$msg = deletarCategoria($id);
	redirecionar("categoria/listarCategoria");
}

?>