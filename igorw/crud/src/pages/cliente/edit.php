<?php

require_once '../../../config.php';
require_once '../../actions/cliente.php';
require_once '../partials/header.php';

if (isset($_POST["id"], $_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["cpf"]) && isset($_POST["data_nascimento"]) && isset($_POST["cep"]))
    updateClienteAction($conn, $_POST["id"], $_POST["name"], $_POST["email"], $_POST["phone"], $_POST["cpf"], $_POST["data_nascimento"], $_POST["cep"]);

$cliente = findClienteAction($conn, $_GET['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Clientes - Edit</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/cliente/edit.php" method="POST">
                <input type="hidden" name="id" value="<?=$cliente['id']?>" required/>
                <label>Nome Completo</label>
                <input type="text" name="name" value="<?=htmlspecialchars($cliente['name'])?>" required/>
                <label>E-mail</label>
                <input type="email" name="email" value="<?=htmlspecialchars($cliente['email'])?>" required/>
                <label>Phone</label>
                <input type="text" name="phone" value="<?=htmlspecialchars($clienet['phone'])?>" required/>
                <label>CPF</label>
                <input type="text" name="cpf" value="<?=htmlspecialchars($clienet['cpf'])?>" required/>
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento" value="<?=htmlspecialchars($clienet['data_nascimento'])?>" required/>
                <label>CEP</label>
                <input type="text" name="cep" value="<?=htmlspecialchars($clienet['cep'])?>"/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

