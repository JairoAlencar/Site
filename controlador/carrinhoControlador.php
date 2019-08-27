<?php
require_once "modelo/produtoModelo.php";
//requisição do modelo, para que possa ser feito todo o processo

function carrinho(){
	exibir("carrinho/carrinho");
    //só vai redirecionando para a pagina para poder fazer o layout
}

function index(){

//recebe todas as opcoes do carrinho para fazer todo o processo
    $_SESSION["quantcarrinho"]=0;
    if (isset($_SESSION["carrinho"])) {
        $carrinhoprod = array();
        $soma=0;
        foreach ($_SESSION["carrinho"] as $sessaoprod) {
            $_SESSION["quantcarrinho"]+= $sessaoprod["quantidade"];
            $banco = pegarProdutoPorId($sessaoprod["id"]);
            $carrinhoprod[] = $banco; 
            $aux= $sessaoprod["quantidade"]*$banco["preco"];
            $soma= $soma + $aux;
        }
        
        $dados["produtos"] = $carrinhoprod;
        $dados["total"] = $soma;
        exibir("carrinho/carrinho", $dados);
        
    } else {
        exibir("carrinho/carrinho");
    }
}

function adicionar($id){

//pega o produto do carrinho para adicionar no carinho e aumenta a quantidade de um produto(reaproveitamento)
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
    
//parte do deletar um produto do carrinho    
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

//tirar 1 produto da quantidade só funciona se tiver mais de uma quantidade do mesmo produto    
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
