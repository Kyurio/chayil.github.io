<?php
    require_once("../templates/header.php");
?>
<main>
    <div id="app">
        <?php
            require_once("../components/sections/spam.php");
        ?>
        <!-- contacto -->
        <?php
            require_once("../components/sections/contact.php");
        ?>
        <!-- footer -->
        <?php
            require_once("../components/others/footer.php");
        ?>
    </div>
</main>
<?php
    require_once("../templates/footer.php");
?>
