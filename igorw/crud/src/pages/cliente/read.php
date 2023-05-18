<?php

require_once '../../../config.php';
require_once '../../../src/actions/cliente.php';
require_once '../../../src/modules/messages.php';
require_once '../partials/header.php';

$clientes = readClienteAction($conn);

?>
<div class="container">
	<div class="row">
		<a href="../../../"><h1>Cliente - Read</h1></a>
		<a class="btn btn-success text-white" href="./create.php">New</a>
	</div>
	<div class="row flex-center">
		<?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
	</div>

	<table class="table-users">
		<tr>
			<th>NOME COMPLETO</th>
			<th>EMAIL</th>
			<th>TELEFONE</th>
			<th>CPF</th>
			<th>DATA DE NASCIMENTO</th>
			<th>CEP</th>
		</tr>
		<?php foreach($clientes as $row): ?>
		<tr>
			<td class="user-name"><?=htmlspecialchars($row['name'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['email'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['phone'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['cpf'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['data_nascimento'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['cep'])?></td>
			<td>
				<a class="btn btn-primary text-white" href="./edit.php?id=<?=$row['id']?>">Edit</a>
			</td>
			<td>
				<a class="btn btn-danger text-white" href="./delete.php?id=<?=$row['id']?>">Remove</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php require_once '../partials/footer.php'; ?>

