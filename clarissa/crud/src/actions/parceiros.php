<?php

require_once '../../database/parceiros.php';

function findParceirosAction($conn, $id) {
	return findParceirosDb($conn, $id);
}

function readParceirosAction($conn) {
	return readParceirosDb($conn);
}

function createParceirosAction($conn, $name, $email, $phone) {
	$createParceirosDb = createParceirosDb($conn, $name, $email, $phone);
	$message = $createParceirosDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateParceirosAction($conn, $id, $name, $email, $phone) {
	$updateParceirosDb = updateParceirosDb($conn, $id, $name, $email, $phone);
	$message = $updateParceirosDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteParceirosAction($conn, $id) {
	$deleteParceirosDb = deleteParceirosDb($conn, $id);
	$message = $deleteParceirosDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
