<?php

require_once '../../../config.php';
require_once '../../actions/pedido.php';
require_once '../partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    createPedidoAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Pedido - Create</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/pedido/create.php" method="POST">
                <label>Número Pedido</label>
                <input type="text" name="numero_pedido" />
                <label>Número do Cliente</label>
                <input type="email" name="numero_cliente" />
                <label>Nome e sobrenome</label>
                <input type="text" name="nome_e_sobrenome" required/>
                <label>Cidade Natal</label>
                <input type="text" name="cidade_natal" />
                <label>Região</label>
                <input type="text" name="região" />
                <label>Rua</label>
                <input type="text" name="rua" />
                <label>Cep</label>
                <input type="number" name="cep" required/>
                <label>Número da Residência</label>
                <input type="text" name="número_de_residência" />
                <label>E-mail</label>
                <input type="text" name="email"/>        
                <label>CPF</label>
                <input type="number" name="cpf" required/>   


                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

