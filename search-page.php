<?php  

  $pageTitle = "Shop Page";
  include 'init.php';

  include $includes . 'header.php';
  include $includes . 'navbar.php';

?>

<?php 
  global $conn; 

  $searchTerm = $_GET['search_term'];

  if (empty($searchTerm)) {
    header("location: " . BASE_URL . "/index.php"); 
    exit();    
  }

  $sql = "SELECT * FROM furnitures WHERE furniture_name LIKE '%$searchTerm%'";
  $result = mysqli_query($conn, $sql);
?>

<section class="content section container-mid" id="content" name="content">

  <div class="text-center">
    <h1 class="product-slider-title"> You have searched for <?= $searchTerm ?> </h1>
    <p class="main_para"> See All The Results Of Your Search </p>
  </div>

  <div class="grid_products_main mt-5">

    <?php  
      if ($result) {
        while ($row = mysqli_fetch_array($result)) { ?>

        <!-- Product card with clickable link -->
        <a href="single_furniture.php?furniture_id=<?= $row['id'] ?>" class="product-link" style="text-decoration: none;">
        <div class="product-card" id="product-card">

            <div class="product-img" id="product-img">
              <img src="<?= $row['furniture_image'] ? BASE_URL . "/assets/uploads/" . $row['furniture_image'] : $imgAssets . '/char.png' ?>" alt="furniture image" class="iconic_img">
            </div>

            <div class="product-card-bottom" id="product-card-bottom">
              <div class="product-title" id="product-title">
                <?= $row['furniture_name'] ?>
              </div>

              <p class="main_para"> 
                <?= $row['furniture_desc'] ?>
              </p>

              <div class="star-rating mt-2" id="star-rating">
                <?php 
                  for ($i = 0; $i < $row['furniture_stars']; $i++) { ?>
                    <img src="<?= $imgAssets . '/star.png' ?>" class="icon_smaller" alt="star">
                <?php } ?>
              </div>
            </div>
          </div>
        </a>

    <?php  
        }
      } else {
        echo "<p>No results found for your search.</p>";
      }
    ?>

  </div>

</section>

<?php 
  include $includes . 'footer.php';
?>
