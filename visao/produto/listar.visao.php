<!DOCTYPE html> 
<html>
<head>
  <title>Produtos</title> 
  <meta charset="utf-8">
  <link rel="stylesheet" href="./publico/css/css.css">   
  <link rel="shoutcut icon" href="publico/imagens/icone.ico"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
  <style>
  	tr:nth-child(even) {
 		 background-color: #dddd;
	}
  </style> 
</head>

	<h1>Produtos</h1>

	<TABLE class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>ID Categoria</th>					
					<th>Nome</th>
					<th>Valor</th>
					<th>Ver Detalhes</th>
					<th>Comprar</th>
					<th>Deltar Produto</th>
					<th>Editar</th>
				</tr>
			</thead>

			<?php foreach($produtos as $produto): ?>
			<tr>
				<td><?= $produto['idproduto']?></td>
				<td><?= $produto['idcategoria']?></td>
				<td><?= $produto['nomeproduto']?></td>
				<td><?= $produto['preco']; echo",00";?></td>
				<td> <a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a> </td>
				<td> <a href="./carrinho/adicionar/<?=$produto['idproduto']?>">Comprar</a> </td>
				<td> <a href="./produto/deletar/<?=$produto['idproduto']?>">Deletar</a> </td>
				<td> <a href="./produto/editar/<?=$produto['idproduto']?>">Editar</a> </td>
			</tr>
			<?php endforeach; ?>
	</TABLE>	

	<a href="./produto/Adicionar">Adicionar um novo produto</a>