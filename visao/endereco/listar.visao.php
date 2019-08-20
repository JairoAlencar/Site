<!DOCTYPE html> 
<html>
<head>
  <title></title> 
  <link rel="stylesheet" type="text/css" href="./publico/css/pagprin">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">  
</head>

	<h1>Endereço</h1>

	<TABLE class="table">
		<thead>
			<tr>
				<th>ID</th>
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
                
                    <td>Id endereco: <?=$endereco['idendereco']?> </td>
                    <td>Id usuario: <?=$endereco['idusuario']?> </td>
                    <td>Logradouro: <?=$endereco['logradouro']?> </td>
                    <td>Numero: <?=$endereco['numero']?> </td>
                    <td>Bairro: <?=$endereco['bairro']?> </td>
                    <td>Cidade: <?=$endereco['cidade']?> </td>
                    <td>CEP: <?=$endereco['cep']?> </td>
			
                        <td> <a href="./endereco/ver/<?=$endereco['idendereco']?>">Ver</a> </td>
			<td> <a href="./endereco/deletar/<?=$endereco['idendereco']?>">Deletar</a> </td>
			<td> <a href="./endereco/editar/<?=$endereco['idendereco']?>">Editar</a> </td>
		</tr>
		<?php endforeach; ?>	
</TABLE>

<a href="./endereco/cadastro">Cadastrar um novo endereco</a>