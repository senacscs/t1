<?php

require_once '../../database/pagamento.php';

function findPagamentoAction($conn, $id) {
	return findPagamentoDb($conn, $id);
}

function readPagamentoAction($conn) {
	return readPagamentoDb($conn);
}

function createPagamentoAction($conn, $name, $email, $phone) {
	$createPagamentoDb = createPagamentoDb($conn, $name, $email, $phone);
	$message = $createPagamentoDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updatePagamentoAction($conn, $id, $name, $email, $phone) {
	$updatePagamentoDb = updatePagamentoDb($conn, $id, $name, $email, $phone);
	$message = $updatePagamentoDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deletePagamentoAction($conn, $id) {
	$deletePagamentoDb = deletePagamentoDb($conn, $id);
	$message = $deletePagamentoDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
