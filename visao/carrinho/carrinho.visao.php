<h1>Carrinho de Compras</h1>

<?php if(!empty($produtos)){
$total = 0;
?>	
	<TABLE class="table" style="width: 75%; float: left;">
		<thead>
			<tr><th></th>
				<th>Produto</th>
				<th>Preço</th>
				<th>Quantidade</th>
				<th>Excluir</th>
			</tr>	
		</thead>

		<?php foreach($produtos as $produto): ?>
			<tr>
				<td><img src="<?= $produto['imagem']?>" style="height: 150px; width: 150px;"></td>
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
                }else{
        $total = 0;
        $quantidade = 0;    	
        ?>            
				<h5 class="text-center" style="color: black">Nenhum produto no seu carrinho</h5>
		<?php
                }
		?>	
	</TABLE>
	
<!--arrumar o class para rodar o css do botão e deixar masis organizado essa parte!-->
	<div class="" style="float: right; width: 23%; margin-left: 2%; margin-bottom: 3%;">
		<h3 style="color: black">Detalhes do pedido</h3>

		<h6>Quantidade:
			<h7><?php print $quantidade; ?> produtos</h7>
		</h6>

		<h6> Valor produtos:	 
			<h7 style = "margin-left: 3%;">R$ <?= $total?></h7> 
		</h6>

		<h6>Frete:
				<h7> R$ <?php print $valor_frete;?></h7>	
		</h6>

		<h6>Prazo entrega:
			<h7><?php
					if($prazo_frete==1){
						print $prazo_frete;
				?>
					Dia
				<?php			
					}else{
						print $prazo_frete;
				?>
					Dias
				<?php		
					}
				 
				?></h7>
		</h6>
			<div style="border-top: 1.4px solid gray; border-bottom: 1.4px solid gray; margin-bottom:2%;">

				<h5 style="color: black">Total</h5>

				<h6>R$ <?= $total+$valor_frete;?></h6>	
				
			</div>

		<div class="box">
			<a type="submit" href="./carrinho/pedido" style="height: 0px; width: 0px; margin-top: -25%; text-decoration: none;"><input type="submit" name="comprar" value=" Continuar" style="padding: 10px 10px 10px 10px"></a>
		</div>	
		<!--Provavelmente esse botão ira mandar para a forma de pagamento!-->
		<h6 style="float: left; color: black; font-size: 80%;">Possui algum cupom? utilize-o na próxima etapa</h6>
		
	</div>	
            
	<div style="float: left; color: black;">
		<h5>Calculu o frete e prazo</h5>
		<form action="carrinho/index" method="POST" class="box">
				<input type="text" name="frete" placeholder="00000000" style="margin-top: -10%;">	
					<br>
				<input type="radio" name="tipo_do_frete" value="41106" checked="checked">Pac
				<input type="radio" name="tipo_do_frete" value="40010">Sedex
					<br>
			<input type="submit" name="vai_frete" value="Calcular">
		</form>
	</div>
<br> 

<?php
if(!empty($produtos)){
?>        
        <div>
            <a href="./carrinho/apagartudo"  style="margin-left: 10%;">Apagar pedido</a>
        </div> 
        
<?php
}
?> 
<!--Falta a parte de enviar os produtos para a proxima pagina, tranqilo!-->