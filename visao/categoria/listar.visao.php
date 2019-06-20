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

			<?php foreach($categoria as $cate): ?>
			<tr>
				<td><?= $cate['idcategoria']?></td>
				<td><?= $cate['descricao']?></td>
				<td> <a href="./categoria/ver/<?=
			$cate['idcategoria']?>">Ver</a> </td>
				<td> <a href="./categoria/deletar/<?=
			$cate['idcategoria']?>">Deletar</a> </td>
			</tr>
			<?php endforeach; ?>	
	</TABLE>

	<a href="./categoria/categoria">Adicionar uma nova Categoria</a>