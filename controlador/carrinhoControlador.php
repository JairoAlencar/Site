<?php
require_once "modelo/produtoModelo.php";

function carrinho(){
	exibir("carrinho/carrinho");//só esta redirecionando para a pagina para poder fazer o layout
}

function index(){

    $_SESSION["quantcarrinho"]=0;
    if (isset($_SESSION["carrinho"])) {
        $produtosCarrinho = array();
        $soma=0;
        foreach ($_SESSION["carrinho"] as $produtoSessao) {
            $_SESSION["quantcarrinho"]+= $produtoSessao["quantidade"];
            $produtoBanco = pegarProdutoPorId($produtoSessao["id"]);
            $produtosCarrinho[] = $produtoBanco; 
            $aux= $produtoSessao["quantidade"]*$produtoBanco["preco"];
            $soma= $soma + $aux;
        }
        
       
        
        $dados["produtos"] = $produtosCarrinho;
        $dados["total"] = $soma;
        exibir("carrinho/carrinho", $dados);
        
    } else {
        exibir("carrinho/carrinho");
    }
}

function adicionar($id){

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    //vai criar a sessao carrinho!
    $alt = false ;


    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produto["id"] = $id;
        $produto["quantidade"]= 1;
        $_SESSION["carrinho"][] = $produto;   
    }
    redirecionar("carrinho/index");    
}


function remover($index){
    
    
    foreach($_SESSION["carrinho"] as $key => $produto){
        
     
       if($index==$produto["id"]){
           echo "Deu certo!!";
           
           echo $produto["id"];
           unset ($_SESSION["carrinho"][$key]);
       }
       
    }
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    redirecionar("carrinho/index");   
}


function tirarproduto($id){
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    for ($i=0; $i<count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            if($_SESSION["carrinho"][$i]["quantidade"]>1 ){
            $_SESSION["carrinho"][$i]["quantidade"]--;
            }
        }
    }
    redirecionar("carrinho/index");   
}


?>
