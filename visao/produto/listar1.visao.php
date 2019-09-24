<h2>Detalhes do produto</h2>

<style type="text/css">
	
</style>

    <img src="<?=$produto['imagem']?>" style="height: 400px; width: 400px; margin-bottom: 3%;">

    <div align="center" style="float: right; border: solid; border-color:black; margin-bottom: 2%; width: 60%; border-width:0.5px;">
    	<br>
    	<h2 style="color: #00b5cc;"><?= $produto['nomeproduto']?></h2>  
    	<h5 style="color:black;">Valor:  R$ <spam style="color:gray;"><?= $produto['preco']?></spam></h5>
    	<h5 style="color:black;">Quantidade em estoque: <spam style="color:gray;"><?= $produto['quant_estoque']?></spam></h5>
    	<h5 style="color:black;">Categoria: <spam style="color:gray;"></spam></h5>
    	<br>
    	<div align="center">
    		<h5><a href="./carrinho/adicionar/<?=$produto['idproduto']?>">Adicionar ao carrinho</a></h5>
    		<h5><a href="./produto/listarProdutos">Voltar</a></h5>
    	</div>
    	
    </div>

	<div style="width: 100%; float: right; margin-bottom: 3%;">
		<nav class="navbar bg-dark navbar-dark">
        	<a class="navbar-brand" href="#">Descrição ></a>
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2">
          			<span class="navbar-toggler-icon"></span>
       			 </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar2">
          <ul class="navbar-nav">
            <li class="nav-item">
              <p style="color: white;"><?= $produto['descricao']?></p>
            </li>  
          </ul>
        </div>  
      </nav>
	</div>    