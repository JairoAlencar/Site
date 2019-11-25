<?php

include("servico/validacaoServico.php");
include("servico/uploadServico.php");
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

/** anon */
function buscar(){
	if (ehpost()){
		$busca = $_POST["busca"];
	 
	 	$produto = array();

		$dados["produtos"] = buscar_prod($busca);
		exibir("produto/listar", $dados);
		
	}
}

/** Adm */
function adicionar(){
	
	if (ehpost()){
		$nome = $_POST["nome_produto"];
		$preco = $_POST["preco"];
		$desc = $_POST["descricao"];
		$cate = $_POST["categoria"];
		$imagem_temp_name = $_FILES["imagem"]["tmp_name"];
		$name_imagem = $_FILES["imagem"]["name"];
		$estoque_min = $_POST["estoque_min"];
		$estoque_max = $_POST["estoque_max"];
		$quant_estoque = $_POST["quant_estoque"];

		$imagem = uploadImagem($imagem_temp_name, $name_imagem);
		$vali = validacao_add_produto($cate, $preco, $nome, $desc, $imagem, $estoque_min, $estoque_max, $quant_estoque);

		if(count($vali)==0){
            
            
			$msg = adicionarProduto($cate, $preco, $nome, $desc, $imagem, $estoque_min, $estoque_max, $quant_estoque);
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

/** Adm */
function editar($id){

	if(ehpost()){

		$nome = $_POST["nome_produto"];
		$preco = $_POST["preco"];
		$desc = $_POST["descricao"]		;
		$cate = $_POST["categoria"];
		$imagem = $_POST["imagem"];
		$estoque_min = $_POST["estoque_min"];
		$estoque_max = $_POST["estoque_max"];

		editarProduto($preco, $nome, $desc, $imagem, $estoque_min, $estoque_max, $id);
		redirecionar("produto/listarProdutos");
	}else{

		$dados["produto"] = pegarProdutoPorId($id);
		$dados["categoria"] = exibirCategoria();
		exibir("produto/formulario", $dados);
	}
}

/** Adm */
function listarProdutos(){

        $produto = array();

		
		$dados["produtos"] = pegarCategoria();
		$dados["produtos"] = exibirProduto();
		exibir("produto/listar2" , $dados);
}

/** anon */
function ver($idproduto){

	$dados["produto"] = pegarProdutoPorId($idproduto);
	exibir("produto/listar1", $dados);
}

/** Adm */
function deletar($id){
	$msg = deletarProduto($id);
	redirecionar("produto/listarProdutos");
}

function total(){
	$dados = array();
	$quantTotal = 0;
	$valTotal = 0;

	$produto = exibirProduto();

	$quantTotal = $quantTotal + $produto["quantidade"];
	$valoTotal = $valTotal + $produto["preco"];
	/*Não entendi oq esssa função esta fazendo aqui, mas ela precisa ser usada para fazer a contagem de produtos e suas quantidades colocando em uma tabela para o controle de quantidade em estoque*/
	$dados["numeroProdutosCadastrados"] = $quantTotal;
	$dados["valorTotalProdutosCadastrados"] = $valTotal;

	exibir("produto/totalProdutos", $dados);
}

?>
