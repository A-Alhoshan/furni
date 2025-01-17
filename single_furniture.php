<?php  

  $pageTitle = "Single Furniture Page";
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



$furnitureId = isset($_GET['furniture_id']) && is_numeric($_GET['furniture_id']) ? intval($_GET['furniture_id']) : 0;

   

    $singleFurniture = selectOne("furnitures" , [
        "id" => $furnitureId
    ]);

    if ($singleFurniture['item_status'] === 1) {
        header("location: " . BASE_URL . "/apologize.php"); 
        exit();    
    }
      
    ?>

    
<?php  

    
if (isset($_POST['add_request'])) {

    $table = "requests";
    global $errors;

    $requestArray = [
        'requester_name' => $_SESSION['username'] ,
        'requester_phone' => $_SESSION['phone_number'] ,
        'furniture_name' => $_POST['furniture_name'] ,
        'furniture_image' => $_POST['furniture_image'] ,
        'furniture_id' => $_POST['furniture_id'] ,
        'refere_id' => $_POST['refere_id'] ,

    ];

    


if (count($errors) == 0) {
    global $conn;
    unset($_POST['add_request']);


    
    $service_id = create($table, $requestArray);

header("location: " . BASE_URL . "/index.php"); 
exit();    

} 
}

?>


    <!-----LOGIN STARTS Here-->

    <section class="content  section container-sm" id="content" name="content">

        
        <div class="grid_product">

            <div class="image_div">

                <div class="d-flex">
                    <div>
                        <img src="<?= $singleFurniture['preview_one'] ?   $singleFurniture['preview_one'] : $imgAssets . '/char.png' ?>" alt="" class="preview_image">

                        <img src="<?= $singleFurniture['preview_two'] ?  $singleFurniture['preview_two'] : $imgAssets . '/char2.png' ?>" alt="" class="preview_image">

                        <img src="<?= $singleFurniture['preview_three'] ?   $singleFurniture['preview_three'] : $imgAssets . '/char3.png' ?>" alt="" class="preview_image">

                        <img src="<?= $singleFurniture['preview_four'] ?   $singleFurniture['preview_four'] : $imgAssets . '/char4.png' ?>" alt="" class="preview_image">
                        
                    </div>
                  

                    <img src="<?= $singleFurniture['furniture_image'] ?  BASE_URL . "/assets/uploads/" . $singleFurniture['furniture_image'] : $imgAssets . '/test1.jpg' ?>" class="main_image" alt="">
                </div>      
            </div>
            <div class="content_div">
                <h1 class="column-title mt-5"> <?= $singleFurniture['furniture_name'] ?> </h1>
                <p class="main_para mt-1"> <?= $singleFurniture['furniture_desc'] ?> </p>
                <form action="" method="POST" >
                <input type="hidden" value="<?= $singleFurniture['furniture_name'] ?>" name="furniture_name" >

                <input type="hidden" value="<?= $singleFurniture['furniture_image'] ?>" name="furniture_image" >

                <input type="hidden" value="<?= $singleFurniture['id'] ?>" name="furniture_id" >

                <input type="hidden" value="<?= $singleFurniture['refere_id'] ?>" name="refere_id" >
               
                <button type="submit" name="add_request" class="btn btn_main mt-1">Send An Intrest Request</button>
                </form>
            </div>
        </div>
    </section>
<?php 
include $includes . 'footer.php';

?>