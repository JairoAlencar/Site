
<div class="fileira" name="fileira1">
	<div class="produtos">
	        <h1>Produtos</h1>
	        <div class="border"></div>

	     		    <h1>Nome categoria</h1>  

<?php
if(!empty($produtos)){
	foreach ($produtos as $produto):
?>
	<div class="slides owl-carousel">
		<div class="itens">
			<div class="itens">
	            <div class="info">
	            	<div class="foto"> 
	               		 <img class="foto-p" src="<?= $produto['imagem']?>" alt="">
	              	</div>
	            	<a href="./produto/ver/<?=$produto['idproduto']?>"><span><?= $produto['nomeproduto']?></span></a>
	            </div>
		            <!--<p style="color:black;">
		              R$ <?= $produto['preco']; echo",00";?>
		            </p>!-->
	        </div>
		</div>
	</div>

<?php
endforeach;
}else{
?>
	<h5 class="text-center" style="color:black;">Nenhum produto cadastrado</h5>
<?php
}
?>	
<!--	    <div class="slides owl-carousel">

	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Asus Zenfone 5Z</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/5z.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 2.699,00
		            </p>
	        </div>

			<div class="itens">
	            <div class="info">
	            	<a href="#"><span>Asus Zenfone 4 Selfie</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/z4.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 1.034,00
		            </p>
	        </div>

	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Asus Zenfone Mas Plus</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/Max.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 849,00
		            </p>
	        </div>	        

	    </div>
	</div>
</div>

<div class="fileira" name="fileira2" >
	<div class="produtos">

		<h1>Samsung</h1>
	    <div class="slides owl-carousel">	
	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Samsung Galaxy s9+</span></a>	
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/s9+.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 3.239,00
		            </p>
	        </div>

	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Samsung Galaxy j6+</span></a>	
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/j6+.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 809,10
		            </p>
	        </div>


	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Samsung Galaxy A8</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/a8.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 1.799,00
		            </p>
	        </div>
	    </div>
	</div>
</div>

<div class="fileira" name="fileira3" >
	<div class="produtos">

		<h1>Apple</h1>
        <div class="slides owl-carousel">
	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Iphone 8 Plus Prata</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/8plus.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 4.139,00
		            </p>
	        </div>

	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Iphone 7</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/Iphone7.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 2.339,00
		            </p>
	        </div>

	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Iphone XS Max</span></a>	
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/xsm.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 9.999,90
		            </p>
	        </div>	        
	    </div>
	</div>
</div>

<div class="fileira" name="fileira4" >
	<div class="produtos">

		<h1>Motorola</h1>
	    <div class="slides owl-carousel">
	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Moto G6 Plus</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/motog6plus.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 1.439,10
		            </p>
	        </div>

			<div class="itens">
	            <div class="info">
	            	<a href="#"><span>Moto Z2 Force</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/motoz2force.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 1.279,00
		            </p>
	        </div>


	        <div class="itens">
	            <div class="info">
	            	<a href="#"><span>Moto One</span></a>
	             	<div class="foto"> 
	               		 <img class="foto-p" src="imagens/motoone.png" alt="">
	              	</div>
	            </div>
		            <p>
		              R$ 1.424,00
		            </p>
	        </div>
	    </div>
	</div>
</div>!-->

	<script type="text/javascript">
	  $(".owl-carousel").owlCarousel({
	    margin:10,
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