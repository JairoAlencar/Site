<br>
<div style="float: left; width: 60%;">
	<div name="end entreg">
		<h4><i class="fas fa-home"></i> Endereço de entrega</h4>	

	</div>

	<div name="frete">
		<h4><i class="fas fa-truck"></i> Prazo frete</h4>	

	</div>

	<div name="form pag">
		<h4><i class="fab fa-amazon-pay"></i> Forma de pagamento</h4>

			<?php 
				if(is_array($FormaPagamento)){
					foreach($FormaPagamento as $pag){
			?>
						<input type="radio" name="forma" value="<?=$pag['descricao']?>">
			<?php
					}
				} 	
			?>

	</div>

	<div name="cupom">
		<h4><i class="fas fa-percent"></i> Cupom</h4>

			<form action="carrinho/buscar_cupom/<?=$total?>" method="POST" class="box" style="padding: 0px 0px 0px 0px;">
				<input type="text" name="nome_cupom" placeholder="Infome um cupom valido">
					<br>
				<input type="submit" name="vai_cupom" value="Aplicar">	
			</form>
	</div>
</div>

<div class="resumo_fim" style="float: right;">
	<h4><i class="fas fa-box-open"></i> Resumo</h4>
		<h6>Valor produtos:
			<h7>R$ <?=$total?></h7>	
		</h6>
		<h6>Desconto do cupom:
			<h7> <?=$desconto?>%</h7>
		</h6>
		<h6>Frete:
			<h7>valor frete</h7>
		</h6>	
		<h5 style="border-top: 1.4px solid; border-bottom: 1.4px solid;">Valor à pagar:
			<h7>R$ <?=$valor?></h7>
		</h5>

</div>


<div style="clear: left;" class="box">
	<button><i class="fas fa-box"></i> Finalizar pedido</button>
</div>
