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

		echo "<p>Id:".$idusuario."</p>";
		echo "<p>Nome:".$nome."</p>";
		echo "<p>Email:.$email.</p>";
		echo "<p>Senha:".$senha."</p>";
		echo "<p>CPF:".$cpf."</p>";
		echo "<p>Data de nascimento:".$nascimento."</p>";
		echo "<p>Sexo:".$sexo."</p>";
		echo "<p>Tipo:".$tipo."</p>";

                echo '<button><a href="./endereco/cadastro/'.$idusuario.'">Cadastrar endereco</a></button>';
                echo '<button><a href="./endereco/ver/'.$idusuario.'">Ver endereco</a></button>'; 
                echo '<br><br>';
		echo '<a href="./cliente/listarCliente">Voltar</a>';
    }
    else{
        echo'<meta http-equiv="refresh" content=1;url="./">';;
    }

                