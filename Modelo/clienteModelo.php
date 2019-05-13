<?php

function adicionarCliente($nome, $sobrenome, $senha, $sexo, $cpf, $nasc, $cidade, $est){

	$sql = "INSERT INTO cliente (nome, sobrenome, senha, sexo, cpf, nasc, cidade, est) VALUES ('$nome', '$sobrenome', '$senha', '$sexo', '$cpf', '$nasc', '$cidade', '$est')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if(!$resultado)

}
?>