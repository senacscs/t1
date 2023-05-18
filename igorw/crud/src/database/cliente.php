<?php

function findClienteDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
	$cliente;

	$sql = "SELECT * FROM cliente  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	
	$cliente = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $cliente;
}

function createClienteDb($conn, $name, $email, $phone, $cpf, $data_nascimento, $cep) {
	$name = mysqli_real_escape_string($conn, $name);
	$email = mysqli_real_escape_string($conn,  $email);
	$phone = mysqli_real_escape_string($conn,  $phone);
	$cpf = mysqli_real_escape_string($conn,  $cpf);
	$data_nascimento = mysqli_real_escape_string($conn,  $data_nascimento);
	$cep = mysqli_real_escape_string($conn,  $cep);

	if($name && $email && $phone && $cpf && $data_nascimento && $cep) {
		$sql = "INSERT INTO cliente (name, email, phone , cpf, data_nascimento, cep) VALUES (?, ?, ?, ?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'ssssss', $name, $email, $phone, $cpf, $data_nascimento, $cep);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function readClienteDb($conn) {
    $cliente = [];

	$sql = "SELECT * FROM cliente";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$cliente = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $cliente;
}

function updateClienteDb($conn, $id, $name, $email, $phone, $cpf, $data_nascimento, $cep) {
    if($id && $name && $email && $phone && $cpf && $data_nascimento && $cep) {
		$sql = "UPDATE cliente SET name = ?, email = ?, phone = ?, cpf = ?, data_nascimento = ?, cep = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'ssssssi', $name, $email, $phone, $cpf, $data_nascimento, $cep, $id);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deleteClienteDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);

	if($id) {
		$sql = "DELETE FROM cliente WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
