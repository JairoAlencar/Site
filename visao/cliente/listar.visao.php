<h1>Clientes IFtech</h1>

<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
			</tr>
		</thead>

		<?php foreach($clientes as $cliente): ?>
		<tr>
			<td><?= $cliente['idCliente']?></td>
			<td><?= $cliente['Nome']?></td>
			<td><?= $cliente['email']?></td>
		</tr>
		<?php endforeach; ?>	
</TABLE>

