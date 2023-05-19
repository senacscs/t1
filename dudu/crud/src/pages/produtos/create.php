<?php

require_once '../../../config.php';
require_once '../../actions/produtos.php';
require_once '../partials/header.php';

if (isset($_POST["nome"]) && isset($_POST["quantidade"]) && isset($_POST["valor"]))
    createProdutosAction($conn, $_POST["nome"], $_POST["quantidade"], $_POST["valor"]);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Produtos - Create</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/produtos/create.php" method="POST">
                <label>Nome</label>
                <input type="text" name="nome" required/>
                <label>Quantidade</label>
                <input type="number" name="quantidade" required/>
                <label>Valor</label>
                <input type="price" name="valor" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

