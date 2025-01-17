<?php  

    //ذا الملف سويته بس ماستخدمته
   
  $pageTitle = "404 Page";
  include 'init.php';
  include $includes . 'header.php';
  include $includes . 'navbar.php';
  ?>




    <section class="content section  container-mid" id="content" name="content">
        <div class="text-center">
            <img src="<?= $imgAssets ?>/error-404.png" alt="" class="iconic_icon">
            <h1 class="why-title mt-1"> The Page You Are Looking Doesn't Exist </h1>
            <p class="main_para mt-1"> Try visiting another route </p>
            <p class="more-info mt-1">More info ---></p>
        </div>
    </section>

    <?php
include $includes . 'footer.php';
?>