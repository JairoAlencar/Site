<?php

function conn() {
	$arquivo = "biblioteca/manipulacao/local.csv";
	//$arquivo = "biblioteca/manipulacao/serv.csv";

	/*Se estiver hospedado comento o local, se estiver no local comenta o hospedado*/

	$file = fopen($arquivo, 'r');
		$linha = fgets($file);
			$conexao = explode(';', $linha);
				$server = $conexao[0];
				$usuario = $conexao[1];
				$senha = $conexao[2];
				$database = $conexao[3];

	fclose($file);		

	$cnx = mysqli_connect($server, $usuario, $senha, $database);
	
	
    /*$cnx = mysqli_connect("localhost", "root", "", "Loja");*/

    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
    mysql_close($cnx);
}

?>