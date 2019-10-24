<?php
$cnx =new mysqli("localhost", "root", "", "Loja");

// definir o numero de itens por pagina
$itens_por_pagina = 2;

// pegar a pagina atual
$pagina = intval($_GET['pagina']);

// puxar produtos do banco
$execute = $cnx -> query("SELECT * FROM produtos LIMIT $pagina, $itens_por_pagina") or die($cnx->error);
$produto = $execute->fetch_assoc();
$num = $execute->num_rows;

// pega a quantidade total de objetos no banco de dados
$num_total = $cnx->query("select * from produtos") -> num_rows;

// definir numero de páginas
$num_paginas = ceil($num_total/$itens_por_pagina);
?>

  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-lg-4">
  				<h1>Produtos</h1>
  				<?php if($num > 0){ ?>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
                                                        <td>ID</td>
							<td>Nome</td>
						</tr>
					</thead>
					<tbody>
						<?php do{ ?>
						<tr>
                                                        <td><?php echo $produto['idproduto']; ?></td>
							<td><?php echo $produto['nomeproduto']; ?></td>
						</tr>
						<?php } while($produto = $execute->fetch_assoc()); ?>
					</tbody>
				</table>

				<nav>
				  <ul class="pagination">
				    <li>
				      <a href="cliente/teste/?pagina=0" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <?php 
				    for($i=0;$i<$num_paginas;$i++){
				    $estilo = "";
				    if($pagina == $i)
				    	$estilo = "class=\"active\"";
				    ?>
				    <li <?php echo $estilo; ?> ><a href="cliente/teste/?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
					<?php } ?>
				    <li>
				      <a href="cliente/teste/?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
  				<?php } ?>
  			</div>
  		</div>
  	</div>
