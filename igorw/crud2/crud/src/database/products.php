<?php

function findProductsDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
	$products;

	$sql = "SELECT * FROM products  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	
	$products = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $products;
}

function createProductsDb($conn, $manufactory, $model, $vendor, $cost, $storage, $description) {
	$manufactory = mysqli_real_escape_string($conn, $manufactory);
	$model = mysqli_real_escape_string($conn,  $model);
	$vendor = mysqli_real_escape_string($conn,  $vendor);
	$cost = mysqli_real_escape_string($conn, $cost);
	$storage = mysqli_real_escape_string($conn,  $storage);
	$description = mysqli_real_escape_string($conn,  $description);	

	if($manufactory && $model && $vendor && $cost && $storage && $description) {
		$sql = "INSERT INTO products (manufactory, model, vendor, cost, storage, description) VALUES (?, ?, ?, ?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'ssssss', $manufactory, $model, $vendor, $cost, $storage, $description);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function readProductsDb($conn) {
    $products = [];

	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $products;
}

function updateProductsDb($conn, $id, $manufactory, $model, $vendor, $cost, $storage, $description) {
    if($id && $manufactory && $model && $vendor && $cost && $storage && $description) {
		$sql = "UPDATE products SET manufactory = ?, model = ?, vendor = ?, cost = ?, storage = ?, description = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'ssssssi', $manufactory, $model, $vendor, $cost, $storage, $description);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deleteProductsDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);

	if($id) {
		$sql = "DELETE FROM products WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
