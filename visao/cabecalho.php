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
            echo '<a class="icons-user" href="./login"><i class="fas fa-user"></i></a>';
        }
        
        elseif ($_SESSION['acesso']['tipousuario']=="Adm"){
          echo '<div class="icons-btn">'; 
          echo '<a class="icons-user" href="./cliente/listarCliente"><i class="fas fa-user"></i></a>';  
          echo '<a class="icons-car" href="./produto/listarProdutos"><i class="fas fa-mobile-alt"></i></a>'; 
          echo '<a class="icons-box" href="./categoria/listarCategoria"><i class="fas fa-archive"></i></a>';
          echo '<a class="icons-cupom" href="./cupom/listarCupom"><i class="far fa-clipboard"></i></a>';
          echo '<a class="icons-pay" href="./FormaPagamento/listarFormaPagamento"><i class="fab fa-cc-amazon-pay"></i></a>'; 
          echo '</div>';
        }
        
        elseif ($_SESSION['acesso']['tipousuario']=="User"){
            $idusuario = $_SESSION['acesso']['idusuario'];
            echo '<a class="icons-user" href="./login/logout"><i class="fas fa-sign-out-alt"></i></a>';
            echo '<a class="icons-user" href="./cliente/ver/'.$idusuario.'"><i class="fas fa-user"></i></a>';
        }
     ?>
</div>