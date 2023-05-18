<?php

require_once '../../database/curso.php';

function findCursoAction($conn, $numero_curso) {
	return findCursoDb($conn, $numero_curso);
}

function readCursoAction($conn, $numero_curso) {
	return readCursoDb($conn $numero_curso);
}

function createCursoAction($conn, $numero_curso) {
	$createCursoDb = createCursoDb($conn, $numero_curso);
	$message = $createCursoDb == 1 ? 'success-create' : 'error-create';
	return header("Location: ./read.php?message=$message");
}

function updateCursoAction($conn, $numero_curso) {
	$updateCursoDb = updateCursoDb($conn, $numero_curso);
	$message = $updateCursoDb == 1 ? 'success-update' : 'error-update';
	return header("Location: ./read.php?message=$message");
}

function deleteCursoAction($conn, $numero_curso) {
	$deleteCursoDb = deleteCursoDb($conn, $numero_curso);
	$message = $deleteCursoDb == 1 ? 'success-remove' : 'error-remove';
	return header("Location: ./read.php?message=$message");
}
