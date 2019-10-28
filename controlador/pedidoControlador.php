<?php
require_once "modelo/FormaPagamentoModelo.php";

function listarFormaPagamento() {

	$dados = array();
	$dados["FormaPagamento"] = exibirFormaPagamento();

	exibir("pedido/pedido", $dados);
}
?>