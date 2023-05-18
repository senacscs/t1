<?php

function findParceirosDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
	$parceiros;

	$sql = "SELECT * FROM parceiros WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	
	$parceiros = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $parceiros;
}

function createParceirosDb($conn, $name, $email, $phone) {
	$name = mysqli_real_escape_string($conn, $name);
	$email = mysqli_real_escape_string($conn,  $email);
	$phone = mysqli_real_escape_string($conn,  $phone);

	if($name && $email && $phone) {
		$sql = "INSERT INTO parceiros (name, email, phone) VALUES (?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $phone);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function readParceirosDb($conn) {
    $parceiros = [];

	$sql = "SELECT * FROM parceiros";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$parceiross = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $parceiros;
}

function updateParceirosDb($conn, $id, $name, $email, $phone) {
    if($id && $name && $email && $phone) {
		$sql = "UPDATE parceiross SET name = ?, email = ?, phone = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $phone, $id);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deleteParceirosDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);

	if($id) {
		$sql = "DELETE FROM parceiross WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
