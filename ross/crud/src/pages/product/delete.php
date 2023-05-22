<?php

require_once '../../../config.php';
require_once '../../actions/product.php';
require_once '../partials/header.php';

if(isset($_POST['id']))
    deleteproductAction($conn, $_POST['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>product - Delete</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/product/delete.php" method="POST">
                <label>Do you really want to remove the product?</label>
                <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>

                <button class="btn btn-success text-white" type="submit">Yes</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>
