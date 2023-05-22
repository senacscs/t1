<?php

require_once '../../../config.php';
require_once '../../../src/actions/product.php';
require_once '../../../src/modules/messages.php';
require_once '../partials/header.php';

$product = readproductAction($conn);

?>
<div class="container">
	<div class="row">
		<a href="../../../"><h1>Produtos</h1></a>
		<a class="btn btn-success text-white" href="./create.php">Novo produto</a>
	</div>
	<div class="row flex-center">
		<?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
	</div>

	<table class="table-product">
		<tr>
			<th>NOME</th>
			<th>email</th>
			<th>ID</th>
		</tr>
		<?php foreach($product as $row): ?>
		<tr>
			<td class="product-name"><?=htmlspecialchars($row['name'])?></td>
			<td class="product-email"><?=htmlspecialchars($row['email'])?></td>
			<td class="product-phone"><?=htmlspecialchars($row['phone'])?></td>
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

