<?php

require_once '../../../config.php';
require_once '../../actions/produtos.php';
require_once '../partials/header.php';

if (isset($_POST["produto"]) && isset($_POST["quantidade"]) && isset($_POST["valor"]))
    createUserAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Produtos - Create</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/produtos/create.php" method="POST">
                <label>Base</label>
                <input type="text" name="base" required/>
                <label>Foguete</label>
                <input type="email" name="foguete" required/>
                <label>Roupas</label>
                <input type="text" name="roupas" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

