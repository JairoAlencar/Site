<h1>Cupom</h1>

<?php if(!empty($cupom)){?>
	<TABLE class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
                    <th>Desconto</th>
					<th>Ver Detalhes</th>
					<th>Deletar Cupom</th>
					<th>Editar</th>
				</tr>
			</thead>

			<?php foreach($cupom as $cupom): ?>
			<tr>
				<td><?= $cupom['idcupom']?></td>
               	<td><?=$cupom['nomecupom']?> </td>
                <td><?= $cupom['desconto']?>%</td>
				<td> <a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a> </td>
				<td> <a href="./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</a> </td>
				<td> <a href="./cupom/editar/<?=$cupom['idcupom']?>">Editar</a> </td>
			</tr>
			<?php endforeach; 
				}else{
			?>	
					<h5 class="text-center" style="color: black">Nenhum cupom adicionado</h5>
			<?php
				}
			?>		
	</TABLE>

	<a href="./cupom/cupom">Adicionar um novo Cupom</a>