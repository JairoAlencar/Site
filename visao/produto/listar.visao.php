<h1>Produtos</h1>

<?php if(!empty($produtos)){?>
	<TABLE class="table">
			<thead>
				<tr>
					<th>Imagem</th>
					<th>ID</th>
					<th>Categoria</th>					
					<th>Nome</th>
					<th>Valor</th>
					<th>Ver Detalhes</th>
					<th>Comprar</th>
					<th>Deltar Produto</th>
					<th>Editar</th>
				</tr>
			</thead>

			<?php foreach($produtos as $produto): ?>
			<tr>
				<td><img src="<?= $produto['imagem']?>" style="height: 150px; width: 150px;"></td>
				<td><?= $produto['idproduto']?></td>
				<td></td>
				<td><?= $produto['nomeproduto']?></td>
				<td><?= $produto['preco']; echo",00";?></td>
				<td> <a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a> </td>
				<td> <a href="./carrinho/adicionar/<?=$produto['idproduto']?>">Comprar</a> </td>
				<td> <a href="./produto/deletar/<?=$produto['idproduto']?>">Deletar</a> </td>
				<td> <a href="./produto/editar/<?=$produto['idproduto']?>">Editar</a> </td>
			</tr>
			<?php endforeach; 
				}else{
			?>
				<h5 class="text-center" style="color:black;">Nenhum produto cadastrado</h5>
			<?php 
				}
			?>	
	</TABLE>	

	<a href="./produto/Adicionar">Cadastrar um novo produto</a>