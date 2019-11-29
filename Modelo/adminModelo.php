<?php

function pegarTodosProdutoEstoque() {
	$sql = "select * from produtos";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}
function pegarTodosProdutoeCategoria() {
	$sql = "select produtos.nomeproduto, categoria.descricao as categ 
			from produtos 
			inner join categoria 
			on categoria.idcategoria = produtos.idcategoria 
			order by categoria.descricao;";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}
function pegarTodosPedidosDatas($datad1, $datad2) {
	$sql = "SELECT * 
			FROM pedido 
			WHERE datacompra BETWEEN '$datad1' AND '$datad2'";
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}
function pegarTodosPedidosMunicipioEstado() {
	$sql = "SELECT pedido.datacompra, pedido.total, endereco.cidade from pedido 		
                inner join endereco
		on endereco.idEndereco = pedido.idEndereco
		order by endereco.cidade;";
	$resultado = mysqli_query(conn(), $sql);
	$pedido = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$pedido[] = $linha;
	}
	return $pedido;
}
function pegarTodosTotalFaturamamento($tipoFaturamento) {
	switch ($tipoFaturamento) {
		case 'S':
			$sql = "SELECT WEEK(p.datacompra) AS data, SUM(pr.preco * pp.quantidade) AS fatura
					FROM produtos pr 
					INNER JOIN pedido_produto pp 
					ON pr.idproduto = pp.idproduto
					INNER JOIN pedido p
					ON pp.idpedido = p.idpedido
					GROUP BY WEEK(p.dataCompra, 0)";
			break;
		case 'M':
			$sql = "SELECT MONTH(p.datacompra) AS data, SUM(pr.preco * pp.quantidade) AS fatura
					FROM produtos pr 
					INNER JOIN pedido_produto pp 
					ON pr.idproduto = pp.idproduto
					INNER JOIN pedido p
					ON pp.idpedido = p.idpedido
					GROUP BY MONTH(p.datacompra)";
			break;
		case 'A':
			$sql = "SELECT YEAR(p.datacompra) AS data, SUM(pr.preco * pp.quantidade) AS fatura
					FROM produtos pr 
					INNER JOIN pedido_produto pp 
					ON pr.idproduto = pp.idproduto
					INNER JOIN pedido p
					ON pp.idpedido = p.idpedido
					GROUP BY YEAR(p.datacompra)";
			break;
	}
	$resultado = mysqli_query(conn(), $sql);
	$produto = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produto[] = $linha;
	}
	return $produto;
}

?>