<!DOCTYPE HTML>
<html lang = "pt-br">
    <head>
        <title> Exemplo</title>
        <meta charset = "UTF-8">
    </head>

    <body>

    <?php


session_start(); //Inicializar a sessão
//Incluir a conexão com o banco de dados
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Votacao</title>
	</head>
	<body>
		<!-- Criar o titulo usando a tag <h1> do HTML -->
		<h1>Listar</h1>
		<?php
		//Imprimir a mensagem de voto recebido co sucesso
		if(isset($_SESSION['msg'])){
			//Imprimir o valor da sessão
			echo $_SESSION['msg'];
			//Destruir a sessão com PHP
			unset($_SESSION['msg']);
		}
		//Criar a QUERY para pesquisar os produtos no banco de dados
		$result_produto = "SELECT * FROM produtos";
		//Executar a QUERY para pesquisar os produtos no banco de dados com o MySQLi
		$resultado_produto = mysqli_query($conn, $result_produto);
		
		//Usar o while para percorrer os dados trazidos do banco de dados
		while($row_produto = mysqli_fetch_assoc($resultado_produto)){
			//Imprimir o ID do produto salvo no banco de dados
			echo "Número do produto:  " . $row_produto['id'] . "<br>";
			//Imprimir o nome do produto salvo no banco de dados
			echo "Nome do produto:  " . $row_produto['nome'] . "<br>";
			//Imprimir a quantidade de votos que o produto tem salvo no banco de dados
			echo "Quantidade de voto:  " . $row_produto['qnt_voto'] . "<br>";
			//Criar o link para o usuário poder votar no produto
			echo "<a href='votar.php?id=".$row_produto['id']."'>Votar</a><br><hr>";
		}
        ?>      
 

    </body>

</html>