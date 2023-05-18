<?php

require_once '../../database/products.php';

function findProductsAction($conn, $id) {
	return findProductsDb($conn, $id);
}

function readProductsAction($conn) {
	return readProductsDb($conn);
}

function createProductsAction($conn,$manufactory, $model, $vendor, $cost, $storage, $description) {
	$createProductsDb = createProductsDb($conn, $manufactory, $model, $vendor, $cost, $storage, $description);
	$message = $createProductsDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateProductsAction($conn, $id, $manufactory, $model, $vendor, $cost, $storage, $description) {
	$updateProductsDb = updateProductsDb($conn, $id, $manufactory, $model, $vendor, $cost, $storage, $description);
	$message = $updateProductsDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteProductsAction($conn, $id) {
	$deleteProductsDb = deleteProductsDb($conn, $id);
	$message = $deleteProductsDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
