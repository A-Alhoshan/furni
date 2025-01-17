<?php  

  $pageTitle = "Admin Page";
  include 'init.php';

  include $includes . 'header.php';
  include $includes . 'navbar.php';

  ?>

<?php 

$userId = $_SESSION['id'];

$userId = isset($userId) && is_numeric($userId) ? intval($userId) : 0;

if ($userId == 0  ) {
    header("location: " . BASE_URL . "/index.php"); 
    exit();    
}


?>


    <section class="content  container-sm" id="content" name="content">

  

    <div class="experience" id="experience">
        <div class="exp-img" id="exp-img">

            <div class="exp-img-left mt-5" id="exp-img-left">
                <img src="<?= $imgAssets ?>/Rectangle1441.png" alt="exp img">
                <div class="back-grey1" id="back-grey1">

                </div>
                <div class="back-grey2" id="backgrey2">

                </div>
                <div class="back-grey3" id="backgrey3">

                </div>
            </div>
        </div>
        <div class="exp-text" id="exp-text">
            
                <div  class="main_form mt-5" >
        
                    <div class="action_form_div">

                    <a href="add_furniture.php">
                    <button class="btn btn_main w-100"> Add Furinture </button>
                    </a>
                        
                      
                          
                    </div>
        
                    <div class="action_form_div">

                    <a href="edit-furnitures.php">
                    <button class="btn btn_secondary w-100"> Edit Furintures </button>
                    </a>
                        
                       
                            
                    </div>
        
                    <div class="action_form_div">
                        
                    <a href="edit-users.php">
                    <button class="btn btn_main w-100"> Edit Users </button>
                    </a>
                        
                        
                            
                    </div>
        
                 
            


                   
            
                </div>
           
        </div>
    </div>
  

    </section>


   <?php

include $includes . 'footer.php';

?>