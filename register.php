<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = md5($_POST['password']);

  $sql = "INSERT INTO `login` (username, email, password) VALUES ('$username', '$email', '$password')";
  $result = mysqli_query($connection, $sql);
  if($result){
    $smsg = "User Registration successfull";
  }else{
    $fmsg = "User registration failed";
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic" rel="stylesheet" type="text/css">
<script src="js/jquery-1.7.1.min.js" ></script>
<script src="js/superfish.js"></script>


<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css"> 
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption:400" rel="stylesheet" type="text/css">
<![endif]-->
</head>
<body>
<header>
  <div class="line-top"></div>
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
          <li class="active"><a href="login.php">Login</a> </li>

        </ul>
      </nav>
      <div class="clear"></div>
    </div>
  </div>
  </div>
</header>
<section id="content">
  <div class="border-horiz"></div>
  
  <div id="contact-form" class="box-contact login-box">
    <h3>Registration Form</h3>

    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>


   <form class="form-signin" method="POST">
   <fieldset>
        <div class="coll-1">
     
        <div class="input-group">
      <label class="input-group-addon" id="basic-addon1">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
        </div>
        </fieldset>
      </form>
  </div>
</section>

<!-- Footer Start -->


<footer>
  <div class="main">
    <ul class="soc-list">
      <li><a href="#"><img alt="" src="images/icon-1.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-2.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-3.png"></a></li>
      <li><a href="#"><img alt="" src="images/icon-4.png"></a></li>
    </ul>
    <div class="policy">Design by: <a href="#">Soorj Gill</a> </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>