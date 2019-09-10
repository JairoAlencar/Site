	<h1>Endereço</h1>
	<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>ID Cliente</th>
				<th>Logradouro</th>
				<th>Numero</th>
				<th>Bairro</th>
                <th>Cidade</th>
                <th>Cep</th>
				<th>Ver Detalhes</th>
				<th>Deletar Endereco</th>
				<th>Editar</th>
			</tr>
		</thead>

		<?php foreach($endereco as $endereco): ?>
		<tr>
                
                    <td><?=$endereco['idendereco']?> </td>
                    <td><?=$endereco['idusuario']?> </td>
                    <td><?=$endereco['logradouro']?> </td>
                    <td><?=$endereco['numero']?> </td>
                    <td><?=$endereco['bairro']?> </td>
                    <td><?=$endereco['cidade']?> </td>
                    <td><?=$endereco['cep']?> </td>
			
                        <td> <a href="./endereco/ver/<?=$endereco['idendereco']?>">Ver</a> </td>
			<td> <a href="./endereco/deletar/<?=$endereco['idendereco']?>">Deletar</a> </td>
			<td> <a href="./endereco/editar/<?=$endereco['idendereco']?>">Editar</a> </td>
		</tr>
		<?php endforeach; ?>	
</TABLE>

<a href="./endereco/cadastro">Cadastrar um novo endereco</a>