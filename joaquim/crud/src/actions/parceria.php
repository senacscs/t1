<?php

require_once '../../database/parceria.php';

function findParceriaAction($conn, $nome_empresa) {
	return findParceriaDb($conn, $nome_empresa);
}

function readParceriaAction($conn, $nome_empresa) {
	return readParceriaDb($conn, $nome_empresa);
}

function createParceriaAction($conn, $nome_empresa) {
	$createParceriaDb = createParceriaDb($conn, $nome_empresa);
	$message = $createParceriaDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateParceriaAction($conn, $nome_empresa) {
	$updateParceriaDb = updateParceriaDb($conn, $nome_empresa);
	$message = $updateParceriaDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteParceriaAction($conn, $nome_empresa) {
	$deleteParceriaDb = deleteParceriaDb($conn, $nome_empresa);
	$message = $deleteParceriaDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
