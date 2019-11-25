<?php

include("servico/validacaoServico.php");
require_once "modelo/categoriaModelo.php";

/** Adm */
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

/** Adm */
function editar($id){

	if(ehpost()){

		$desc = $_POST['descricao'];

		$vali = validacaoCategoria($desc);

			if(count($vali)==0){
					$msg = editarCategoria($desc, $id);
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

/** Adm */
function listarCategoria() {

	$dados = array();

	$dados["categoria"] = exibirCategoria();
	exibir("categoria/listar2", $dados);
}

/** Adm */
function ver($id){

	$dados["categoria"] = pegarCategoriaPorId($id);
	exibir("categoria/listar1", $dados);
}

/** Adm */
function deletar($id){

	$msg = deletarCategoria($id);
	redirecionar("categoria/listarCategoria");
}

?>