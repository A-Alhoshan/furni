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


    

    <section class="content section container-big " id="content" name="content">

      

    <div class="flex-col" id="experience">
     
        <img src="<?= $imgAssets ?>/user.png" alt="" class="icon_mid ">
        <h1 class="product-slider-title "> Welcome <?= $_SESSION['username'] ?> </h1>
            <p class="main_para"> This is your profile page </p>

            
            <?php 
            
            if ($selectedUser['sign_as'] === 1) { ?>

                <a href="add_furniture.php"  >
                    <button class="btn btn_secondary w-100 mt-1"> Add Furinture </button>
                    </a>
                   
            
            <a href="requests.php">
                    <button class="btn btn_main w-100 mt-1"> See Requests </button>
                    </a>
        <?php    }

        else { ?>

        <h1 class="product-slider-title text-right"> Your Requests </h1>
<div class="table-container mt-5">
            <table>
                <thead>
                    <tr>
                        <th>  Your Phone </th>
                        <th>  Donaitor Name </th>
                        <th>  Donaitor Phone </th>
                        
                        <th> Furniture Name </th>
                        <th> Furniture Image </th>
                   
                    </tr>
                </thead>
                <tbody>
            <?php 
            
                 $table = "requests";
                 $requests = selectAll($table , [
                    'requester_phone' => $_SESSION['phone_number'],
                    'order_status' => 1
                 ] );

                 if (!empty($requests)) {

                   
                    foreach($requests as $req) {
                        
                        $donaitorInfo = selectOne("users" , [
                                'id' => $req['refere_id']
                        ]); 

                       

                        ?>

           
                    <tr>
                        <td> <?= $req['requester_phone']  ?> </td>
                        <td> <?= $donaitorInfo['full_name'] ?> </td>
                        <td> <?= $donaitorInfo['phone_number'] ?> </td>
                        <td> <?= $req['furniture_name']  ?> </td>
                        <td> <img src="<?= BASE_URL . "/assets/uploads/" . $req['furniture_image']  ?>" alt="" class="icon_small"> </td>

                       
                        
                    </tr>

            <?php 
            
                    }

                }
            
            ?>
                   
                </tbody>
            </table>
        </div>
        <div class="responsive-container">
            <div>
                <h1>l</h1>
                <h2></h2>
                <p></p>
                <h2></h2>
                <p></p>
            </div>
            <div>
                <h1></h1>
                <h2></h2>
                <p></p>
                <h2></h2>
                <p></p>
            </div>
        </div>

      <?php  }
            ?>

        

                   


        <div class="" id="exp-text">
            
                
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Full Name</label>
                            <input type="text"  placeholder="Enter your full name..." class="input_form" readonly value="<?= $selectedUser['full_name'] ?>" >
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Age </label>
                            <input type="text" placeholder="Enter your age..." class="input_form" readonly value="<?= $selectedUser['age'] ?>" >
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center"> Phone Number </label>
                            <input type="text" placeholder="Enter your age..." class="input_form" readonly value="<?= $selectedUser['phone_number'] ?>" >
                    </div>
        
                    <div class="action_form_div">
            
                            <label for="" class="label_form text-center">Email</label>
                            <input type="email" placeholder="Enter your email..." class="input_form" readonly value="<?= $selectedUser['email'] ?>" >
                    </div>
            
                   
                        <a href="edit-profile.php">
                        <button  class="btn btn_main" > Edit Profile </button>
                        </a>
                   
            
                
           
        </div>
    </div>
  

    </section>





<?php

include $includes . 'footer.php';

?>