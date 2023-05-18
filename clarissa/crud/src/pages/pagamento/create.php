<?php

require_once '../../../config.php';
require_once '../../actions/pagamento.php';
require_once '../partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    createPagamentoAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Pagamento - Create</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/pagamento/create.php" method="POST">
                <label>Pix</label>
                <input type="text" name="name" />
                <label>Boleto</label>
                <input type="text" name="name" />
                <label>Cartão</label>
                <input type="text" name="name" />
                

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

