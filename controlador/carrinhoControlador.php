<?php
require_once "modelo/produtoModelo.php";
require_once "modelo/cupomModelo.php";
require_once "modelo/FormaPagamentoModelo.php";
require_once "modelo/enderecoModelo.php";

include("servico/correiosServico.php");
//requisição do modelo do produto, para que possa ser feito todo o processo
//$_SESSION é um array associativo de sessão disponivel no script

/** Adm, User */
function index(){
//recebe todas as opcoes do carrinho para fazer todo o processo
    $_SESSION["quantcarrinho"]=0;

    $dados["valor_frete"] = 0;
    $dados["prazo_frete"] = 0;  


   

    //contagem de quantidade de produtos

    if (isset($_SESSION["carrinho"])) {
        $carrinhoprod = array();
        $soma=0;
        //soma total do valor de produtos recebe 0

        foreach ($_SESSION["carrinho"] as $sessaoprod) {
            $_SESSION["quantcarrinho"]+= $sessaoprod["quantidade"];
            $banco = pegarProdutoPorId($sessaoprod["id"]);
            $carrinhoprod[] = $banco; 
            $aux= $sessaoprod["quantidade"]*$banco["preco"];
            $soma= $soma + $aux;}
        
        $dados["produtos"] = $carrinhoprod;
        //dados de todos os produtos no carrinho
        $dados["total"] = $soma;}
        //dados do valor total de todos os produtos no carrinho      
        //enviara todos os dados das funções requisitadas para a pagina principal, conforme seja requisitada

    if(ehPost()) {
        $cep_destino = $_POST['frete']; 
        $tipo_do_frete = $_POST['tipo_do_frete'];  
        $frete = calcular_frete($cep_destino, $tipo_do_frete);
        $dados["valor_frete"] = $frete->Valor;
        $dados["prazo_frete"] = $frete->PrazoEntrega;}

    //$dados["totalComFrete"] = $valor_frete+$total;

    exibir("carrinho/carrinho", $dados);}

/** Adm, User */
function adicionar($id){

//pega o produto do listar produto para adicionar no carinho e aumenta a quantidade de um produto(reaproveitamento)
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    $alt = false ;
    //se não existir um produto com o mesmo id, ele vai entender como um novo e se já existir com o mesmo id a quantidade vai aumentar, jogando na sessão do carrinho


    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true; 
            //se tiver um produto igual no carrinho vai ser true
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    //percorre todo o carrinho para ver se não tem nenhum produto igual, se tiver aumenta uma quantidade

    if (!$alt) {
       //vai depender se o alt for false ou true
       //! é a negação 
       //se alt for verdadeiro não ira entrar nessa condição 

        $produto["id"] = $id;
        $produto["quantidade"]= 1;
        $_SESSION["carrinho"][] = $produto;   
    }
    redirecionar("carrinho/index"); 
    //redirecionar para a função principal   
}

/** Adm, User */
function remover($index){
    
//parte do deletar um produto do carrinho    
    foreach($_SESSION["carrinho"] as $key => $produto){
        
     
       if($index==$produto["id"]){
           echo "Deu certo!!";
           
           echo $produto["id"];
           unset ($_SESSION["carrinho"][$key]);
           //vai destruir o session especificado, para poder deletar o produto desejado
       }
       
    }
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    //array_values retorna uma matriz contendo todos os valores de uma matriz, nesse caso vai retornar todos os valores de $_SESSION['carrinho']

    redirecionar("carrinho/index"); 
    //redirecionar para a função principal  
}

/** Adm, User */
function apagartudo(){
    unset($_SESSION["carrinho"]);
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
    //redirecionar para a função principal 
}

function pedido(){
    $id = $_SESSION["acesso"]["idusuario"];
    $_SESSION["quantcarrinho"]=0;
    $soma = 0;
    $desconto = 0;
    $valor = 0;

    if (isset($_SESSION["carrinho"])) {
        $carrinhoprod = array();
        $soma = 0;
        $desconto = 0;
        $valor = 0;

        foreach ($_SESSION["carrinho"] as $sessaoprod) {
            $_SESSION["quantcarrinho"]+= $sessaoprod["quantidade"];
            $banco = pegarProdutoPorId($sessaoprod["id"]);
            $carrinhoprod[] = $banco; 
            $aux= $sessaoprod["quantidade"]*$banco["preco"];
            $soma= $soma + $aux;
        }
        
        $dados["produtos"] = $carrinhoprod;
        $dados["total"] = $soma;
        $dados["desconto"] = $desconto;
        $dados["valor"] = $soma;
        $dados["FormaPagamento"] = exibirFormaPagamento();
        $dados["endereco"] = exibirEndereco($id);
        
    }else{
        $dados["total"] = $soma;
        $dados["desconto"] = $desconto;
        $dados["valor"] = $soma;
        $dados["FormaPagamento"] = exibirFormaPagamento();
        $dados["endereco"] = exibirEndereco($id);
    }

    exibir("pedido/pedido", $dados);
}

function buscar_cupom($total){
    $id = $_SESSION["acesso"]["idusuario"];
    $_SESSION['prazo_frete'] = $_SESSION['prazo_frete'];
    $_SESSION["quantcarrinho"]=0;
    $soma = 0;
    $desconto = 0;
    $valor = 0;
    if(ehPost()){
        $cupom = $_POST["nome_cupom"];  


        if (isset($_SESSION["carrinho"])) {
            $carrinhoprod = array();
            $soma = 0;
            $desconto = 0;
            $valor = 0;
            foreach ($_SESSION["carrinho"] as $sessaoprod) {
                $_SESSION["quantcarrinho"]+= $sessaoprod["quantidade"];
                $banco = pegarProdutoPorId($sessaoprod["id"]);
                $carrinhoprod[] = $banco; 
                $aux= $sessaoprod["quantidade"]*$banco["preco"];
                $soma= $soma + $aux;
            }
            
            $dados["produtos"] = $carrinhoprod;
            $dados["total"] = $soma;
            $dados["desconto"] = $desconto;
            $dados["valor"] = $soma;
            $dados["desconto"] = $desconto;
            $dados["valor"] = $total-($total*$desconto/100);
            $dados["FormaPagamento"] = exibirFormaPagamento();
            $dados["endereco"] = exibirEndereco($id);
            //$msg = adicionarVenda($idProduto, $idUsuario, $FormaPagamento, $data);
            
        }else{
            $dados["total"] = $soma;
            $dados["desconto"] = $desconto;
            $dados["valor"] = $soma;
            $dados["desconto"] = $desconto;
            $dados["valor"] = $total-($total*$desconto/100);
            $dados["FormaPagamento"] = exibirFormaPagamento();
            $dados["endereco"] = exibirEndereco($id);
        }

        $desconto = busca_cupom($cupom);
        $_SESSION['desconto'] = $desconto;
        $dados["desconto"] = $desconto;
        $dados["total"] = $total;
        $dados["valor"] = $total-($total*$desconto/100);
        $dados["FormaPagamento"] = exibirFormaPagamento();
        exibir("pedido/pedido", $dados);
    }
}

function frete(){
    $id = $_SESSION["acesso"]["idusuario"];
    $_SESSION["quantcarrinho"]=0;
    $soma = 0;
    $desconto = 0;
    $valor = 0;
    
    if(ehPost()) {
        $cep_destino = $_POST['frete']; 
        $tipo_do_frete = $_POST['tipo_do_frete'];  
        $frete = calcular_frete($cep_destino, $tipo_do_frete);
        $valor_frete = $frete->Valor;
        $prazo_entrega = $frete->PrazoEntrega;
        if (isset($_SESSION["carrinho"])) {
            $carrinhoprod = array();
            $soma = 0;
            $desconto = 0;
            $valor = 0;

            foreach ($_SESSION["carrinho"] as $sessaoprod) {
                $_SESSION["quantcarrinho"]+= $sessaoprod["quantidade"];
                $banco = pegarProdutoPorId($sessaoprod["id"]);
                $carrinhoprod[] = $banco; 
                $aux= $sessaoprod["quantidade"]*$banco["preco"];
                $soma= $soma + $aux;
            }
            
            $dados["produtos"] = $carrinhoprod;
            $dados["total"] = $soma;
            $dados["desconto"] = $desconto;
            $dados["valor"] = $soma;
            $dados["FormaPagamento"] = exibirFormaPagamento();
            $dados["endereco"] = exibirEndereco($id);
            
        }else{
            $dados["total"] = $soma;
            $dados["desconto"] = $desconto;
            $dados["valor"] = $soma;
            $dados["FormaPagamento"] = exibirFormaPagamento();
            $dados["endereco"] = exibirEndereco($id);
        }
            $_SESSION['valor_frete'] = $valor_frete;
            $_SESSION['prazo_frete'] = $prazo_entrega;
    }
    exibir("pedido/pedido", $dados);
}

?>