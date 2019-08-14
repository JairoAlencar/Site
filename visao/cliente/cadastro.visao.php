<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>

<?php
	if(ehPost()){
		foreach ($erros as $erro){
			echo "$erro<br>";
		}
	}
?>

	<form action="" method="post" class="box">

			<h1>Cadastro</h1>
			Nome:<br>
			<input type="text" name="nome" placeholder="Ex: Cletin" value="<?=@$cliente['nomeusuario']?>">
				<br><br>

			Email:<br>
			<input type="text" name="email" placeholder="Ex: Cleitin09@gmail.com" value="<?=@$cliente['email']?>">
				<br><br>

			Senha:<br>	
			<input type="password" name="senha" placeholder="Senha" value="<?=@$cliente['senha']?>">
				<br><br>

			CPF:<br>	
			<input type="text" name="cpf" placeholder="Ex: 123456789" value="<?=@$cliente['cpf']?>">
				<br><br>

			Data de Nascimento:<br>	
			<input type="date" name="nasc" value="<?=@$cliente['datadenascimento']?>">
				<br><br>
					
			Sexo:
				<br>

				<?php 
					if(@$cliente['sexo']=="Masculino"){
						echo '<input type="radio" name="sexo" value="Masculino" checked="checked"> Masculino';
							echo "<br>";
						echo '<input type="radio" name="sexo" value="Feminino"> Feminino';
					}else{
						echo '<input type="radio" name="sexo" value="Masculino"> Masculino';
							echo "<br>";
						echo '<input type="radio" name="sexo" value="Feminino"  checked="checked"> Feminino';		
					}
				?>

				<br><br>

			Tipo de usuario:
				<br>

				<?php 
					if(@$cliente['tipousuario']=="Adm"){
						echo '<input type="radio" name="tipo" value="Adm" checked="checked">Administrador';
							echo "<br>";
						echo '<input type="radio" name="tipo" value="User">Cliente';
					}else{
						echo '<input type="radio" name="tipo" value="Adm">Administrador';
							echo "<br>";
						echo '<input type="radio" name="tipo" value="User" checked="checked">Cliente';
					} 
				?>

				
				<br><br>
				
			<input type="checkbox" name="" required="">Li, aceito e concordo com as condições e os termos de uso
				<br>
			<input type="submit" name="vai" value="Cadastrar">	
		</form>
				<br>
				<br>