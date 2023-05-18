<?php

require_once '../../../config.php';
require_once '../../../src/actions/products.php';
require_once '../../../src/modules/messages.php';
require_once '../partials/header.php';

$products = readProductsAction($conn);

?>
<div class="container">
	<div class="row">
		<a href="../../../"><h1>Products - Read</h1></a>
		<a class="btn btn-success text-white" href="./create.php">New</a>
	</div>
	<div class="row flex-center">
		<?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
	</div>

	<table class="table-users">
		<tr>
			<th>Manufactory</th>
			<th>Model</th>
			<th>Vendor</th>
			<th>Cost</th>
			<th>Storage</th>
			<th>Description</th>									
		</tr>
		<?php foreach($products as $row): ?>
		<tr>
			<td class="user-name"><?=htmlspecialchars($row['manufactory'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['model'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['vendor'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['cost'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['storage'])?></td>
			<td class="user-name"><?=htmlspecialchars($row['description'])?></td>			
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

