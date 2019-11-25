<?php
$cnx = conn();

$itens_por_pagina = 10;
$pagina = intval($_GET['cod']);
$execute = $cnx -> query("SELECT * FROM usuario ORDER BY idusuario LIMIT $pagina, $itens_por_pagina") or die($cnx->error);
$cliente = $execute->fetch_assoc();
$num = $execute->num_rows;
$num_total = $cnx->query("select * from usuario") -> num_rows;
$num_paginas = ceil($num_total/$itens_por_pagina);
?>

    <div class="fileira" name="fileira1">
  	<div class="container-fluid">
            <div class="col-lg-12">
                <div class="row">
                        <div class="col-lg-12">
                            <form class="search-box" action="./cliente/buscar/" method="POST">
                                <input class="search-txt" type="text" name="busca" placeholder="Pesquisa"> 
                                <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
                            </form>    
                        </div>
                        <br><br>
  			<div class="col-lg-12">
                                <h1 style="color: black; font-size: 45px;">Clientes/admins</h1>
                        </div>
                                <?php if ($num <= 0){?>
                                <hr style="border: black solid 1px;">
                                <h3>Nenhum Cliente cadastrado</h3>
                                <hr style="border: black solid 1px;">
                                <?php } ?>
  				<?php if($num > 0){ ?>
				<table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Senha</th>
                                            <th>Tipo</th>
                                            <th>Ver Detalhes</th>
                                            <th>Deletar Cliente</th>
                                            <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
						<?php do{?>
						<tr>
                                                    <?php $idx = $cliente['idusuario']; ?>
                                                    <td><?= $cliente['idusuario']?></td>
                                                    <td><?= $cliente['nomeusuario']?></td>
                                                    <td><?= $cliente['email']?></td>
                                                    <td><?= $cliente['senha']?></td>
                                                    <td><?= $cliente['tipousuario']?></td>
                                                    <td> <a href="./cliente/ver/<?= $cliente['idusuario']?>">Ver</a> </td>
                                                    <td> <a href="./cliente/deletar/<?=$cliente['idusuario']?>">Deletar</a> </td>
                                                    <?php
                                                    require_once ("app.php");
                                                        $id = $cliente['idusuario'];
                                                        $id2 = $_SESSION['acesso']['tipousuario'];
                                                        echo "<td> <a href='./cliente/editar/$id/?tipocadastro=$id2'>Editar</a> </td>";
                                                    ?>
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
                                        echo '<a href="cliente/listarcliente/?cod='.$idx.'" aria-label="Next">'
                                              ?>
				        <span aria-hidden="true" style="color:black">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
  				<?php } ?>
                </div>
                                <a href="./cliente/cadastro/">Cadastrar um novo cliente</a>
            </div>
  	</div>
    </div>