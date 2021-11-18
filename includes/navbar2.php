<!DOCTYPE html>

 <nav class= " navbar-fixed-top navbar-expand-lg navbar-dark bg-primary"  >

 <a href="home2.php"> <img src="HSE.jpg" class="navbar-brand" width = 75 height=50> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  



 <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent" > -->
    
    <ul class="navbar-nav navbar-right" &nbsp > 

    <!-- <li class="nav-item ">
          <a class="nav-link"  href="home2.php">Home</a>
        </li>


      <li class=" nav-item">
          <a class="nav-link"  href="view_checklists.php">Checklists</a>
        </li>

      <li class=" nav-item">
          <a class="nav-link"  href="view_admins.php">Admins</a>
        </li>
      
      <li class=" nav-item">
          <a class="nav-link"  href="view_users.php">Inspectors</a>
        </li> -->


        <?php if(!isset($_SESSION['verified_user_id'])) : ?>

      <li class="nav-item">
          <a class="nav-link"  href="login.php">Login</a>
        </li>
        
        <?php else : ?>
          <li class="nav-item" >
            <br> 
          <a class="nav-link" href="logout.php" >Log Out  ! </a>
        </li>
        <?php endif; ?>
        



  </div>
</nav>
</html>
