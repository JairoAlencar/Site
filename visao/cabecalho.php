<div id="topo"> 
        <div id="logo" class="col-4"> 
          <a href="//localhost/site" id="logo"> 
            <img src="./publico/imagens/logo.PNG" value="IFTech"> 
          </a>  
        </div>  

        <div>
           <form class="search-box" action="produto/buscar" method="POST">
             <input class="search-txt" type="text" name="busca" placeholder="Pesquisa"> 
             <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
           </form>    
        </div>  

    <?php
        include_once 'app.php';
        
        if (empty($_SESSION['acesso']['tipousuario'])){
        ?>  
            <a class="icons-user" href="./login"><i class="fas fa-user" style="margin-top: 80%; font-size: 180%; margin-bottom: 100%;"></i></a>

        <?php    
        }
        elseif ($_SESSION['acesso']['tipousuario']=="Adm"){
        ?>  
          <div class="icons-btn"> 
            <a class="icons-user" href="./cliente/listarCliente"><i class="fas fa-user" style="font-size: 180%;"></i></a>
            <a class="icons-car" href="./produto/listarProdutos"><i class="fas fa-mobile-alt" style="font-size: 180%;"></i></a> 
            <a class="icons-box" href="./categoria/listarCategoria"><i class="fas fa-archive" style="font-size: 180%;"></i></a>
            <a class="icons-cupom" href="./cupom/listarCupom"><i class="far fa-clipboard" style="font-size: 180%;"></i></a>
            <a class="icons-pay" href="./FormaPagamento/listarFormaPagamento"><i class="fab fa-cc-amazon-pay" style="font-size: 180%;"></i></a>
            <a class="icons-user" href="./login/logout"><i class="fas fa-sign-out-alt" style="font-size: 180%;"></i></a>
          </div>
        <?php  
        }
        
        elseif ($_SESSION['acesso']['tipousuario']=="User"){
            $idusuario = $_SESSION['acesso']['idusuario'];
        ?>    
            <a class="icons-user" href="./cliente/ver/'.$idusuario.'"><i class="fas fa-user" style="margin-top: 80%; font-size: 180%; margin-bottom: 100%; margin-left: 650%;"></i></a>
            <a class="icons-user" href="./login/logout"><i class="fas fa-sign-out-alt" style="margin-top: 80%; font-size: 180%; margin-bottom: 100%;"></i></a>
      <?php      
        }
      ?>
</div>