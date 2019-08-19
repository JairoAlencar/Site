<?php

include("servico/validacaoServico.php");
include("servico/uploadServico.php");
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";


function adicionar(){
	
	if (ehpost()){
		$nome = $_POST["nome_produto"];
		$preco = $_POST["preco"];
		$desc = $_POST["descricao"];
		$cate = $_POST["categoria"];
		$imagem = $_POST["imagem"];
		$estoque_min = $_POST["estoque_min"];
		$estoque_max = $_POST["estoque_max"];


		$vali = validacao_add_produto($cate, $preco, $nome, $desc, $imagem, $estoque_min, $estoque_max);

		if(count($vali)==0){
            
            
			$msg = adicionarProduto($cate, $preco, $nome, $desc, $imagem, $estoque_min, $estoque_max);
			redirecionar("produto/listarProdutos");
		}else{
			$dados = array();
			$dados["erros"] = $vali;
			$dados["categoria"] = exibirCategoria();
			exibir("produto/formulario", $dados);
		}


	}else{
		$dados = array();
		$dados["categoria"] = exibirCategoria();
		exibir("produto/formulario", $dados);
	}
	
}

function editar($id){

	if(ehpost()){

		$nome = $_POST["nome_produto"];
		$preco = $_POST["preco"];
		$desc = $_POST["descricao"]		;
		$cate = $_POST["categoria"];
		$imagem = $_POST["imagem"];
		$estoque_min = $_POST["estoque_min"];
		$estoque_max = $_POST["estoque_max"];

		editarProduto($preco, $nome, $desc, $imagem, $estoque_min, $estoque_max);
		redirecionar("produto/listarProdutos");
	}else{

		$dados["produto"] = pegarProdutoPorId($id);
		$dados["categoria"] = exibirCategoria();
		exibir("produto/formulario", $dados);
	}
}

function listarProdutos(){

        $produto = array();

		$dados["produtos"] = exibirProduto();
		exibir("produto/listar", $dados);
}

function ver($idproduto){

	$dados["produto"] = pegarProdutoPorId($idproduto);
	exibir("produto/listar1", $dados);
}

function deletar($id){
	$msg = deletarProduto($id);
	redirecionar("produto/listarProdutos");
}

?>