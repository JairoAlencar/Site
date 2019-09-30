<h1>Carrinho de Compras</h1>

<?php if(!empty($produtos)){
$total = 0; 
?>	
	<TABLE class="table" style="width: 75%; float: left;">
		<thead>
			<tr>
				<th>Produto</th>
				<th>Preço</th>
				<th>Quantidade</th>
				<th>Excluir</th>
			</tr>	
		</thead>

		<?php foreach($produtos as $produto): ?>
			<tr>
				<td> <?= $produto['nomeproduto'] ?> </td>
				<td>R$ <?= $produto['preco'];?> </td>
				<td><?php  
						for ($i = 0; $i < count($_SESSION['carrinho']); $i++) { 
							if ($_SESSION['carrinho'][$i]['id'] == $produto['idproduto']) {
					?>	
						<a href="./carrinho/tirarproduto/<?= $_SESSION['carrinho'][$i]['id']?>">-</a>
							<input min="1" type="int" name="Quantidade Produto" value="<?=$_SESSION['carrinho'][$i]['quantidade']?>">
						<a href="./carrinho/adicionar/<?= $_SESSION ['carrinho'][$i]['id']?>">+</a>
					<?php
							$total = $total + $produto['preco'] * $_SESSION['carrinho'][$i]['quantidade'];		
							}
						}	
					?>		
				</td>
				<td><a href="./carrinho/remover/<?=$produto["idproduto"];?>">Deletar</a></td>
			</tr>
		<?php 


		endforeach;
        $quantidade =  $_SESSION['quantcarrinho'];
        ?> 
        <div>
            <a href="./carrinho/apagartudo"  style="margin-left: 10%;">Apagar pedido</a>
        </div>
        <?php
                }else{
        $total = 0;
        $quantidade = 0;        	
        ?>            
				<h5 class="text-center" style="color: black">Não tem produtos no seu carrinho</h5>
		<?php
                }
		?>	
	</TABLE>
	
<!--arrumar o class para rodar o css do botão e deixar masis organizado essa parte!-->
	<div class="" style="float: right; width: 23%; margin-left: 2%; background: #f1f1f1; color: #3498db; margin-bottom: 3%;">
		<h3 style="color: black">Detalhes do pedido</h3>

		<h6>Subtotal
			<h7>(<?php print $quantidade; ?> produtos)</h7> 
			<h7 style = "margin-left: 3%;">R$</h7><?= $total?> 

		</h6>
		<h6>Frete</h6>

			<div style="border-top: 1.4px solid gray; border-bottom: 1.4px solid gray; margin-bottom:2%;">

				<h5 style="color: black">Total</h5>

				<h6>R$ <?= $total;?></h6>	
				
			</div>

		<input type="submit" name="comprar" value=" Continuar">
		<!--Provavelmente esse botão ira mandar para a forma de pagamento!-->
		<h6 style="float: left; color: black; font-size: 80%;">Possui algum cupom? utilize-o na próxima etapa</h6>
		
	</div>	
            
	<div style="float: left; color: black;">
		<h5>Calculu o frete e prazo</h5>
		<form action="carrinho/frete" method="POST">
				<input type="text" name="frete" placeholder="00000-000">
			<input type="submit" name="vai_frete" value="Calcular">
		</form>
		<?php echo $valor_frete; ?>
	</div>
<br> 
<!--Falta a parte de enviar os produtos para a proxima pagina, tranqilo!-->