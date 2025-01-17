<?php  
  $pageTitle = "Signup Page";
  include 'init.php';
  include $includes . 'header.php';
  include $includes . 'navbar.php';
  ?>
<?php  
    $table = "users";
if (isset($_POST['signup_user']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST['user_group_id'] = 0;   
    singUpUser($_POST , $table);
}
?>

    <section class="content section container-sm" id="content" name="content">

  

    <div class="experience" id="experience">
        <div class="exp-img" id="exp-img">

            <div class="exp-img-left mt-5" id="exp-img-left">
                <img src="<?= $imgAssets ?>/mat-img.jpg" alt="exp img">
                <div class="back-grey1" id="back-grey1">

                </div>
                <div class="back-grey2" id="backgrey2">

                </div>
                <div class="back-grey3" id="backgrey3">

                </div>
            </div>
        </div>
        <div class="exp-text" id="exp-text">
            
                <form action="" method="POST" class="main_form" >
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Full Name</label>
                            <input type="text" name="full_name" placeholder="Enter your full name..." class="input_form">
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Age </label>
                            <input type="text" name="age" placeholder="Enter your age..." class="input_form">
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center"> Phone Number </label>
                            <input type="number" name="phone_number" placeholder="Enter your phone number..." class="input_form">
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center"> Sign As </label>
                            <select name="sign_as" id="" class="input_form" >
                                <option value="0"> Beneficiary </option>
                                <option value="1"> Donaitor </option>
                            </select>
                          
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Email</label>
                            <input type="email" name="email" placeholder="Enter your email..." class="input_form">
                    </div>
            
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center"> Password </label>
                            <input type="password" name="password" placeholder="Enter your password..." class="input_form">
                    </div>

                    <button type="submit" class="btn btn_main" name="signup_user" >  Submit </button>
            
                </form>
           
        </div>
    </div>
  

    </section>

   
   <?php 
    include $includes . 'footer.php';
   ?>