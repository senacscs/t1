<?php

require_once '../../database/pedido.php';

function findPedidoAction($conn, $id) {
	return findPedidoDb($conn, $id);
}

function readPedidoAction($conn) {
	return readPedidoDb($conn);
}

function createPedidoAction($conn, $name, $email, $phone) {
	$createPedidoDb = createPedidoDb($conn, $name, $email, $phone);
	$message = $createPedidoDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updatePedidoAction($conn, $id, $name, $email, $phone) {
	$updatePedidoDb = updatePedidoDb($conn, $id, $name, $email, $phone);
	$message = $updatePedidoDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deletePedidoAction($conn, $id) {
	$deletePedidoDb = deletePedidoDb($conn, $id);
	$message = $deletePedidoDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
