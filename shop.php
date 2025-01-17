<?php  

  $pageTitle = "Shop Page";
  include 'init.php';

  include $includes . 'header.php';
  include $includes . 'navbar.php';

  ?>



    <section class="content section  container-mid" id="content" name="content">

        <div class="text-center">
            <h1 class="product-slider-title"> Explore With Us </h1>
            <p class="main_para">You don’t have to worry about the result because all of these interiors are made
                by people who are professionals in their fields with an elegant and lucurious style and with premium
                quality materials</p>
            <p class="more-info mt-1">More info ---></p>
        </div>
<!-- اول-->
        <form action="search-page.php" method="GET" >
            <div class="d-flex-c">

            <div>
                <input type="search" name="search_term" id="search" class="search" placeholder="Search furniture">
            </div>
            <div class="circle">

            <button type="submit" class="btn" >
                <img src="<?= $imgAssets . '/magnifier.png' ?>" alt="" class="icon_small">
             </button>
            </div> 

            </div> 
    
        </form> <!-- اخير -->
        <div class="grid_products_main mt-5">

        <?php  
                 $table = "furnitures";
                 $furnitures = selectAll($table , [] , true , 10 );

                 if (!empty($furnitures)) {

                   
                    foreach($furnitures as $furn) { ?>


                <div class="product-card" id="product-card">
                <div class="product-img" id="product-img">
                    <img src="<?= $furn['furniture_image'] ?  BASE_URL . "/assets/uploads/" . $furn['furniture_image'] : $imgAssets . '/char.png' ?>" alt="armchair" class="iconic_img">

                </div>

                <div class="product-card-bottom" id="product-card-bottom">
                   
                    <div class="product-title" id="product-title">
                    <?= $furn['furniture_name'] ?>
                    </div>

                    <p class="main_para">
                    <?= $furn['furniture_desc'] ?>
                    </p>

                    <div class="star-rating mt-2" id="star-rating">
                                <?php 
                                for ( $i = 0; $i < $furn['furniture_stars']; $i++ ) { ?>
 <img src="<?= $imgAssets . '/star.png' ?>" class="icon_smaller" alt="">
                            <?php    }
                                ?>
                              
                            </div>

                   

                </div>
            </div>  
                      <?php  }
                 }
           
               ?>



        </div>
        
      

    </section>

<?php 

    include $includes . 'footer.php';

?>