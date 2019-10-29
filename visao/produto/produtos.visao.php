<?php
    echo '<script>';
    echo 'function myFunction(mensagem) {
  document.getElementById("demo").innerHTML = mensagem;
  var variaveljs = "Eu sou uma variável JavaScript."';
    $variavelphp = "<script>document.write(mensagem)</script>";
    echo '}';
    echo '</script>';
$cnx =new mysqli("localhost", "root", "", "Loja");
$count=0;
$id2 = $variavelphp;
   echo $id2;

// definir o numero de itens por pagina
$itens_por_pagina = 10;
        //$uri_parts = explode('/', $_SERVER['REQUEST_URI'], 4);
        //$pag = $uri_parts[2];
// pegar a pagina atual
if (!isset($idx)){
    $pagina = 0;
}
else{
$pagina = $idx;}

// puxar produtos do banco
$execute = $cnx -> query("SELECT * FROM produtos ORDER BY idproduto LIMIT $pagina, $itens_por_pagina") or die($cnx->error);
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
						<?php do{ $count++;?>
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
                                                        <?php $idx = $produto['idproduto']; ?>                  
						<?php } while($produto = $execute->fetch_assoc()); ?>
					</tbody>        
                                
                             <div class="col-lg-12">
			<nav>
				  <ul class="pagination">
				    <li>
                                        <?php 
                                        if(!isset($idx)){
                                            $pagina = 0;
                                        }
                                        else{
                                        $pagina = intval($idx);}
                                        if($pagina==0){}
                                        elseif ($pagina>0){?>
                                        <a href="" onclick="window.history.go(-1); return false;" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
                                        <?php } ?>
				      </a>
				    </li>
				    <?php 
				    for($i=0;$i<$num_paginas;$i++){
				    $estilo = "";
				    if($pagina == $i)
				    	$estilo = "class=\"active\"";
				    ?>
                                    <!--<li <?php //echo $estilo; ?> ><a href="cliente/teste/?pagina=<?php //echo $i-($idx-$media)?>"><?php //echo $i; ?></a></li>
					<?php } ?>
				    <li>-->
                                    <script>
                                        var mensagem = "<?php echo $idx;?>";
                                    </script>
                                    <?php echo '<a href="" id="demo" aria-label="Next" onclick="myFunction(mensagem);">'; ?>
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