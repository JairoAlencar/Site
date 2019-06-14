<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./publico/css/pagprin">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>

	<h2>Categoria</h2>

	<TABLE class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descrição</th>
					<th>Ver Detalhes</th>
					<th>Deletar Categoria</th>
				</tr>
			</thead>

			<?php foreach($Categoria as $cat): ?>
			<tr>
				<td><?= $cat['idcategoria']?></td>
				<td><?= $cat['descrição']?></td>
				<td> <a href="./categoria/ver/<?=
			$categoria['idcategoria']?>">Ver</a> </td>
				<td> <a href="./categoria/deletar/<?=
			$categoria['idcategoria']?>"></a> </td>
			</tr>
			<?php endforeach; ?>	
	</TABLE>

	<a href="./categoria/adiconarCate">Adicionar uma nova Categoria</a>
</body>
</html>