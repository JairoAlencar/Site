
<div class="fileira" name="fileira1">
	<div class="produtos">
	        <h1>Produtos</h1>
	        <div class="border"></div>
	     		   
					 <h1>Arrumar essa parte da categoria</h1>  

<div class="slides owl-carousel">
<?php
if(!empty($produtos)){
?>
	
<?php
	foreach ($produtos as $produto):
?>
		<div class="itens">
			<div class="itens">
	            <div class="info">
	            	<div class="foto"> 
	               		 <img class="foto-p" src="<?= $produto['imagem']?>" alt="">
	              	</div>
	            	<a href="./produto/ver/<?=$produto['idproduto']?>"><p><?= $produto['nomeproduto']?></p></a>
	            </div>
		            <p style="color:black; text-align: center;" style="float: right;">
		              R$ <?= $produto['preco']; echo",00";?>
		            </p>
		            <div style="text-align: center;">
		            	<a type="button" name="Comprar" value="Comprar" href="./carrinho/adicionar/<?=$produto['idproduto']?>">Comprar</a>
	        		</div>
	        </div>
		</div>
		<?php endforeach;?>
	</div>

<?php
}else{
?>
	<h5 class="text-center" style="color:black;">Nenhum produto cadastrado</h5>
<?php
}
?>	
</div>

	<script type="text/javascript">
	  $(".owl-carousel").owlCarousel({
	    margin:5,
	    responsiveClass:true,
	    responsive:{
	      0:{
	        items:1
	      },
	      680:{
	        items:2
	      },
	      960:{
	        items:3
	      }
	    }
	  });
	</script>