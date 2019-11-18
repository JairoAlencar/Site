<h1>Produtos em estoque</h1>

<?php if(!empty($produtos)){?>
	<TABLE class="table">
			<thead>
				<tr>
					<th>Imagem</th>				
					<th>Nome</th>
					<th>Quantidade</th>
					<th>Ver Detalhes</th>
				</tr>
			</thead>

			<?php foreach($produtos as $produto): ?>
			<tr>
				<td><img src="<?= $produto['imagem']?>" style="height: 150px; width: 150px;"></td>
				<td><?= $produto['nomeproduto']?></td>
				<td><?= $produto['quant_estoque']?></td>
				<td> <a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a> </td>
			</tr>
			<?php endforeach; 
				}else{
			?>
				<h5 class="text-center" style="color:black;">Sem produtos em estoque</h5>
			<?php 
				}
			?>	
	</TABLE>