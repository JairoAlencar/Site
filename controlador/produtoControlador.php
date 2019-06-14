<?php

include("servico/validacaoServico.php");
require_once "modelo/produtoModelo.php";


function adicionar(){
	
	if (ehpost()){
		$nome = $_POST["nome_produto"];
		$pag = $_POST["pagamento"];
		$val = $_POST["valor"];
		$ficha = $_POST["ficha_tec"];
		$desc = $_POST["descricao"];
		$vend = $_POST["contato_vendedor"];

		$vali = validacao_add_produto($nome, $pag, $val, $ficha, $desc, $vend);

		if(count($vali)==0){
			$msg = adicionarProduto($nome, $pag, $val, $ficha, $desc, $vend);
			redirecionar("produto/listarProdutos");
		}else{
			$dados = array();
			$dados["erros"] = $vali;
			exibir("produto/adicionar", $dados);
		}


	}else{
		exibir("produto/formulario");
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
	redirecionar("produto/listarProduto");
}

?>