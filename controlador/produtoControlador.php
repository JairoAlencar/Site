<?php

function visualizar(){

	$produto = array();
		$produto["modelo"] = "Iphone X";
		$produto["descrição"] = "No iPhone X, o aparelho é a própria tela. A inovadora tela Retina foi criada para caber na mão e encher os olhos.";
		$produto["preço"] = "4.599,00";

	exibir("produto/visualizar", $produto);		
}
?>