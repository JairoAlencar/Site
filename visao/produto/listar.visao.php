<h1>Produtos IFtech</h1>

<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Valor</th>
				<th>Vendedor</th>
				<th>Ver Detalhes</th>
				<th>Deltar Produto</th>
			</tr>
		</thead>

		<?php foreach($produtos as $produto): ?>
		<tr>
			<td><?= $produto['idProduto']?></td>
			<td><?= $produto['Nome']?></td>
			<td><?= $produto['Valor']; echo",00";?></td>
			<td><?= $produto['Vendedor']?></td>
			<td> <a href="./produto/ver/<?=$produto['idProduto']?>">Ver</a> </td>
			<td> <a href="./produto/ver/<?=$produto['idProduto']?>">Deletar</a> </td>
		</tr>
		<?php endforeach; ?>	
</TABLE>