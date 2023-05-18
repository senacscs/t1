<?php

require_once '../../../config.php';
require_once '../../../src/actions/user.php';
require_once '../../../src/modules/messages.php';
require_once '../partials/header.php';

$users = readClienteAction($conn);

?>
<div class="container">
	<div class="row">
		<a href="../../../"><h1>Leitura de Usuário</h1></a>
		<a class="btn btn-success text-white" href="./create.php">New</a>
	</div>
	<div class="row flex-center">
		<?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
	</div>

	<table class="table-users">
		<tr>
			<th>NOME</th>
			<th>RUA</th>
			<th>COMPLEMENTO</th>
			<th>CIDADE</th>
			<th>CEP</th>
			<th>TELEFONE</th>
			<th>EMAIL</th>
		</tr>
		<?php foreach($users as $row): ?>
		<tr>
			<td class="cliente-nome"><?=htmlspecialchars($row['nome'])?></td>
			<td class="cliente-rua"><?=htmlspecialchars($row['rua'])?></td>
			<td class="cliente-complemento"><?=htmlspecialchars($row['complemento'])?></td>
			<td class="cliente-cidade"><?=htmlspecialchar s($row['cidade'])?></td>
			<td class="cliente-cep"><?=htmlspecialchars($row['cep'])?></td>
			<td class="cliente-telefone"><?=htmlspecialchars($row['telefone'])?></td>
			<td class="cliente-email"><?=htmlspecialchars($row['email'])?></td>
			<td>
				<a class="btn btn-primary text-white" href="./edit.php?id=<?=$row['id']?>">Editar</a>
			</td>
			<td>
				<a class="btn btn-danger text-white" href="./delete.php?id=<?=$row['id']?>">Remover</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<?php require_once '../partials/footer.php'; ?>

