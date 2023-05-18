<?php

require_once '../../../config.php';
require_once '../../actions/pagamento.php';
require_once '../partials/header.php';

if (isset($_POST["id"], $_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    updatePagamentoAction($conn, $_POST["id"], $_POST["name"], $_POST["email"], $_POST["phone"]);

$pagamento = findPagamentoAction($conn, $_GET['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Pagamento - Edit</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/pagamento/edit.php" method="POST">
                <input type="hidden" name="id" value="<?=$pagamento['id']?>" required/>
                <label>Pix</label>
                <input type="text" name="name" value="<?=htmlspecialchars($pagamento['name'])?>" required/>
                <label>Boleto</label>
                <input type="email" name="email" value="<?=htmlspecialchars($pagamento['email'])?>" required/>
                <label>Cartão</label>
                <input type="text" name="phone" value="<?=htmlspecialchars($pagamento['phone'])?>" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

