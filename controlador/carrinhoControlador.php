<?php
require_once "modelo/produtoModelo.php";

function carrinho(){
	exibir("carrinho/carrinho");//por enquanto só esta redirecionando para a pagina para poder fazer o layout
}

function adicionar($id){
	
	if (!isset($_SESSION['carrinho'])) {
		$_SESSION['carrinho'] = array();

	}

	$alt = false;

	for ($i=0; $i < count($_SESSION['carrinho']); $i++) { 
		if ($_SESSION['carrinho'] [$i] ['id'] == $id) {
			$alt = true;
			$_SESSION ['carrinho'] [$i] ['quantidade']++;
		}
	}

	if (!$alt) {
		$produto ['id'] = $id;
		$produto['quantidade'] = 1;
		$_SESSION['carrinho'] [] = $produto;
	}
	redirecionar('carrinho/carrinho');
}


?>
