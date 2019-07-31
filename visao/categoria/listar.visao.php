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

			<?php foreach($categoria as $cate): ?>
			<tr>
				<td><?= $cate['idcategoria']?></td>
				<td><?= $cate['descricao']?></td>
				<td> <a href="./categoria/ver/<?=
			$cate['idcategoria']?>">Ver</a> </td>
				<td> <a href="./categoria/deletar/<?=
			$cate['idcategoria']?>">Deletar</a> </td>
				<td> <a href="./categoria/editar/<?=$cate['idcategoria']?>">Editar</a> </td>
			</tr>
			<?php endforeach; ?>	
	</TABLE>

	<a href="./categoria/categoria">Adicionar uma nova Categoria</a>
</body>
</html>
