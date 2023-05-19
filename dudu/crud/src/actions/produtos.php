<?php

require_once '../../database/produtos.php';

function findProdutosAction($conn, $id) {
	return findProdutosDb($conn, $id);
}

function readProdutosAction($conn) {
	return readProdutosDb($conn);
}

function createProdutosAction($conn, $nome, $quantidade, $valor) {
	$createProdutosDb = createProdutosDb($conn, $nome, $quantidade, $valor);
	$message = $createProdutosDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateProdutosAction($conn, $id, $nome, $quantidade, $valor) {
	$updateProdutosDb = updateProdutosDb($conn, $id, $nome, $quantidade, $valor);
	$message = $updateProdutosDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteProdutosAction($conn, $id) {
	$deleteProdutosDb = deleteProdutosDb($conn, $id);
	$message = $deleteProdutosDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
