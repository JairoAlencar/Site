<?php
require_once "modelo/FormaPagamentoModelo.php";
require_once "modelo/enderecoModelo.php".
require_once "modelo/clienteModelo.php";

function listarFormaPagamento() {

	$dados = array();
	$dados["FormaPagamento"] = exibirFormaPagamento();

	exibir("pedido/pedido", $dados);
}

function listarEndereco() {

	$dados = array();

	$dados["endereco"] = exibirEndereco();
	exibir("pedido/pedido", $dados);
}
?>