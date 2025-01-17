<?php  

  $pageTitle = "Add Furniture Page";
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

    
if (isset($_POST['add_furniture'])) {

    $table = "furnitures";
    global $errors;

    $checkArrays = [
        'furniture_name' => 'Furniture Name' , 
        'furniture_desc' => 'Furniture Description' ,
        'furniture_stars' => 'Furniture Stars' ,

        ];


        $errors = validatePost($_POST , $checkArrays , $table , 'furniture_name'  );


if (!empty($_FILES['furniture_image']['name'])) {
  
    $uploadFile_type = $_FILES['furniture_image']['type'];
    $allowedTypes = array('image/gif','image/jpg','image/png' , 'image/jpeg');

    if (!in_array($uploadFile_type,$allowedTypes)) {
      array_push($errors , "File Type Is Not Allowed");
       }

    if( count($errors) == 0 ) {
      $image_name = time() . '_' . $_FILES['furniture_image']['name'];
   
      $destination = ROOT_PATH_MAIN . "/assets/uploads/" . $image_name;
       
      $result = move_uploaded_file($_FILES['furniture_image']['tmp_name'], $destination);
    }
     
    if ($result) {
   
       $_POST['furniture_image'] = $image_name;

    } 
   
}  else {
    unset($_POST['image']);
}

if (count($errors) == 0) {
    global $conn;
    unset($_POST['add_furniture']);

  
    $service_id = create($table, $_POST);

header("location: " . BASE_URL . "/index.php"); 
exit();    
} 
}

?>



    <section class="content  container-sm" id="content" name="content">

  

    <div class="experience" id="experience">
        <div class="exp-img" id="exp-img">

            <div class="exp-img-left mt-5" id="exp-img-left">
                <img src="<?= $imgAssets ?>/test4.jpg" alt="exp img">
                <div class="back-grey1" id="back-grey1">

                </div>
                <div class="back-grey2" id="backgrey2">

                </div>
                <div class="back-grey3" id="backgrey3">

                </div>
            </div>
        </div>
        <div class="exp-text" id="exp-text">
            
            <form action="" method="POST" enctype='multipart/form-data'  class="main_form mt-5" >
        
                <div class="action_form_div">
        
                        <label for="" class="label_form text-center">Furniture Name</label>
                        <input type="text" name="furniture_name" placeholder="Enter Furniture Name.." class="input_form">
                </div>
    
                <div class="action_form_div">
        
                        <label for="" class="label_form text-center">Furniture Description </label>
                        <input type="text" name="furniture_desc" placeholder="Enter Description..." class="input_form">
                </div>
    
                <div class="action_form_div">
        
                        <label for="" class="label_form text-center">Furniture Rating </label>
                        <select name="furniture_stars" id="" class="input_form">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                        </select>
                      
                </div>
    
    
                <div class="action_form_div">
        
                        <label for="" class="label_form text-center">Furniture Image One </label>
                        <input type="file" name="furniture_image"   class="input_form">
                </div>
    
                <div class="action_form_div">
        
                        <label for="" class="label_form text-center">Furniture Image Two </label>
                        <input type="text" name="preview_one" placeholder="Enter URL ..." class="input_form">
                </div>
    
                <div class="action_form_div">
        
                        <label for="" class="label_form text-center">Furniture Image Three </label>
                        <input type="text" name="preview_two" placeholder="Enter URL ..." class="input_form">
                </div>
    
                <div class="action_form_div">
        
                        <label for="" class="label_form text-center">Furniture Image Four </label>
                        <input type="text" name="preview_three" placeholder="Enter URL ..." class="input_form">
                </div>

                <div class="action_form_div">
        
                        <label for="" class="label_form text-center">Furniture Image Five </label>
                        <input type="text" name="preview_four" placeholder="Enter URL ..." class="input_form">
                </div>
    
        <input type="hidden" name="refere_id" value="<?= $_SESSION['id'] ?>" >


                <button type="submit" name="add_furniture" class="btn btn_main" >  Submit </button>
        
            </form>
           
        </div>
    </div>
  

    </section>


   
 <?php 
 include $includes . 'footer.php';
 ?>