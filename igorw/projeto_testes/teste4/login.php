<?php
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$_usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$_senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT  usuario_id, usuario WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row  = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
}else{
    header('Location: index.php');
    exit;
}

?>