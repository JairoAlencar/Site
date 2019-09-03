<?php

function adicionarCarro($marca, $modelo, $ano, $placa, $cor){

	$sql = "INSERT INTO carro (id_carro ,id_marca, modelo, ano, placa, cor) VALUES (NULL, $marca, '$modelo', '$ano', '$placa', '$cor')";

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao adicionar carro' . mysqli_error($cnv)); }

	return 'Carro adicionado com sucesso!';
}

?>