<?php

require_once '../../database/cliente.php';

function findClienteAction($conn, $id) {
	return findClienteDb($conn, $id);
}

function readClienteAction($conn) {
	return readClienteDb($conn);
}

function createClienteAction($conn, $name, $email, $phone, $cpf, $data_nascimento, $cep) {
	$createClienteDb = createClienteDb($conn, $name, $email, $phone, $cpf, $data_nascimento, $cep);
	$message = $createClienteDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateClienteAction($conn, $id, $name, $email, $phone, $cpf, $data_nascimento, $cep) {
	$updateClienteDb = updateClienteDb($conn, $id, $name, $email, $phone, $cpf, $data_nascimento, $cep);
	$message = $updateClienteDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteClienteAction($conn, $id) {
	$deleteClienteDb = deleteClienteDb($conn, $id);
	$message = $deleteClienteDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
