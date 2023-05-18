<?php

function findParceriaDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $numero_empresa);
	$user;

	$sql = "SELECT * FROM parceria  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	
	$user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $user;
}

function createParceriaDb($conn, $numero_empresa) {
	$name = mysqli_real_escape_string($conn, $name);
	$email = mysqli_real_escape_string($conn,  $email);
	$phone = mysqli_real_escape_string($conn,  $phone);

	if($numero_empresa) {
		$sql = "INSERT INTO users (numero_empresa) VALUES (?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'sss', $numero_empresa);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function readParceriaDb($conn) {
    $users = [];

	$sql = "SELECT * FROM parceria";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $users;
}

function updateParceriaDb($conn, $numero_empresa) {
    if($numero_empresa) {
		$sql = "UPDATE parceria SET nuemro_empresa = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $phone, $id);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deleteParceriaDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $numero_empresa);

	if($id) {
		$sql = "DELETE FROM users WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
