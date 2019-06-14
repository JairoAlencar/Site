<?php

include("servico/validacaoServico.php");
require_once "modelo/categoriaModelo.php";

function categoria() {

	if (ehpost()) {
		$nome = $_POST['categoria'];

		$vali = validacaoCategoria($nome);

		echo '<pre>';
			print_r($vali);
		echo '</pre>';
		
			if (count($vali)==0){
					$msg = adicionarCategoria($nome);
					print "Categoria adionada com sucesso!";
			}else{
				print "Não foi possivel adicionar a categoria";
			}	
	}
	exibir("categoria/adicionarCate");
}

function listarCategoria() {

	$dados = array();

	$dados["Categoria"] = exibirCategoria();
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