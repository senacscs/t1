<?php

require_once '../../database/product.php';

function findproductAction($conn, $id) {
	return findproductDb($conn, $id);
}

function readproductAction($conn) {
	return readproductDb($conn);
}

function createproductAction($conn, $name, $email, $phone) {
	$createproductDb = createproductDb($conn, $name, $email, $phone);
	$message = $createproductDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateproductAction($conn, $id, $name, $email, $phone) {
	$updateproductDb = updateproductDb($conn, $id, $name, $email, $phone);
	$message = $updateproductDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteproductAction($conn, $id) {
	$deleteproductDb = deleteproductDb($conn, $id);
	$message = $deleteproductDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
