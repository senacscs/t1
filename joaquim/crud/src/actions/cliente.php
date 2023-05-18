<?php

require_once '../../database/cliente.php';

function findClienteAction($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone) {
	return findClienteDb($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone);
}

function readClienteAction($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone) {
	return readClienteDb($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone);
}

function createClienteAction($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone) {
	$createClienteDb = createClienteDb($conn, $nome, $rua, $complemento, $cidade, $cep, $telefone);
	$message = $createClienteDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateClienteAction($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone) {
	$updateClienteDb = updateClienteDb($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone);
	$message = $updateClienteDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteClienteAction($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone) {
	$deleteClienteDb = deleteClienteDb($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone);
	$message = $deleteClienteDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
