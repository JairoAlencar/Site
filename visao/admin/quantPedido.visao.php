<br><h2>Listaa de Produtos e Estoque</h2>
<table class="table" border="1">
	<thead>
		<tr>
			<th class="th-produto"> Produto</th>
			<th class="th-produto">Estoque</th>
		</tr>
	</thead>
		<?php foreach ($adm as $produto): ?>
			<tr>
                            <td class="th-produto"><?=$produto['nomeproduto']?></td><br>
				<td class="th-produto"><?=$produto['quant_estoque']?></td>
			</tr>
		<?php endforeach; ?>
</table>