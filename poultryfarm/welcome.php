<?php 
include 'inc/config.php'; 

if ( !isset($_SESSION['username']  )) {
  header("Location: login.php");

}  
?>

<?php 
include 'headerfooter/header.php'; ?>
<body>

  <div class="container">
    <p><strong>Poultry Farm Login Page</strong></p>
    <!-- <div class="form-group"> -->
      <h1> 
        <?php
        echo "Welcome  " .$_SESSION['username'] ?></h1>

        
        <button class=" button1" onclick="window.location.href = 'flocktable.php';">ADD FLOCK</button>
        
      </div>
      <div id="child1"> 
        <a href='logout.php'>
          <input type="submit" class="btn-btn-primary" value =Logout name=Logout>
        </a>
      </div>



    </body>
    </html>