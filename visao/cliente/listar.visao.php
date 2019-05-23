<h1>Clientes</h1>

<?=$msg?>

<?php foreach($Clientes as $cliente): ?>

	<h3>
		<?= $cliente['nome'] ?>
	</h3>

	<p>
		<?= $cliente['email'] ?>
	</p>

<?php endforeach; ?>	