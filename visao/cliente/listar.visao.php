<h1>Clientes</h1>

<?php if(!empty($clientes)){ ?>
	<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Senha</th>
				<th>Ver Detalhes</th>
				<th>Deletar Cliente</th>
				<th>Editar</th>
			</tr>
		</thead>

		<?php foreach($clientes as $cliente): ?>
		<tr>
			<td><?= $cliente['idusuario']?></td>
			<td><?= $cliente['nomeusuario']?></td>
			<td><?= $cliente['email']?></td>
			<td><?= $cliente['senha']?></td>
			<td> <a href="./cliente/ver/<?=
			$cliente['idusuario']?>">Ver</a> </td>
			<td> <a href="./cliente/deletar/<?=$cliente['idusuario']?>">Deletar</a> </td>
			<td> <a href="./cliente/editar/<?=$cliente['idusuario']?>">Editar</a> </td>
		</tr>
		<?php endforeach;
			}else{
		?>	
				<h5 class="text-center" style="color: black;">Nenhum cliente cadastrado</h5>
		<?php
			}
		?>		
</TABLE>

<a href="./cliente/cadastro">Cadastrar um novo cliente</a>
</body>
</html>