<h1>Mensagens IFtech</h1>

<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Assunto</th>
				<th>Mensagem</th>
			</tr>
		</thead>

		<?php foreach($mensagem as $msg): ?>
		<tr>
			<td><?= $msg['idContato']?></td>
			<td><?= $msg['Nome']?></td>
			<td><?= $msg['Email']?></td>
			<td><?= $msg['Assunto']?></td>
			<td><?= $msg['Mensagem']?></td>
		</tr>
		<?php endforeach; ?>	
</table>