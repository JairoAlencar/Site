<h1>Forma de Pagamento</h1>

<?php if(!empty($FormaPagamento)){?>
	<TABLE class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descrição</th>
					<th>Ver Detalhes</th>
					<th>Deletar Pagamento</th>
					<th>Editar</th>
				</tr>
			</thead>

			<?php foreach($FormaPagamento as $pag): ?>
			<tr>
				<td><?= $pag['idFormaPagamento']?></td>
				<td><?= $pag['descricao']?></td>
				<td> <a href="./FormaPagamento/ver/<?=
			$pag['idFormaPagamento']?>">Ver</a> </td>
				<td> <a href="./FormaPagamento/deletar/<?=
			$pag['idFormaPagamento']?>">Deletar</a> </td>
				<td> <a href="./FormaPagamento/editar/<?=$pag['idFormaPagamento']?>">Editar</a> </td>
			</tr>
			<?php endforeach; 
				}else{
			?>	
					<h5 class="text-center" style="color: black">Nenhuma forma de pagamento adicionada</h5>
			<?php
				}
			?>		
	</TABLE>

	<a href="./FormaPagamento/FormaPagamento">Adicionar uma nova forma de pagamento</a>