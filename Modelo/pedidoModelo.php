<?php

function addPedido( $idUsuario, $idedereco, $idformapagamento, $produtos, $total) {
	$data = date("Y-m-d");
	$sql = "INSERT INTO pedido ( idUsuario, idendereco, idformapagamento, datacompra, total) VALUES ('$idUsuario', '$idedereco', '$idformapagamento', '$data', '$total')";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if (!$resultado) {
		die('Erro ao efetuar pedido' . mysqli_error($cnx));
	} 
	$idpedido = mysqli_insert_id($cnx);
	 foreach ($produtos as $produto){
			$idproduto= $produto['idproduto'];
		   $sql = "INSERT INTO pedido_produto ( idproduto, idpedido, quantidade) VALUES ('$idproduto', '$idpedido', '1')";
		  $resultado = mysqli_query($cnx = conn(), $sql);
		  if (!$resultado) {
			  die('Erro ao efetuar pedido' . mysqli_error($cnx));
		  } 
	  }
	return 'Pedido efetuado com sucesso!';
}

?>