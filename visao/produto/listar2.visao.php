<?php
$cnx = conn();

$itens_por_pagina = 10;
$pagina = intval($_GET['cod']);
$execute = $cnx -> query("SELECT * FROM produtos ORDER BY idproduto LIMIT $pagina, $itens_por_pagina") or die($cnx->error);
$produto = $execute->fetch_assoc();
$num = $execute->num_rows;
$num_total = $cnx->query("select * from produtos") -> num_rows;
$num_paginas = ceil($num_total/$itens_por_pagina);
?>

    <div class="fileira" name="fileira1">
  	<div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                        <div class="col-lg-12">
                            <form class="search-box" action="./produto/buscar/" method="POST">
                                <input class="search-txt" type="text" name="busca" placeholder="Pesquisa"> 
                                <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
                            </form>    
                        </div>
                        <br><br>
  			<div class="col-lg-12">
                                <h1 style="color: black; font-size: 45px;">Produtos</h1>
                        </div>
                                <?php if ($num <= 0){?>
                                <hr style="border: black solid 1px;">
                                <h3>Nenhum produto cadastrado</h3>
                                <hr style="border: black solid 1px;">
                                <?php } ?>
  				<?php if($num > 0){ ?>
				<table class="table">
                                    <thead>
                                        <tr>
                                            <th>Imagem</th>
                                            <th>ID</th>
                                            <th>Categoria</th>					
                                            <th>Nome</th>
                                            <th>Valor</th>
                                            <th>Ver Detalhes</th>
                                            <th>Comprar</th>
                                            <th>Deltar Produto</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
						<?php do{?>
						<tr>
                                                    <?php $idx = $produto['idproduto']; ?>
                                                    <td><img src="<?= $produto['imagem']?>" style="height: 150px; width: 150px;"></td>
                                                    <td><?= $produto['idproduto']?></td>
                                                    <td><?= $produto['descricao']?></td>
                                                    <td><?= $produto['nomeproduto']?></td>
                                                    <td><?= $produto['preco']; echo",00";?></td>
                                                    <td> <a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a> </td>
                                                    <td> <a href="./carrinho/adicionar/<?=$produto['idproduto']?>">Comprar</a> </td>
                                                    <td> <a href="./produto/deletar/<?=$produto['idproduto']?>">Deletar</a> </td>
                                                    <td> <a href="./produto/editar/<?=$produto['idproduto']?>">Editar</a> </td>
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
                                        echo '<a href="produto/listarprodutos/?cod='.$idx.'" aria-label="Next">'
                                              ?>
				        <span aria-hidden="true" style="color:black">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
  				<?php } ?>
                </div>
                                <a href="./produto/adicionar/">Cadastrar um novo produto</a>
            </div>
  	</div>
    </div>