<?php  

  $pageTitle = "Home Page";
  include 'init.php';

  include  $includes . 'header.php';
  include  $includes . 'navbar.php';

  ?>
    

    <?php  


 
if (isset($_POST['login_user']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $checkConds = array(
      'email' => 'User Email',
      'password' => 'User Password'
    );
  signInUser($_POST , $checkConds , 'users' , 'email');
}

?>





    <section class="content  container-sm" id="content" name="content">


    <div class="experience section" id="experience">
        <div class="exp-img" id="exp-img">

            <div class="exp-img-left mt-5" id="exp-img-left">
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
            
                <form action="" class="main_form" method="post" >
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Email</label>
                            <input type="email" name="email" placeholder="Enter your email..." class="input_form">
                    </div>
            
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center"> Password </label>
                            <input type="password" name="password" placeholder="Enter your password..." class="input_form">
                    </div>

                    <button type="submit" name="login_user" class="btn btn_main" >  Submit </button>
            
                </form>
           
        </div>
    </div>
  

    </section>



   
    <?php 

include $includes . 'footer.php';

?>