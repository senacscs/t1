<?php

function findCursoDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $numero_curso);
	$user;

	$sql = "SELECT * FROM curso  WHERE numero_curso = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $numero_curso);
	mysqli_stmt_execute($stmt);
	
	$user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $user;
}

function createCursoDb($conn, $numero_curso) {
	$numero_curso = mysqli_real_escape_string($conn, $numero_curso);

	if($numero_curso) {
		$sql = "INSERT INTO curso (numero_curso) VALUES (?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'sss', $numero_curso);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function readCursoDb($conn) {
    $users = [];

	$sql = "SELECT * FROM curso";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $users;
}

function updateCursoDb($conn, $numero_curso) {
    if($numero_curso) {
		$sql = "UPDATE curso SET numero = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sssi', $numero_curso);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deleteCursoDb($conn, $numero_curso) {
    $id = mysqli_real_escape_string($conn, $id);

	if($id) {
		$sql = "DELETE FROM curso WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
