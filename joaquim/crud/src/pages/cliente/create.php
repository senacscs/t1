<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["id"]) && isset($_POST["nome"]) && isset($_POST["rua"]) && isset($_POST["complemento"]) && isset($_POST["cidade"]) && isset($_POST["cep"]) && isset($_POST["telefone"]) && isset($_POST["email"]))
    createClienteAction($conn, $_POST["nome"], $_POST["rua"], $_POST["complemento"], $_POST["cidade"], $_POST["cep"], $_POST["telefone"]), $_POST["email"];

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Criar Usuário</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/cliente/create.php" method="POST">
                <label>Nome</label>
                <input type="text" name="nome" required/>
                <label>Rua</label>
                <input type="email" name="rua" required/>
                <label>Complemento</label>
                <input type="text" name="complemento" required/>
                <label>Cidade</label>
                <input type="text" name="cidade" required/>
                <label>CEP</label>
                <input type="text" name="cep" required/>
                <label>Telefone</label>
                <input type="text" name="telefone" required/>
                <label>Email</label>
                <input type="email" name="email" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

