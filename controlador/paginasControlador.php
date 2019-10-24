<?php
include("servico/validacaoServico.php");
include("servico/uploadServico.php");
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

/** anon */
function index() {
        $produto = array();
	$dados["produtos"] = pegarCategoria();
	$dados["produtos"] = exibirProduto();
    exibir("produto/produtos", $dados);
}

function sobre(){
	exibir("paginas/sobre");
}

function mapa (){
	exibir("paginas/mapa");
}

