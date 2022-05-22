<?php
require_once("../templates/header.php");
?>

<section id="Home">
  <?php
    require_once("../components/sections/home.php");
  ?>
</section>

<section id="Spam">
  <?php
    require_once("../components/sections/spam.php");
  ?>
</section>

<section id="Nosotros">
  <?php
    require_once("../components/sections/about.php");
  ?>
</section>

<section id="Servicios">
  <?php
    require_once("../components/sections/comments.php");
  ?>
</section>

<section id="Servicios">
  <?php
    require_once("../components/sections/services.php");
  ?>
</section>

<section id="Noticias">
  <?php
    require_once("../components/sections/news.php");
  ?>
</section>

<section id="Contacto">
  <?php
    require_once("../components/sections/contact.php");
  ?>
</section>


<?php
require_once("../templates/footer.php");
?>
