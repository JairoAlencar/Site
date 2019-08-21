<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" type="text/css" href="./publico/css/css.css">  
  <link rel="shoutcut icon" href="publico/imagens/icone.ico">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">   
</head>

<body>
	<h1>Cupom</h1>

	<TABLE class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
                                        <th>Desconto</th>
					<th>Ver Detalhes</th>
					<th>Deletar Categoria</th>
					<th>Editar</th>
				</tr>
			</thead>

			<?php foreach($cupom as $cupom): ?>
			<tr>
				<td><?= $cupom['idcupom']?></td>
                                <td><?=$cupom['nomecupom']?> </td>
                                <td><?= $cupom['desconto']?></td>
				<td> <a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a> </td>
				<td> <a href="./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</a> </td>
				<td> <a href="./cupom/editar/<?=$cupom['idcupom']?>">Editar</a> </td>
			</tr>
			<?php endforeach; ?>	
	</TABLE>

	<a href="./cupom/cupom">Adicionar um novo Cupom</a>
</body>
</html>
