<?php

require_once '../../../config.php';
require_once '../../actions/pedido.php';
require_once '../partials/header.php';

if (isset($_POST["id"], $_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    updatePedidoAction($conn, $_POST["id"], $_POST["name"], $_POST["email"], $_POST["phone"]);

$pedido = findPedidoAction($conn, $_GET['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Pedidos - Edit</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/pedido/edit.php" method="POST">
                <input type="hidden" name="id" value="<?=$pedido['id']?>" required/>
                <label>Número do Pedido</label>      
                <input type="text" name="numero_pedido" value="<?=htmlspecialchars($pedido['number'])?>" />
                <label>Número do Cliente</label>
                <input type="email" name="numero_cliente" value="<?=htmlspecialchars($pedido['number'])?>" />
                <label>Nome e Sobrenome</label>
                <input type="text" name="nome_e_sobrenome" value="<?=htmlspecialchars($pedido['text'])?>" required/>
                <label>Cidade Natal</label>
                <input type="text" name="nome_e_sobrenome" value="<?=htmlspecialchars($pedido['text'])?>" />
                <label>Região</label>
                <input type="text" name="região" value="<?=htmlspecialchars($pedido['text'])?>" />
                <label>Rua</label>
                <input type="email" name="rua" value="<?=htmlspecialchars($pedido['text'])?>" />
                <label>Cep</label>
                <input type="text" name="cep" value="<?=htmlspecialchars($pedido['number'])?>" />
                <label>Número da Residência</label>
                <input type="text" name="número_de_residência" value="<?=htmlspecialchars($pedido['number'])?>" required/>
                <label>E-mail</label>
                <input type="text" name="e-mail" value="<?=htmlspecialchars($pedido['text'])?>" />
                <label>CPF</label>
                <input type="text" name="cpf" value="<?=htmlspecialchars($pedido['number'])?>" required/>



                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

