<?php

function buscar_cupons($buscar){
	$sql = "SELECT * FROM cupom WHERE (nomecupom LIKE '%$buscar%' OR desconto LIKE '%$buscar%')";

		$resultado = mysqli_query(conn(), $sql);

		$cupom = array();
			while($linha = mysqli_fetch_assoc($resultado)){
				$cupom[] = $linha;
			}

	return $cupom;
}

function adicionarCupom($nomecupom, $desconto){

	$sql = "INSERT INTO cupom (idcupom, nomecupom, desconto) VALUES (NULL, '$nomecupom', '$desconto')";

	$resultado = mysqli_query($cnv = conn(), $sql);

	if (!$resultado) { 
		die ('Erro ao cadastrar cupom' . mysqli_error($cnv));
	}

	return "Cupom adicionado.";
}

function exibirCupom(){

	$sql = "SELECT * FROM cupom";
	$resultado = mysqli_query(conn(), $sql);

	$cupom = array();
	while($linha = mysqli_fetch_assoc($resultado)) {
		$cupom[] = $linha;
	}
	return $cupom;
}

function pegarCupomPorId($id){

	$sql = "SELECT * FROM cupom WHERE idcupom = $id";
	$resultado = mysqli_query(conn(), $sql);

	$cupom = mysqli_fetch_assoc($resultado);
	return $cupom;
}

function deletarCupom($id){

	$sql = "DELETE FROM cupom WHERE idcupom = $id";
	$resultado = mysqli_query(conn(), $sql);

	if(!$resultado){
		die('Erro ao deletar cupom'. mysqli_error($cnx));
	}

	return 'Cupom deletado com sucesso';
}

function editarCupom($nomecupom, $desconto, $id){

	$sql = "UPDATE cupom SET nomecupom='$nomecupom', desconto='$desconto' where idcupom='$id'";

	$resultado  =  mysqli_query ( $cnv  = conn (), $sql );

	if (!$resultado) {die ('Erro ao atualizar edição de cupom' . mysqli_error($cnv)); }

	return 'Edição de cupom atualizado com sucesso!';	
}

function busca_cupom($cupom){

	$sql = "SELECT * FROM cupom WHERE nomecupom = '$cupom'";
	$resultado = mysqli_query(conn(), $sql);

	$desconto = mysqli_fetch_assoc($resultado);

	return $desconto["desconto"];
}
?>