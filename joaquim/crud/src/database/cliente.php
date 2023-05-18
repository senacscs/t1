<?php

function findClienteDb($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone) {
    $id = mysqli_real_escape_string($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone);
	$user;

	$sql = "SELECT * FROM cliente  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	
	$user = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $user;
}

function createClienteDb($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone) {
	$id = mysqli_real_escape_string($conn, $id);
	$nome = mysqli_real_escape_string($conn,  $nome);
	$rua = mysqli_real_escape_string($conn,  $rua);
	$complemento = mysqli_real_escape_string($conn,  $complemento);
	$cidade = mysqli_real_escape_string($conn,  $cidade);
	$cep = mysqli_real_escape_string($conn,  $cep);
	$telefone = mysqli_real_escape_string($conn,  $telefone);


	if($id && $nome && $rua && $complemento && $cidade && $cep && $telefone) {
		$sql = "INSERT INTO cliente (id, nome, rua, complemento, cidade, cep, telefone) VALUES (?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'sss', $id, $nome, $rua, $complemento, $cidade, $cep, $telefone);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function readClienteDb($conn) {
    $users = [];

	$sql = "SELECT * FROM cliente";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $users;
}

function updateClienteDb($conn, $id, $nome, $rua, $complemento, $cidade, $cep, $telefone) {
    if($id && $name && $email && $phone) {
		$sql = "UPDATE cliente SET nome = ?, rua = ?, complemento = ?, cidade = ?, cep = ?, telefone = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sssi', $nome, $rua, $complemento, $cidade, $cep, $telefone, $id);
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
