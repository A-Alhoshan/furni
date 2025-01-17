<?php  

  $pageTitle = "Shop Page";
  include 'init.php';

  include $includes . 'header.php';
  include $includes . 'navbar.php';

  ?>

  <?php
  
    global $conn;

   if (isset($_POST['approve_request'])  ) {


    $request_id = $_POST['request_id'];
    $furniture_id = $_POST['furniture_id'];

    
$sql = "UPDATE requests SET order_status = '1' WHERE id = $request_id";

// تنفيذ الكويري
$result = mysqli_query($conn, $sql);


$sql2 = "UPDATE furnitures SET item_status = '1' WHERE id = $furniture_id";


$result2 = mysqli_query($conn, $sql2);


    if ($result2) {
        header("Refresh:0");
exit();    

    }



   }
  
  
  ?>


    <section class="content section  container-mid" id="content" name="content">

        <div class="text-center">
            <h1 class="product-slider-title">Your Requests </h1>
            <p class="main_para"> Here is a list of your requests </p>
           
        </div>

        <div class="table-container mt-5">
            <table>
                <thead>
                    <tr>
                        <th> Name  </th>
                        <th> Phone </th>
                        <th> Furniture Name </th>
                        <th> Furniture Image </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
            <?php 
            
                 $table = "requests";
                 $requests = selectAll($table , [
                    'refere_id' => $_SESSION['id'],
                    'order_status' => 0
                 ] );

                 if (!empty($requests)) {

                   
                    foreach($requests as $req) { ?>

           
                    <tr>
                        <td> <?= $req['requester_name']  ?> </td>
                        <td> <?= $req['requester_phone']  ?> </td>
                        <td> <?= $req['furniture_name']  ?> </td>
                        <td> <img src="<?= BASE_URL . "/assets/uploads/" . $req['furniture_image']  ?>" alt="" class="icon_small"> </td>

                        <?php 
                         if ( $req['order_status'] == 0 ) { ?>
            <td> 
                <form action="" method="POST" >

                    <input type="hidden" value="<?= $req['id'] ?>" name="request_id"  >

                    <input type="hidden" value="<?= $req['furniture_id'] ?>" name="furniture_id"  >

                <button type="submit" name="approve_request" class="btn btn_main">Approve</button>
                </form>
        </td>
            
                        <?php }
                        
                        ?>
                        
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
                <h1>Retouches photo studio professionnel</h1>
                <h2>Quantité</h2>
                <p>x 800 photos</p>
                <h2>Prix</h2>
                <p>3200€/800 photos</p>
            </div>
            <div>
                <h1>Assistant photo lumière professionnel</h1>
                <h2>Quantité</h2>
                <p>x 2 sets studio</p>
                <h2>Prix</h2>
                <p>1500€/journée</p>
            </div>
        </div>
        
      

    </section>


<?php 

    include $includes . 'footer.php';

?>