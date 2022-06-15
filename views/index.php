<?php
    require_once("../templates/header.php");
?>
<main>
    <div id="app">
        <?php
            require_once("../components/sections/home.php");
        ?>
        <?php
            require_once("../components/sections/spam.php");
        ?>
        <!-- services -->
        <?php
            require_once("../components/sections/services.php");
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
