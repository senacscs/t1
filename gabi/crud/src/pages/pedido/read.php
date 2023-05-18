<?php

require_once '../../../config.php';
require_once '../../../src/actions/pedido.php';
require_once '../../../src/modules/messages.php';
require_once '../partials/header.php';

$pedidos = readPedidoAction($conn);

?>
<div class="container">
	<div class="row">
		<a href="../../../"><h1>Pedido - Read</h1></a>
		<a class="btn btn-success text-white" href="./create.php">New</a>
	</div>
	<div class="row flex-center">
		<?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
	</div>

	<table class="table-users">
		<tr>
			<th>NÚMERO DO PEDIDO</th>
			<th>NÚMERO DO CLIENTE</th>
			<th>NOME E SOBRENOME</th>
			<th>CIDADE NATAL</th>
			<th>REGIÃO</th>
			<th>RUA</th>			
			<th>CEP</th>
			<th>NÚMERO DA RESIDÊNCIA</th>
			<th>E-MAIL</th>
			<th>CPF</th>


		<?php foreach($pedidos as $row): ?>
		<tr>
			<td class="user-name"><?=htmlspecialchars($row['name'])?></td>
			<td class="user-email"><?=htmlspecialchars($row['email'])?></td>
			<td class="user-phone"><?=htmlspecialchars($row['phone'])?></td>
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

