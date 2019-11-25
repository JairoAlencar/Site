<?php
$cnx = conn();

$itens_por_pagina = 10;
$pagina = intval($_GET['cod']);
$execute = $cnx -> query("SELECT * FROM categoria ORDER BY idcategoria LIMIT $pagina, $itens_por_pagina") or die($cnx->error);
$cate = $execute->fetch_assoc();
$num = $execute->num_rows;
$num_total = $cnx->query("select * from categoria") -> num_rows;
$num_paginas = ceil($num_total/$itens_por_pagina);
?>

    <div class="fileira" name="fileira1">
  	<div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                        <div class="col-lg-12">
                            <form class="search-box" action="./categoria/buscar/" method="POST">
                                <input class="search-txt" type="text" name="busca" placeholder="Pesquisa"> 
                                <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
                            </form>    
                        </div>
                        <br><br>
  			<div class="col-lg-12">
                                <h1 style="color: black; font-size: 45px;">Categoria</h1>
                        </div>
                                <?php if ($num <= 0){?>
                                <hr style="border: black solid 1px;">
                                <h3>Nenhuma categoria cadastrada</h3>
                                <hr style="border: black solid 1px;">
                                <?php } ?>
  				<?php if($num > 0){ ?>
				<table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descrição</th>
                                            <th>Ver Detalhes</th>
                                            <th>Deletar Categoria</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
						<?php do{?>
						<tr>
                                                    <?php $idx = $cate['idcategoria']; ?>
                                                    <td><?= $cate['idcategoria']?></td>
                                                    <td><?= $cate['descricao']?></td>
                                                    <td> <a href="./categoria/ver/<?= $cate['idcategoria']?>">Ver</a> </td>
                                                    <td> <a href="./categoria/deletar/<?= $cate['idcategoria']?>">Deletar</a> </td>
                                                    <td> <a href="./categoria/editar/<?= $cate['idcategoria']?>">Editar</a> </td>
                                                </tr>
                                                <?php } while($cliente = $execute->fetch_assoc());   ?>
					</tbody>
				</table>

				<nav>
				  <ul class="pagination">
				    <li>
                                        <?php 
                                        $pagina = intval($_GET['cod']);
                                        if($pagina==0){}
                                        elseif ($pagina>0){?>
                                        <a href="" onclick="window.history.go(-1); return false;" aria-label="Previous">
				        <span aria-hidden="true" style="color:black">&laquo;</span>
                                        <?php } ?>
				      </a>
				    </li>
				    <?php 
				    for($i=0;$i<$num_paginas;$i++){
				    $estilo = "";
				    if($pagina == $i)
				    	$estilo = "class=\"active\"";
				    } ?>
                                       <?php if ($idx>1){
                                           $idx = $idx-1;    
                                       }
                                       else{$idx = $idx;}
                                        echo '<a href="cliente/listarCategoria/?cod='.$idx.'" aria-label="Next">'
                                              ?>
				        <span aria-hidden="true" style="color:black">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
  				<?php } ?>
                </div>
                                <a href="./categoria/categoria">Cadastrar uma nova Categoria</a>
            </div>
  	</div>
    </div>