<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./publico/css/cadastro.css">
</head>
<body>
    
    <div id="topo" style="background: black; height: 88px;">
				<div id="logo" class="col-4" style="margin-left:43%;">
					<a href="index.html" id="logo" >
						<img src="./publico/imagens/Logo.PNG" style="margin-top: 2%;">
					</a>
				</div>
		</div>
	<form action="" method="post" class="box">
			<h1>Cadastro</h1>

			<input type="text" name="nome" placeholder="Nome">
			<input type="text" name="sobrenome" placeholder="Sobrenome"> 
				<br>
			<input type="text" name="email" placeholder="Email">
			<input type="password" name="senha" placeholder="Senha">
				<br>
			Sexo:
			<input type="radio" name="sexo" value="Masculino" checked="checked">Masculino
			<input type="radio" name="sexo" value="Feminino">Feminino
				<br>
			<input type="text" name="cpf" placeholder="CPF">
			<input type="date" name="nasc" placeholder="Nascimento">
				<br> 
			<input type="text" name="cidade" placeholder="Cidade">	
			<input type="text" name="estado" placeholder="Estado">	
				<br>
			<input type="checkbox" name="" required="">Desejo receber as ofertas por email
				<br>
			<input type="checkbox" name="" required="">Li, aceito e concordo com as condições e os termos de uso
				<br>
			<input type="submit" name="vai" value="Cadastrar">	
		</form>
</body>
</html>