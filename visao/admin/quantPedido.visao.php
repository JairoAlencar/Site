<br><h2>Lista de Produtos e Estoque</h2>

<table class="table" style="margin-top: -8%; margin-bottom: 3%;">
	<thead>
		<tr>
			<th> Produto</th>
			<th>Estoque</th>
		</tr>
	</thead>
		<?php foreach ($adm as $produto): ?>
			<tr>
                            <td><?=$produto['nomeproduto']?></td><br>
				<td><?=$produto['quant_estoque']?></td>
			</tr>
		<?php endforeach; ?>
</table>