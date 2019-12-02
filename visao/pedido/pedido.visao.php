<br>
<div style="float: left; width: 60%;">

<!--<form action="pedido/addPedido" method="POST">!-->
	<!--O erro do "chama 404 pode ser isso aqui"!-->	

	<div name="produtos">
		<h4><i class="fas fa-cart-plus"></i>Produtos</h4>

		<?php
		if (!empty($produtos)) {
			if(is_array($produtos)){
				foreach($produtos as $produto) {
		?>
					<tr>
						<td><img src="<?= $produto['imagem']?>" style="height: 100px; width: 100px; margin: 0 0 3% 5%;"></td>
						<td> <strong><?= $produto['nomeproduto'] ?></strong> </td>
					</tr>
		<?php
				}
			}
		}else{
		?>
			<h5 style="margin:5% 0 5% 7%; font-size: 110%;"><i class="far fa-meh"></i> Nenhum produto no seu carrinho.</h5>
		<?php
		}	

		?>	
	</div>

	<div name="frete">
		<h4><i class="fas fa-home"></i> Endereço de entrega</h4>	

		<form action="carrinho/frete" method="POST" class="box" style="padding: 0 0 0 0;">

		<?php
			if(is_array($endereco)){
				foreach($endereco as $ende){
                    if ($_SESSION["acesso"]["idusuario"] == $ende['idusuario']){
		?>
						<input type="radio" name="frete" style="margin:3% 0 0 2%;" value="<?= $ende['cep']?>"> <?php echo "Rua: ", $ende['logradouro'], ". Número: ", $ende['numero'], ". Complemento: ", $ende['complemento'], ". Bairro: ", $ende['bairro'], ". CEP: ", $ende['cep'], ". Cidade: ", $ende['cidade'], ".";?><br>
		<?php
                    }else{ echo "É necessario ter um endereço cadastrado"; }
				}
                        }else{}
		?>
		<br>
		
		<!--pegar o id do endereço do value pra pegar o cep no banco, chamar isso pela função PEGARENDERECOPORID ai dentro desse array pegar o cep para que possa ser calculado o frete(resumindo: nn entende muito bem)!-->

		<h4><i class="fas fa-truck"></i>Frete</h4>

				<input type="radio" name="tipo_do_frete" value="41106" checked="checked" style="margin:3% 0 3% 2%;">Pac
				<input type="radio" name="tipo_do_frete" value="40010" style="margin:3% 0 3% 2%;">Sedex
					<br>
			<input type="submit" name="vai_frete" value="Calcular">
		</form>
	</div>

	<div name="form pag">
		<h4><i class="fab fa-amazon-pay"></i> Forma de pagamento</h4>

			<?php 
				if(is_array($FormaPagamento)){
					foreach($FormaPagamento as $pag){
			?>
						<input type="radio" name="forma" value="pagamento" style="margin:3% 0 3% 2%;"><?=$pag['descricao']?>  
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
				<h7> R$ <?php 
                      		if (isset($_SESSION['desconto'])){
                                 echo($_SESSION['desconto']);
                                }else{
                                    echo "0";
                                }
                        ?>
                %</h7>
		</h6>
		<h6>Valor Frete:
				<h7> R$ <?php 
                      		if (isset($_SESSION['valor_frete'])){
                                    echo ($_SESSION['valor_frete']);
                                }else{
                                    echo "0,00";
                                }
                        ?>
                </h7>	
		</h6>	

		<h6>Prazo frete:
			<h7><?php 
					if(isset($_SESSION['prazo_frete'])){
						echo $_SESSION['prazo_frete'];
					}
				?>
				dias
			</h7>
		</h6>

		<div style="border-top: 1.4px solid; border-bottom: 1.4px solid;">
			<h6 style="margin-top: 4%;">Valor Total:
				<?php
					if (isset($_SESSION['valor_frete'])) {
				?>
						<h7>R$ <?=$valor+$_SESSION['valor_frete']?></h7>
				<?php		
					}else{
						$_SESSION['valor_frete']=0;						
				?>
						<h7>R$ <?=$valor+$_SESSION['valor_frete']?></h7>
				<?php
					}
				?>		
			</h6>
		</div>
		
		<div style="margin-top: 1.4px solid; border-bottom: 1.4px solid;">
			<h6 style="margin-top: 4%;">Valor com desconto:
				<?php
					if (isset($_SESSION['desconto'])) {
				?>
						<h7>R$ <?= $valor - ($valor * $_SESSION['desconto']/100)?> </h7>
				<?php		
					}else{
						$_SESSION['desconto']=0;						
				?>
						<h7>R$ <?= $desc = $valor - ($valor * $_SESSION['desconto']/100)?> </h7>
				<?php
					}
				?>
			</h6>
		</div>

		<div style="clear: left;" class="box">
			<input type="submit" name="efetuar" value="Finalizar pedido">
		</div>
<!-- </form> !-->		
</div>