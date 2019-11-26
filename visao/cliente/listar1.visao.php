<?php
    include_once 'app.php';
    
    $idusuario = $cliente['idusuario'];
    $nome = $cliente['nomeusuario'];
    $email = $cliente['email'];
    $senha = $cliente['senha'];
    $cpf = $cliente['cpf'];
    $nascimento = $cliente['datadenascimento'];
    $sexo = $cliente['sexo'];
    $tipo = $cliente['tipousuario'];
    
    if ($cliente['email']==$_SESSION["acesso"]["email"] || $_SESSION["acesso"]["tipousuario"]=="Adm"){
                echo '<h2>Detalhes do Cliente</h2>';

		echo "<p>Id: ".$idusuario."</p>";
		echo "<p>Nome: ".$nome."</p>";
		echo "<p>Email: " .$email."</p>";
		echo "<p>Senha: ".$senha."</p>";
		echo "<p>CPF: ".$cpf."</p>";
		echo "<p>Data de nascimento: ".$nascimento."</p>";
		echo "<p>Sexo: ".$sexo."</p>";
		echo "<p>Tipo: ".$tipo."</p>";

                echo '<a href="./endereco/cadastro/'.$idusuario.'">Cadastrar endereco</a>';
                echo '<a href="./endereco/ver/'.$idusuario.'/?cod=0">  Ver endereco</a>'; 
                //-------------------------------------------------------------------------------------------
                //editar
                require_once ("app.php");
                $id = $_SESSION['acesso']['idusuario'];
                $id2 = $_SESSION['acesso']['tipousuario'];
                echo "<a href='./cliente/editar/$id/?tipocadastro=$id2'>    Editar Usuario</a> </td>";  
                //-------------------------------------------------------------------------------------------
                echo '<br><br>';
		echo '<a href="./cliente/listarCliente">Voltar</a>';
    }
    else{
        echo'<meta http-equiv="refresh" content=1;url="./">';
    }

                