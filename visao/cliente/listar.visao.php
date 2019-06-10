<h1>Clientes IFtech</h1>

<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Senha</th>
				<th>Ver Detalhes</th>
				<th>Deletar Cliente</th>
			</tr>
		</thead>

		<?php foreach($clientes as $cliente): ?>
		<tr>
			<td><?= $cliente['idCliente']?></td>
			<td><?= $cliente['Nome']?></td>
			<td><?= $cliente['email']?></td>
			<td><?= $cliente['Senha']?></td>
			<td> <a href="./cliente/ver/<?=$cliente['idCliente']?>">Ver</a> </td>
			<td> <a href="./cliente/deletar/<?=$cliente['idCliente']?>">Deletar</a> </td>
		</tr>
		<?php endforeach; ?>	
</TABLE>

<a href="./cliente/cadastro">Cadastrar um novo cliente</a>

