<?php session_start()?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <title>ECOmércio</title>
</head>

<body>

    <?php 
    
    if(!isset($_SESSION['login'])){

        if (!isset($_POST['acao'])) {
            $login = 'Igor';
            $senha = '1234';
    
            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];

            if($login == $loginForm && $senha == $senhaForm){
                //logado com sucesso
                $_SESSION['login'] = $login;
                header('location: index.php');
            }else{
                //erro ocorreu
                echo 'Dados Inválidos';
            }

        }


            include('login.php');
        }else{
            include('sobre/index.html');
        }
    
    ?>
</body>

</html>