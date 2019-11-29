<?php
require_once 'modelo/adminModelo.php';
require_once 'modelo/produtoModelo.php';

/** ADM */
function listaProdQuantiEstq() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutoEstoque();
	exibir("adm/listaProdutoseQuantidadedoEstoque", $dados);
}
/** ADM */
function listaProdutosCategoria() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutoeCategoria();
	exibir("adm/listaProdutosCategoria", $dados);
}
/** ADM */
function listaPedidosRealizadosDatas() {
	if (ehPost()){
		$datad1 = $_POST ['datad1'];
		$datad2= $_POST ['datad2'];
		$dados = array();
		$dados["adm"] = pegarTodosPedidosDatas($datad1, $datad2); 
		exibir("adm/listaPedidosRealizadosDatas", $dados);
	}else{
		exibir("adm/data");
	} 
}
/** ADM */
function listaPedidosMunicipioEstado() {
	$dados = array();
	$dados["adm"] = pegarTodosPedidosMunicipioEstado();
	exibir("adm/listaPedidosMunicipioEstado", $dados);	
}
/** ADM */
function totalFaturamentoPeriodo() {
    if (ehPost()){
		$fatu = $_POST ['tipo'];
		$dados = array();
                $dados["adm"] = pegarTodosTotalFaturamamento($fatu);
                exibir("adm/totalFaturamentoPeriodo", $dados);
	}else{
		exibir("adm/faturamento");
	} 
}

?>