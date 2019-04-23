<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="post" class="box">
			<h1>Cadastro</h1>

			<input type="text" name="nome" placeholder="Nome" required="">
			<input type="text" name="sobrenome" placeholder="Sobrenome" required=""> 
				<br>
			<input type="text" name="email" placeholder="Email" required="">
			<input type="password" name="senha" placeholder="Senha" required="">
				<br>
			Sexo:
			<input type="radio" name="sexo">Masculino
			<input type="radio" name="sexo">Feminino 
			<input type="radio" name="sexo">Prefiro não me identificar
				<br>
			<input type="text" name="cpf" placeholder="CPF" required="">
			<input type="date" name="nasc" placeholder="Nascimento" required="">
				<br> 
			<input type="text" name="cidade" placeholder="Cidade" required="">	
			<input type="text" name="estado" placeholder="Estado" required="">	
				<br>
			<input type="checkbox" name="" required="">Desejo receber as pfertas por email
				<br>
			<input type="checkbox" name="" required="">	Li, aceito e concordo com as condições e os termos de uso
				<br>
			<input type="submit" name="vai" value="Cadastrar">	
		</form>
</body>
</html>