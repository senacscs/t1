<?php

require_once '../../../config.php';
require_once '../../actions/cliente.php';
require_once '../partials/header.php';

if(isset($_POST['id']))
    deleteClienteAction($conn, $_POST['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Cliente - Delete</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/cliente/delete.php" method="POST">
                <label>Do you really want to remove the user?</label>
                <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>

                <button class="btn btn-success text-white" type="submit">Yes</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>
