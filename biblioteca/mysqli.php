<?php

function conn() {
	/*$local = "biblioteca/manipulação/local.csv";
	$servidor = "biblioteca/manipulação/serv.csv";

	$file = fopen($arquivo, 'r');
		$linha = fgets($file);
			$conexao = explode(',', $linha);
				$server = $conexao[0];
				$usuario = $conexao[1];
				$senha = $conexao[2];
				$database = $conexao[3];

	fclose($file);		

	$cnx = mysqli_connect($server, $usuario, $senha, $database);
	*/
    $cnx = mysqli_connect("localhost", "root", "", "Loja");

    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
    mysql_close($cnx);
}