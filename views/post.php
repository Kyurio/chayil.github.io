<?php
require_once("../templates/header.php");
?>
<br><br><br>
<div class="container mt-5 mb-5 py-5 mx5">

    <div v-for="item in posts" class="p-5 mb-4 mt-5 rounded-3 card-dark">
        <div class="container-fluid py-5 ">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
    </div>

</div>


<?php
require_once("../templates/footer.php");
?>
