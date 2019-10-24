<?php
//SÓ PRECISA VER COMO PASSAR O NUMERO DA PAGINA PARA A VARIAVEL $PAGINA...
//OBS: A PAGINA INICIAL =0
$cnx =new mysqli("localhost", "root", "", "Loja");
// definir o numero de itens por pagina
$itens_por_pagina = 1;
$pagina = intval($_GET['pagina']);
// pegar a pagina atual
//$pagina = intval($_GET['pagina']);

// puxar produtos do banco
$execute = $cnx -> query("SELECT * FROM produtos LIMIT $pagina, $itens_por_pagina") or die($cnx->error);
$produto = $execute->fetch_assoc();
$num = $execute->num_rows;

// pega a quantidade total de objetos no banco de dados
$num_total = $cnx->query("select * from produtos") -> num_rows;

// definir numero de páginas
$num_paginas = ceil($num_total/$itens_por_pagina);
?>
<div class="fileira" name="fileira1">
  	<div class="container-fluid">
            <div class="col-lg-12"> 
  		<div class="row">
  			<div class="col-lg-12">
                            <h1>Produtos</h1>
                        </div>
  				<?php if($num > 0){ ?>
					<tbody>
						<?php do{ ?>
                <div class="col-lg-4">                           
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
                </div>
                                         
						<?php } while($produto = $execute->fetch_assoc()); ?>
					</tbody>        
                                
                             <div class="col-lg-12">
				<nav>
				  <ul class="pagination">
				    <li>
				      <a href="./?pagina=0" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
                                    
				    <?php 
				    for($i=0;$i<$num_paginas;$i++){
				    $estilo = "";
				    if($pagina == $i)
				    	$estilo = "class=\"active\"";
				    ?>
				    <li <?php echo $estilo; ?> ><a href="./<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
					<?php } ?>
				    <li>
				      <a href="./<?php echo $num_paginas-1; ?>" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
  				<?php } ?>
                </div>
  			</div>
  		</div>
        </div>
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