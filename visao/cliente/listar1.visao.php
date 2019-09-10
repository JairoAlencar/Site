		<h2>Detalhes do Cliente</h2>

		<p>Id: <?=$cliente['idusuario']?> </p>
		<p>Nome: <?=$cliente['nomeusuario']?> </p>
		<p>Email: <?=$cliente['email']?> </p>
		<p>Senha: <?=$cliente['senha']?> </p>
		<p>CPF: <?=$cliente['cpf']?> </p>
		<p>Nascimento: <?=$cliente['datadenascimento']?> </p>
		<p>Sexo: <?=$cliente['sexo']?> </p>
		<p>Tipo: <?=$cliente['tipousuario']?></p>

                <button><a href="./endereco/cadastro/<?=$cliente['idusuario']?>">Cadastrar endereco</a></button>
                <button><a href="./endereco/ver/<?=$cliente['idusuario']?>">Ver endereco</a></button>  
                <br><br>
		<a href="./cliente/listarCliente">Voltar</a>