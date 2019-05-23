<?php

include("servico/validacaoServico.php");
require_once "modelo/produtoModelo.php";

function visualizar(){
    if(ehpost()){
        $produto = array();
		$produto["modelo"] = "Iphone X";
		$produto["descrição"] = "No iPhone X, o aparelho é a própria tela. A inovadora tela Retina foi criada para caber na mão e encher os olhos.";
		$produto["preço"] = "4.599,00";
    }else{
        exibir("produto/visualizar", $produto);
    }
     

			
}

function adicionar(){
	
	if (ehpost()){
		$nome = $_POST["nome_produto"];
		$pag = $_POST["pagamento"];
		$val = $_POST["valor"];
		$ficha = $_POST["ficha_tec"];
		$desc = $_POST["descricao"];
		$vend = $_POST["contato_vendedor"];

		$vali = (validacao_add_produto($nome, $pag, $val, $ficha, $desc, $vend));

		echo '<pre>';
			print_r($vali);
		echo '</pre>';

		if(count($vali)){
			$msg = adicionarProduto(($nome, $pag, $val, $ficha, $desc, $vend);
			print "Produto cadastrado com sucesso";
		}else{
			print "É obrigatorio preencher todos os campos";
		}


	}else{
		//sem resposta
	}
	exibir("produto/formulario");
}
?>