<?php  

  $pageTitle = "Profile Page";
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

$selectedUser = selectOne("users" , array(
    'id' => $userId
) );

?>


<?php  

 



if (isset($_POST['edit_profile']) && $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    global $errors;
    $table = "users";
    
  $checkArrays = [];

 
    $checkArrays = [
      'full_name' => 'Full Name ' , 
      'email' => 'Email ' ,
        'phone_number' => 'Phone Number ' ,
        'age' => 'Age ',


      ];
 

  

 $errors = validatePost($_POST , $checkArrays , $table , 'email' );

 if (count($errors) == 0) {
  
    global $conn;

  
    if ($userId > 0) {
    
        unset($_POST['edit_profile']);

  

      if (isset($_POST['password'])) {
        $_POST['password'] = sha1($_POST['password']);
      }

      if (empty($_POST['password'])) {
        unset($_POST['password']);
      }
   
    
        // UPDATE ACTUAVL TABLE
        $post_id = update($table, $userId , $_POST , 'id');

     

        header("Refresh: 0");

        exit(); 
    } 
   
} 

   }



?>




    <section class="content section container-big " id="content" name="content">

      

    <div class="flex-col" id="experience">
     
        <img src="<?= $imgAssets ?>/user.png" alt="" class="icon_mid ">
        <h1 class="product-slider-title "> Welcome <?= $_SESSION['username'] ?> </h1>
            <p class="main_para"> This is your profile page </p>

        <div class="" id="exp-text">
            
        <?php 
        
        include $includes . 'form-errors.php';
        ?>
                
        <form  method="POST" >

      
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Full Name</label>
                            <input type="text" name="full_name" placeholder="Enter your full name..." class="input_form"  value="<?= $selectedUser['full_name'] ?>" >
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Age </label>
                            <input type="text" name="age" placeholder="Enter your age..." class="input_form"  value="<?= $selectedUser['age'] ?>" >
                    </div>

                    <div class="action_form_div">
            
            <label for="" class="label_form text-center"> Phone Number </label>
            <input type="number" name="phone_number" placeholder="Enter your age..." class="input_form"  value="<?= $selectedUser['phone_number'] ?>" >
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Email</label>
                            <input type="email" name="email" placeholder="Enter your email..." class="input_form"  value="<?= $selectedUser['email'] ?>" >
                    </div>
            
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Password </label>
                            <input type="password" name="password" placeholder="Enter your password..." class="input_form"   >
                    </div>
            
                   
                     
                        <button type="submit" class="btn btn_main" name="edit_profile" > Edit  </button>

                        </form>
                      
                   
            
                
           
        </div>
    </div>
  

    </section>






<?php

include $includes . 'footer.php';

?>