<?php

include("servico/validacaoServico.php");
require_once "modelo/produtoModelo.php";


function adicionar(){
	
	if (ehpost()){
		$nome = $_POST["nome_produto"];
		$pag = $_POST["pagamento"];
		$val = $_POST["valor"];
		$cat = $_POST["categoria"];
		$ficha = $_POST["ficha_tec"];
		$desc = $_POST["descricao"];
		$vend = $_POST["contato_vendedor"];

		$vali = (validacao_add_produto($nome, $pag, $val, $cat, $ficha, $desc, $vend));

		echo '<pre>';
			print_r($vali);
		echo '</pre>';

		if(count($vali)==0){
			$msg = adicionarProduto($nome, $pag, $val, $cat, $ficha, $desc, $vend);
			print "Produto cadastrado com sucesso";
		}else{
			print "É obrigatorio preencher todos os campos";
		}


	}else{
		//sem resposta
	}
	exibir("produto/formulario");
}

function listarProdutos(){

        $produto = array();

		$dados["produtos"] = exibirProduto();
		exibir("produto/listar", $dados);
}

?>