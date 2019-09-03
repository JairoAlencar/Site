<?php

function exibirModelos($marca){
	$sql = "INSERT INTO marca (id_marca, descricao) VALUES (NULL, '$marca')";

		$resultado = mysqli_query($cnv = conn(), $sql);

		if (!$resultado) { 
			die ('Erro ao cadastrar marca' . mysqli_error($cnv));
		}

		return "Marca adicionada.";
}

?>