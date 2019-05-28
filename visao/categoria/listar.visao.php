<h2>Categoria</h2>

<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Categoria</th>
			</tr>
		</thead>

		<?php foreach($Categoria as $cat): ?>
		<tr>
			<td><?= $cat['idCategoria']?></td>
			<td><?= $cat['Nome']?></td>
		</tr>
		<?php endforeach; ?>	
</TABLE>