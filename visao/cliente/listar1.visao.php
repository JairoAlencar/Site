<!DOCTYPE html> 
<html>
<head>
  <title>Detalhes</title> 
  <meta charset="utf-8">
  <link rel="stylesheet" href="./publico/css/css.css">   
  <link rel="shoutcut icon" href="publico/imagens/icone.ico">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>

		<h2>Detalhes do Cliente</h2>

		<p>Id: <?=$cliente['idusuario']?> </p>
		<p>Nome: <?=$cliente['nomeusuario']?> </p>
		<p>Email: <?=$cliente['email']?> </p>
		<p>Senha: <?=$cliente['senha']?> </p>
		<p>CPF: <?=$cliente['cpf']?> </p>
		<p>Nascimento: <?=$cliente['datadenascimento']?> </p>
		<p>Sexo: <?=$cliente['sexo']?> </p>
		<p>Tipo: <?=$cliente['tipousuario']?></p>

		<a href="./cliente/listarCliente">Voltar</a>