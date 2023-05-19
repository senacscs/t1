<?php

require_once '../../../config.php';
require_once '../../actions/produtos.php';
require_once '../partials/header.php';

if (isset($_POST["id"], $_POST["nome"]) && isset($_POST["quantidade"]) && isset($_POST["valor"]))
    updateProdutosAction($conn, $_POST["id"], $_POST["nome"], $_POST["quantidade"], $_POST["valor"]);

$produtos = findProdutosAction($conn, $_GET['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Produtos - Edit</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/produtos/edit.php" method="POST">
                <input type="hidden" name="id" value="<?=$produtos['id']?>" required/>
                <label>Nome</label>
                <input type="text" name="nome" value="<?=htmlspecialchars($produtos['nome'])?>" required/>
                <label>Quantidade</label>
                <input type="text" name="quantidade" value="<?=htmlspecialchars($produtos['quantidade'])?>" required/>
                <label>Valor</label>
                <input type="text" name="valor" value="<?=htmlspecialchars($produtos['valor'])?>" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

