<?php
include("servico/validacaoServico.php");
include("servico/uploadServico.php");
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";
$idx = 0;
/** anon */
function index() {
        $produto = array();
	$dados["produtos"] = pegarCategoria();
	$dados["produtos"] = exibirProduto();
    exibir("produto/produtos", $dados);
}

function mapa (){
	exibir("paginas/mapa");
}

function paginacao($id=0) {
        $produto = array();
	$dados["produtos"] = pegarCategoria();
	$dados["produtos"] = exibirProduto();
    exibir("produto/produtos", $dados);
}
