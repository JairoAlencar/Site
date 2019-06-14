<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Usuario</title>
	<link rel="stylesheet" type="text/css" href="./publico/css/pagprin">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="./publico/imagens/Logo.png">
</head>
<body>

<?php
	if(ehPost()){
		foreach ($erros as $erro){
			echo "$erro<br>";
		}
	}
?>

	<form action="" method="post">

			<h1>Cadastro</h1>

			<input type="text" name="nome" placeholder="Nome">
			<input type="text" name="email" placeholder="Email">
				<br>
			<input type="password" name="senha" placeholder="Senha">
			<input type="text" name="cpf" placeholder="CPF">
				<br>
			<input type="date" name="nasc" placeholder="Nascimento">
				<br>	
			Sexo:
				<br>
			<input type="radio" name="sexo" value="Masculino" checked="checked">Masculino
			<input type="radio" name="sexo" value="Feminino">Feminino
				<br>
			Tipo de usuario:
				<br>
			<input type="radio" name="tipo" value="Adm">Administrador
			<input type="radio" name="tipo" value="User" checked="checked">Cliente	
				<br>
			<input type="checkbox" name="" required="">Li, aceito e concordo com as condições e os termos de uso
				<br>
			<input type="submit" name="vai" value="Cadastrar">	
		</form>
				<br>
				<br>

</body>
</html>

