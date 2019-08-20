<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>

<body>
	<h1>Categoria</h1>

	<TABLE class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descrição</th>
					<th>Ver Detalhes</th>
					<th>Deletar Categoria</th>
					<th>Editar</th>
				</tr>
			</thead>

			<?php foreach($FormaPagamento as $cate): ?>
			<tr>
				<td><?= $cate['idFormaPagamento']?></td>
				<td><?= $cate['descricao']?></td>
				<td> <a href="./FormaPagamento/ver/<?=
			$cate['idFormaPagamento']?>">Ver</a> </td>
				<td> <a href="./FormaPagamento/deletar/<?=
			$cate['idFormaPagamento']?>">Deletar</a> </td>
				<td> <a href="./FormaPagamento/editar/<?=$cate['idFormaPagamento']?>">Editar</a> </td>
			</tr>
			<?php endforeach; ?>	
	</TABLE>

	<a href="./FormaPagamento/FormaPagamento">Adicionar uma nova forma de pagamento</a>
</body>
</html>
