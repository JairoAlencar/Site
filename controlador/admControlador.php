<?php
require_once 'modelo/adminModelo.php';
require_once 'modelo/produtoModelo.php';
require_once 'modelo/clienteModelo.php';

/** Adm */
function listaProdQuantiEstq() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutoEstoque();
	exibir("admin/quantPedido", $dados);
}

/** Adm */
function listaPedidosRealizadosDatas() {
	if (ehPost()){
		$datad1 = $_POST ['datad1'];
		$datad2= $_POST ['datad2'];
		$dados = array();
		$dados["adm"] = pegarTodosPedidosDatas($datad1, $datad2); 
		exibir("admin/interData", $dados);
	}else{
		exibir("admin/interData");
	} 
}
/** Adm */
function listaPedidosMunicipioEstado() {
	$dados = array();
	$dados["adm"] = pegarTodosPedidosMunicipioEstado();
	exibir("admin/pedidoRegiao", $dados);	
}
/** Adm */
function totalFaturamentoPeriodo() {
    if (ehPost()){
		$fatu = $_POST ['tipo'];
		$dados = array();
                $dados["adm"] = pegarTodosTotalFaturamamento($fatu);
                exibir("admin/fatur", $dados);
	}else{
		exibir("admin/fatur");
	} 
}

/** Adm*/
function aparecer(){
	exibir("admin/exibir");
}
?>