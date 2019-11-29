<br>
<h2>Listagem dos Pedidos por Município e Estado</h2>

<table class="table" border="1">
	<thead>
		<tr>
			<th class="th-produto">Data Compra</th>
			<th class="th-produto">Total</th>
			<th class="th-produto">Cidade</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($adm as $pedido): ?>
			<tr>
	            <td class="th-produto"><?=$pedido['datacompra']?></td>
                    <td class="th-produto"><?=$pedido['total']?></td>
                    <td class="th-produto"><?=$pedido['cidade']?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>