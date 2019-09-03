<?php
	require_once "modelo/carroModelo.php";
	require_once "modelo/marcaModelo.php";


function adicionar(){

	if (ehpost()) {

		$marca = $_POST["marca"];
		$modelo = $_POST["modelo"];
		$ano = $_POST["ano"];
		$placa = $_POST["placa"];
		$cor = $_POST["cor"];

		adicionarCarro($marca, $modelo, $ano, $placa, $cor);
		redirecionar("carro/listarcarro");
	}else{
		$dados = array();
		$dados["marca"] = exibirModelos();
		exibir("carro/cadastro");
	}
}	
?>