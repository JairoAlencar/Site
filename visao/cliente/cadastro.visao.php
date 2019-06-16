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
			Nome:<br>
			<input type="text" name="nome" placeholder="Ex: Cletin">
				<br><br>

			Email:<br>
			<input type="text" name="email" placeholder="Ex: Cleitin09@gmail.com">
				<br><br>

			Senha:<br>	
			<input type="password" name="senha" placeholder="Senha">
				<br><br>

			CPF:<br>	
			<input type="text" name="cpf" placeholder="Ex: 123456789">
				<br><br>

			Data de Nascimento:<br>	
			<input type="date" name="nasc">
				<br><br>
					
			Sexo:
				<br>
			<input type="radio" name="sexo" value="Masculino" checked="checked">Masculino
			<input type="radio" name="sexo" value="Feminino">Feminino
				<br><br>

			Tipo de usuario:
				<br>
			<input type="radio" name="tipo" value="Adm">Administrador
			<input type="radio" name="tipo" value="User" checked="checked">Cliente	
				<br><br>
				
			<input type="checkbox" name="" required="">Li, aceito e concordo com as condições e os termos de uso
				<br>
			<input type="submit" name="vai" value="Cadastrar">	
		</form>
				<br>
				<br>

</body>
</html>

