<?php  
  $pageTitle = "Apologize Page";
  include 'init.php';
  include $includes . 'header.php';
  include $includes . 'navbar.php';
  ?>
    <section class="content section  container-mid" id="content" name="content">
        <div class="text-center">
            <img src="<?= $imgAssets ?>/sorry.png" alt="" class="iconic_icon">
            <h1 class="why-title mt-1"> We Are Sorry </h1>
            <p class="main_para mt-1">This furniture is no longer avaliable </p> <!-- غالبًا يعني>
            <p class="more-info mt-1">More info ---></p>
        </div>
    </section>
<?php
include $includes . 'footer.php';
?>