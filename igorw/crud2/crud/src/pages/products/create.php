<?php

require_once '../../../config.php';
require_once '../../actions/products.php';
require_once '../partials/header.php';

if (isset($_POST["manufactory"]) && isset($_POST["model"]) && isset($_POST["vendor"])&& isset($_POST["cost"]) && isset($_POST["storage"]) && isset($_POST["description"]))
    createProductsAction($conn, $_POST["manufactory"], $_POST["model"], $_POST["vendor"], $_POST["cost"], $_POST["storage"], $_POST["description"]);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Products - Create</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/products/create.php" method="POST">
                <label>Manufactory*</label>
                <input type="text" name="manufactory" required/>
                <label>Model*</label>
                <input type="text" name="model" required/>
                <label>vendor</label>
                <input type="text" name="vendor"/>
                <label>Cost*</label>
                <input type="text" name="cost" required/>             
                <label>Storage*</label>
                <input type="number" name="storage" required/>                   
                <label>Description</label>
                <input type="textarea" name="description"/>                

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

