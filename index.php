<?php  

  $pageTitle = "Home Page";
  include 'init.php';

  include $includes . 'header.php';
  include $includes . 'navbar-index.php';

  ?>




    <home class="home" id="home">
        <section class="title" id="title">
        Start now, display your furniture and donate it
        </section>
        <section class="subtitle" id="subtitle">
        Donating furniture has become easier through our website, which allows you to showcase your furniture to interested parties and receive requests quickly and efficiently.
        </section>
        <section class="search-bar">

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
    
        </form>  <!-- واجب ودود كم سطر فوق -->
           
        </section>
    </home>

    <section class="content" id="content" name="content">

        <div class="why-us" id="why-us">
            <div class="row">
                <div class="column1">
                    <span class="why-title">
                        How </span>
                    <span class="why-title">
                        It Works? </span>
                </div>
                <div class="column">
                    <div class="column-title">
                      Search </div>
                    <p class="column-sub"> By using search ability you can now search for any furniture that may interest you. </p>
                    <p class="more-info">More info ---></p>
                </div>
                <div class="column">
                    <div class="column-title"> Select One </div>
                    <p class="column-sub"> After seeing the images of the selected item you can now apply for it and request it. </p>
                    <p class="more-info">More info ---></p>
                </div>
                <div class="column">
                    <div class="column-title"> Contact </div>
                    <p class="column-sub"> 
                    After approval you can now contact the donor and talk to him so you and his number will show up.
                    </p>
                    <p class="more-info">More info ---></p>
                </div>

            </div>


        </div>

        <div class="product-slider" id="product-slider">
            <div class="product-slider-title" id="product-slider-title">
              Recentely Added Furnitures
            </div>
            
            <div class="glider-contain">
                <div class="glider">

                <?php  
                 $table = "furnitures";
                 $furnitures = selectAll($table , [] , true , 10 );

                 if (!empty($furnitures)) {

                   
                    foreach($furnitures as $furn) { ?>


                
                <div class="product-card" id="product-card">

                    <a href="single_furniture.php?furniture_id=<?= $furn['id'] ?>">

                    <div class="product-img" id="product-img">
                            <img src="<?= $furn['furniture_image'] ?  BASE_URL . "/assets/uploads/" . $furn['furniture_image'] : $imgAssets . '/char.png' ?>" alt="armchair">

                        </div>

                    </a>
                      

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

                <button aria-label="Previous" class="glider-prev">
                    <div class="circle-chevron" id="circle-chevron">
                        <i class="fa fa-chevron-left"></i>
                    </div>
                </button>
                <button aria-label="Next" class="glider-next">
                    <div class="circle-chevron" id="circle-chevron">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </button>
                <div role="tablist" class="dots"></div>
            </div>
            <div class="view-all"><span class="view">View all &nbsp;</span> <span><img src="<?= $imgAssets ?>/long-arrow.svg"
                        alt="long arrow"></span></div>
        </div>


        <div class="experience" id="experience">
            <div class="exp-img" id="exp-img">

                <div class="exp-img-left" id="exp-img-left">
                    <img src="<?= $imgAssets ?>/exp-img.jpg" alt="exp img">
                    <div class="back-grey1" id="back-grey1">

                    </div>
                    <div class="back-grey2" id="backgrey2">

                    </div>
                    <div class="back-grey3" id="backgrey3">

                    </div>
                </div>
            </div>
            <div class="exp-text" id="exp-text">
                <p class="experiences">Experiences</p>
                <p class="why-title">We provide you <br>the best experience</p>
                <p class="column-sub2"> Our platform ensures a hassle-free furniture donation experience by connecting you directly with interested parties, making communication and successful completion of the deal a breeze. </p>
                <p class="more-info">More info ---></p>
            </div>
        </div>

        <div class=" materials" id="materials">
            <div class="mat-text" id="mat-text">
                <p class="experiences">MORE FURNITURES</p>
                <p class="why-title"> Our website <br> alwasys has the ability <br> to provide more interaction </p>
                <p class="column-sub2"> See all the images and products on out site and enojoy beatiful scolling experience </p>
                <p class="more-info">More info ---></p>
            </div>
            <div class="mat-img" id="mat-img">
                <div class="mat-img-right" id="mat-img-right">
                    <div class="mat-img-right-parent" id="mat-img-right-parent">
                        <img src="<?= $imgAssets ?>/mat-img.jpg" alt="mat img">
                        <div class="mat-img-right-blur" id="mat-img-right-blur">
                            <img src="<?= $imgAssets ?>/mat-img.jpg" alt="mat blur img">
                        </div>
                        <div class="back-grey4" id="back-grey4">

                        </div>
                    </div>
                </div>
                <div class="mat-img-left" id="mat-img-left">
                    <div class="up-img" id="up-img">
                        <img src="<?= $imgAssets ?>/up-img.png" alt="up img">
                        <div class="up-img-blur" id="up-img-blur">
                            <img src="<?= $imgAssets ?>/up-img.png" alt="up img">
                        </div>
                    </div>
                    <div class="down-img" id="down-img">
                        <img src="<?= $imgAssets ?>/down-img.png" alt="down img">
                        <div class="down-img-blur" id="down-img-blur">
                            <img src="<?= $imgAssets ?>/down-img.png" alt="down img">
                        </div>
                    </div>

                </div>
            </div>
        </div>


     
    </section>


    <?php 

include $includes . 'footer.php';

?>