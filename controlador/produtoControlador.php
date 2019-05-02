<?php

include("servico/validacaoServico.php");

function visualizar(){

	$produto = array();
		$produto["modelo"] = "Iphone X";
		$produto["descrição"] = "No iPhone X, o aparelho é a própria tela. A inovadora tela Retina foi criada para caber na mão e encher os olhos.";
		$produto["preço"] = "4.599,00";

	exibir("produto/visualizar", $produto);		
}

function adicionar(){
	
	if (ehpost()){
		$nome = $_POST["nome_produto"];
		$pag = $_POST["pagamento"];
		$val = $_POST["valor"];
		$ficha = $_POST["ficha_tec"];
		$desc = $_POST["descricao"];
		$vend = $_POST["contato_vendedor"];

		print_r(validacao_add_produto($nome, $pag, $val, $ficha, $desc, $vend));

		echo "<br> $nome <br> $pag <br> $val <br> $ficha <br> $desc <br> $vend";
	}else{
		exibir("produto/formulario");
	}
}
?>