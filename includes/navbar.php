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
    <a href="index.php">
    <div class="brand-title color_black">Furni</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
    </a>
      
        <div class="navbar-links">
            <ul>
                
                <li>
                <a class="color_black" href="index.php">
                  Home
                </a>
            </li>

                <li>
                <a class="color_black" href="shop.php">
                  Library
                </a>
            </li>

            <?php
                
                if (is_user_logged_in_web() ) { ?>


<li>
                <a href="profile.php">
                    Profile
                </a>
            </li>

                <li  >
                   
                <form method="post" >
            <button type="submit" name="logout_user" class="btn btn_main_sm">Logout</button>
      
              </form>

               </li>

            <?php 
            
            if ( isset($_SESSION['admin'] ) && $_SESSION['admin'] === 1  ) { ?>
                  <li>
                <a href="admin.php">
                    Admin
                </a>
            </li>
        <?php    }

            ?>
             

                

               
         <?php } 
         
         else { ?>


<li>
                <a href="login.php">
                    Login
                </a>
            </li>

            <li>
                <a href="signup.php">
                   Signup
                </a>
            </li>

        <?php }
         
         ?>
          
     

               
           
            </ul>
        </div>
       
    </nav>