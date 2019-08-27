<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <meta charset="utf-8"> 
  <link rel="stylesheet" type="text/css" href="./publico/css/css.css">  
  <link rel="shoutcut icon" href="publico/imagens/icone.ico">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
  <style>
  		tr:nth-child(even) {
 		 	background-color: #dddd;
		}
  	</style> 
</head>

<body>
	<h1>Forma de Pagamento</h1>

<?php if(!empty($FormaPagamento)){?>
	<TABLE class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descrição</th>
					<th>Ver Detalhes</th>
					<th>Deletar Pagamento</th>
					<th>Editar</th>
				</tr>
			</thead>

			<?php foreach($FormaPagamento as $pag): ?>
			<tr>
				<td><?= $pag['idFormaPagamento']?></td>
				<td><?= $pag['descricao']?></td>
				<td> <a href="./FormaPagamento/ver/<?=
			$pag['idFormaPagamento']?>">Ver</a> </td>
				<td> <a href="./FormaPagamento/deletar/<?=
			$pag['idFormaPagamento']?>">Deletar</a> </td>
				<td> <a href="./FormaPagamento/editar/<?=$pag['idFormaPagamento']?>">Editar</a> </td>
			</tr>
			<?php endforeach; 
				}else{
			?>	
					<h5 class="text-center" style="color: black">Nenhuma forma de pagamento adicionada</h5>
			<?php
				}
			?>		
	</TABLE>

	<a href="./FormaPagamento/FormaPagamento">Adicionar uma nova forma de pagamento</a>
</body>
</html>
