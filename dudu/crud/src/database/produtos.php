<?php

function findProdutosDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
	$produtos;

	$sql = "SELECT * FROM produtos  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);
	
	$produtos = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $produtos;
}

function createProdutosDb($conn, $nome, $quantidade, $valor) {
	$nome = mysqli_real_escape_string($conn, $nome);
	$quantidade = mysqli_real_escape_string($conn,  $quantidade);
	$valor = mysqli_real_escape_string($conn,  $valor);

	if($nome && $quantidade && $valor) {
		$sql = "INSERT INTO produtos (nome, quantidade, valor) VALUES (?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)) 
			exit('SQL error');
		
		mysqli_stmt_bind_param($stmt, 'sss', $nome, $quantidade, $valor);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function readProdutosDb($conn) {
    $produtos = [];

	$sql = "SELECT * FROM produtos";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);
	
	if($result_check > 0)
		$produtos = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $produtos;
}

function updateProdutosDb($conn, $id, $nome, $quantidade, $valor) {
    if($id && $nome && $quantidade && $valor) {
		$sql = "UPDATE produtos SET nome = ?, quantidade = ?, valor = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sssi', $nome, $quantidade, $valor, $id);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deleteProdutosDb($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);

	if($id) {
		$sql = "DELETE FROM produtos WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
