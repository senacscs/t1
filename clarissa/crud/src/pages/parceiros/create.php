<?php

require_once '../../../config.php';
require_once '../../actions/parceiros.php';
require_once '../partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    createParceirosAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Parceiros - Create</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/parceiros/create.php" method="POST">
                <label>Internacional</label>
                <input type="text" name="name" />
                <label>Nacional</label>
                <input type="text" name="email" />
                

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../partials/footer.php'; ?>

