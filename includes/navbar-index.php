        <?php  
if (isset($_POST['logout_user'])) {
  $sessionDestory = array(
  'id' => 'id',
  'name' => 'username',
  'admin' => 'admin',
  'message' => 'message',
  'type' => 'type',
  );
  logoutUser($sessionDestory );
}
?>

  

    <nav class="navbar">
        <div class="brand-title">Furni</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                
                <a href="index.php">
                    <li>
                    Home
                </li>
                </a>
           
                
                <a href="shop.php">
                    <li>
                    Library
                </li>
                </a>
          
                <?php
                
                if (is_user_logged_in_web() ) { ?>

        <a href="profile.php" class=""  >
        
                    <li>
                   
                    <p>Profile</p>    
                </li>
                </a>

                <li  >
                   
                <form method="post" >
            <button type="submit" name="logout_user" class="btn btn_main_sm">Logout</button>
      
              </form>

               </li>

               <?php 
            
            if ( isset($_SESSION['admin'] ) && $_SESSION['admin'] === 1  ) { ?>
               <a href="admin.php">
                    <li>Admin</li>
                </a>
        <?php    }

            ?>

               <?php }
                else {  ?>

        <a href="login.php">
                    <li>Login</li>
                </a>

                <a href="signup.php">
                    <li>Signup</li>
                </a>

                <?php    } 
                ?>

                 
             
          
            

            

               
           
            </ul>
        </div>
        
    </nav>
