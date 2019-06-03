<h1>Clientes IFtech</h1>

<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Senha</th>
				<th>Ver Detalhes</th>
			</tr>
		</thead>

		<?php foreach($clientes as $cliente): ?>
		<tr>
			<td><?= $cliente['idCliente']?></td>
			<td><?= $cliente['Nome']?></td>
			<td><?= $cliente['email']?></td>
			<td><?= $cliente['Senha']?></td>
			<td> <a href="./cliente/ver/<?=$cliente['idCliente']?>">Ver</a> </td>
		</tr>
		<?php endforeach; ?>	
</TABLE>

