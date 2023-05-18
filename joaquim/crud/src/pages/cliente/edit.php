<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["id"], $_POST["nome"]) && isset($_POST["rua"]) && isset($_POST["complemento"]) && isset($_POST["cidade"]) && isset($_POST["cep"]) && isset($_POST["telefone"]) && isset($_POST["email"]))
    updateClienteAction($conn, $_POST["id"], $_POST["nome"], $_POST["rua"], $_POST["complemento"], $_POST["cidade"], $_POST["cep"], $_POST["telefone"], $_POST["email"];

$user = findUserAction($conn, $_GET['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Editar Usuário</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/user/edit.php" method="POST">
                <input type="hidden" name="id" value="<?=$user['id']?>" required/>
                <label>Nome</label>
                <input type="text" name="nome" value="<?=htmlspecialchars($user['nome'])?>" required/>
                <label>Rua</label>
                <input type="text" name="rua" value="<?=htmlspecialchars($user['rua'])?>" required/>
                <label>Complemento</label>
                <input type="text" name="complemento" value="<?=htmlspecialchars($user['complemento'])?>" required/>
                <label>Cidade</label>
                <input type="text" name="cidade" value="<?=htmlspecialchars($user['cidade'])?>" required/>
                <label>CEP</label>
                <input type="text" name="cep" value="<?=htmlspecialchars($user['cep'])?>" required/>
                <label>Telefone</label>
                <input type="text" name="telefone" value="<?=htmlspecialchars($user['telefone'])?>" required/>
                <label>Email</label>
                <input type="email" name="name" value="<?=htmlspecialchars($user['email'])?>" required/>

                <button class="btn btn-success text-white" type="submit">Salvar</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

