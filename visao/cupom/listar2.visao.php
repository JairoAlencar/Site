<?php
$cnx = conn();

$itens_por_pagina = 10;
$pagina = intval($_GET['cod']);
$execute = $cnx -> query("SELECT * FROM cupom ORDER BY idcupom LIMIT $pagina, $itens_por_pagina") or die($cnx->error);
$cupom = $execute->fetch_assoc();
$num = $execute->num_rows;
$num_total = $cnx->query("select * from cupom") -> num_rows;
$num_paginas = ceil($num_total/$itens_por_pagina);
?>

    <div class="fileira" name="fileira1">
  	<div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                        <div class="col-lg-12">
                            <center>
                                <form action="./cupom/buscar/" method="POST">
                                    <input type="text" name="busca" placeholder="Pesquisa"> 
                                    <i class="fas fa-search"></i>
                                </form>
                            </center>   
                        </div>
                        <br><br>
  			<div class="col-lg-12">
                                <h1 style="color: black; font-size: 45px;">cupons</h1>
                        </div>
                                <?php if ($num <= 0){?>
                                <hr style="border: black solid 1px;">
                                <h3>Nenhum cupom cadastrado</h3>
                                <hr style="border: black solid 1px;">
                                <?php } ?>
  				<?php if($num > 0){ ?>
				<table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Desconto</th>
                                            <th>Ver Detalhes</th>
                                            <th>Deletar Cupom</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
						<?php do{?>
						<tr>
                                                    <?php $idx = $cupom['idcupom']; ?>
                                                    <td><?= $cupom['idcupom']?></td>
                                                    <td><?=$cupom['nomecupom']?> </td>
                                                    <td><?= $cupom['desconto']?>%</td>
                                                    <td> <a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a> </td>
                                                    <td> <a href="./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</a> </td>
                                                    <td> <a href="./cupom/editar/<?=$cupom['idcupom']?>">Editar</a> </td>
                                                </tr>
                                                <?php } while($cupom = $execute->fetch_assoc());   ?>
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
                                        echo '<a href="cupom/listarcupom/?cod='.$idx.'" aria-label="Next">'
                                              ?>
				        <span aria-hidden="true" style="color:black">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
  				<?php } ?>
                </div>
                                <a href="./cupom/cupom/">Cadastrar um novo cupom</a>
            </div>
  	</div>
    </div>