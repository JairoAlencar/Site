<?php

include("servico/validacaoServico.php");
include("servico/emailServico.php");
require_once "modelo/clienteModelo.php";

/** anon */
function cadastro(){
	if (ehpost()) {

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$cpf = $_POST["cpf"];
		$nasc = $_POST["nasc"];
		$sexo = $_POST["sexo"];
		$tipo = $_POST['tipo'];
		


		$vali = validacao_cadastro($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo);

			if(count($vali)==0){
				$msg = adicionarCliente($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo);
				redirecionar("./login");			
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("cliente/cadastro", $dados);
			}
		
		} else {
			exibir("cliente/cadastro");	
		}	
		
}

/** Adm, User */
function editar($id, $id2){
    require_once 'app.php';
$x = $_SESSION["acesso"]["idusuario"];
$acess = $_SESSION["acesso"]["tipousuario"];
    if ($id == $x || $acess == "Adm" ){
	if(ehpost()){

		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$cpf = $_POST["cpf"];
		$nasc = $_POST["nasc"];
		$sexo = $_POST["sexo"];
		$tipo = $_POST['tipo'];

		$vali = validacao_cadastro($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo);
		
			if(count($vali)==0){
				$msg = editarCliente($nome, $email, $senha, $cpf, $nasc, $sexo, $tipo, $id);
                                alert("Edição efetuada com sucesso!");
				redirecionar("");
			}else{
				$dados = array();
				$dados["erros"] = $vali;
				exibir("cliente/cadastro", $dados);
			}
		
	}else{

		$dados["cliente"] = pegarClientePorId($id);
		exibir("cliente/cadastro", $dados);
        }
    
    }
    else {echo'<meta http-equiv="refresh" content=1;url="">';}
}


/** Adm */
function listarCliente() {

	$dados = array();

	$dados["clientes"] = exibirClientes();
	exibir("cliente/listar", $dados);
}

/** Adm,User */
function ver($idCliente){

	$dados["cliente"] = pegarClientePorId($idCliente);
	exibir("cliente/listar1", $dados);
}

/** Adm */
function deletar($id){
	$msg = deletarCliente($id);
	redirecionar("cliente/listarCliente");
}

function email() {

	if(isset($_POST['submit'])){

	    $nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$cpf = $_POST["cpf"];
		$nasc = $_POST["nasc"];
		$sexo = $_POST["sexo"];

	    enviar_email($nome, $email);    

	}
	exibir("cliente/listarCliente");
}
?>
