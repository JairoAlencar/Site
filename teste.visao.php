<?php
$cnx =new mysqli("localhost", "root", "", "Loja");
$count=0;

// definir o numero de itens por pagina
$itens_por_pagina = 10;

// pegar a pagina atual
$pagina = intval($_GET['cod']);

// puxar produtos do banco
$execute = $cnx -> query("SELECT * FROM usuario ORDER BY idusuario LIMIT $pagina, $itens_por_pagina") or die($cnx->error);
$cliente = $execute->fetch_assoc();
$num = $execute->num_rows;

// pega a quantidade total de objetos no banco de dados
$num_total = $cnx->query("select * from usuario") -> num_rows;

// definir numero de páginas
$num_paginas = ceil($num_total/$itens_por_pagina);
?>

  	<div class="container-fluid">
  				<h1>Produtos</h1>
  				<?php if($num > 0){ ?>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>    
				<td>ID</td>
				<td>Nome</td>
				<td>Email</td>
				<td>Senha</td>
				<td>Tipo</td>
				<td>Ver Detalhes</td>
				<td>Deletar Cliente</td>
				<td>Editar</td>
						</tr>
					</thead>
					<tbody>
						<?php do{$count++;?>
						<tr>
			<td><?= $cliente['idusuario']?></td>
			<td><?= $cliente['nomeusuario']?></td>
			<td><?= $cliente['email']?></td>
			<td><?= $cliente['senha']?></td>
			<td><?= $cliente['tipousuario']?></td>
			<td> <a href="./cliente/ver/<?=
			$cliente['idusuario']?>">Ver</a> </td>
			<td> <a href="./cliente/deletar/<?=$cliente['idusuario']?>">Deletar</a> </td>
                        			<?php
                        require_once ("app.php");

//                        $id = $_SESSION['acesso']['idusuario'];
                        $id = $cliente['idusuario'];
                        $id2 = $_SESSION['acesso']['tipousuario'];
                        echo "<td> <a href='./cliente/editar/$id/?tipocadastro=$id2'>Editar</a> </td>";
                        ?>
                                                        <?php $idx = $cliente['idusuario'];    
                                                              //if($count<=1){
                                                                  //$idx2=$idx;}else{}
                                                        ?>
						</tr>
                                                <?php } while($cliente = $execute->fetch_assoc());  ?>
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
                                      <a href="cliente/teste/?cod=<?php if ($idx>1){echo ($idx-1);} else{$idx;}?>" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
  				<?php } ?>
                                <a href="./cliente/cadastro/?tipocadastro=user">Cadastrar um novo cliente</a>
  	</div>

