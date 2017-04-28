<!-- Database connection and sending feedback data to database -->

<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
  $name2 = mysqli_real_escape_string($connection, $_POST['name']);
  $message = mysqli_real_escape_string($connection, $_POST['message']);

  $sql = "INSERT INTO `feedback` (name, message) VALUES ('$name2', '$message')";

  $result = mysqli_query($connection, $sql);
  if($result){
    $smsg2 = "Feedback Submitted"; 
    header('location: feedback.php');
  }else{
    $fmsg2 = "Feedback not Submitted";
  }
}

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Feedback</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic" rel="stylesheet" type="text/css">
<script src="js/jquery-1.7.1.min.js" ></script>
<script src="js/superfish.js"></script>
<script src="js/form.js"></script>


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
  <?php include 'header.php' ?>
  
</header>
<section id="content">
  <div class="border-horiz"></div>

  


<div class="feedback-content container_12">


  <h1>Customer Feedback</h1>

<?php


$sql="SELECT * from feedback LIMIT 10";

if ($result=mysqli_query($connection,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
   

    	

    		echo "
    		
      <div class='feedback-1'>
        <p>$row[2]</p>
        <i>$row[1]</i>
    </div>



    		";
    }
  
  
}

mysqli_close($connection);
?>
    

    <?php if(isset($smsg)){ ?> 
           <div class="box-contact login-box">
    <h3>Feedback Form</h3>
    <form id="contact-form" method="POST" action="#">
      <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
      <fieldset>
        <div class="coll-1">
          <div>
            <div class="form-txt">Your Name:</div>
            <label class="name">
              <input name="name" type="text" required>
              <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>

        
         
          <div>
            <div class="form-txt">Feedback:</div>
            <label class="email">
               <textarea name="message" required></textarea>
              <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
            <div class="clear"></div>
          </div>
        </div>
        
        <div class="clear"></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
      </fieldset>
    </form>
  </div>
          <?php } else { echo '<div class="log-feed">Please <a href="login.php">Login</a> to post feedback </div>' ; } 
          
          ?>

       


  </div>

  
  
 
</section>

<!-- footer Start -->


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