<h1>Produtos IFtech</h1>

<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Valor</th>
				<th>Categoria</th>
				<th>Vendedor</th>
			</tr>
		</thead>

		<?php foreach($produtos as $produto): ?>
		<tr>
			<td><?= $produto['idProduto']?></td>
			<td><?= $produto['Nome']?></td>
			<td><?= $produto['Valor']; echo",00";?></td>
			<td><?= $produto['Categoria']?></td>
			<td><?= $produto['Vendedor']?></td>
		</tr>
		<?php endforeach; ?>	
</TABLE>