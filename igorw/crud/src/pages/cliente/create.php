<?php

require_once '../../../config.php';
require_once '../../actions/cliente.php';
require_once '../partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["cpf"]) && isset($_POST["data_nascimento"]) && isset($_POST["cep"]))
    createClienteAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"], $_POST["cpf"], $_POST["data_nascimento"], $_POST["cep"]);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Cliente - Create</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/cliente/create.php" method="POST">
                <label>Nome Completo</label>
                <input type="text" name="name" required/>
                <label>E-mail</label>
                <input type="email" name="email" required/>
                <label>Telefone</label>
                <input type="text" name="phone" required/>
                <label>CPF</label>
                <input type="text" name="cpf" required/>
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento" required/>
                <label>CEP</label>
                <input type="text" name="cep"/>
                

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

