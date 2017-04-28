
<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connection, $sql);
  $count = mysqli_num_rows($result);
  if($count == 1){
    $_SESSION['username'] = $username;
  }else{
    $fmsg = "Invalid Username/Password";
  }
}
if(isset($_SESSION['username'])){
  $smsg = "User already logged in";
}


?>


<div class="top-sec-ow">
  <div class="main">
    <div class="row-top">
      <h1><a href="index.php"><img style="height: 55px;" alt="" src="images/logo.png"></a></h1>
        
      <nav>
        <ul class="sf-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="workout.php">Workout </a> </li>
          
          <li><a href="diet.php">Diet</a> </li>
          
          <li><a href="supplement.php">Supplement</a> </li>
          <li><a href="feedback.php">Feedback</a> </li>
          <?php if(isset($smsg)){ ?> 
          <li><a href="logout.php">Logout</a>  </li>
          <?php } else { echo '<li><a href="login.php">Login</a> </li>' ; } 
          
          ?>

        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>
  </div>