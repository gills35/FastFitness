<!DOCTYPE html>
<html lang="en">
<head>
<title>Fast Fitness</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js" ></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.flexslider-min.js"></script>


<!--  slider script  -->

<script>
jQuery(window).load(function () {
    jQuery('.flexslider').flexslider({
        animation: "fade",
        slideshow: true,
        slideshowSpeed: 7000,
        animationDuration: 600,
        prevText: "",
        nextText: "",
        controlNav: false
    })
});
</script>

</head>
<body>
<header>
  <div class="line-top"></div>



  <!--  header.php contain logo and top menu bar  -->

  <?php include 'header.php' ?>

  <!--  header.php end  -->
  
  
  <!--  Slider start  -->
  <div class="box-slider">
    <div class="flexslider">
      <ul class="slides">
        <li> <img alt="" src="images/slide-1.jpg"></li>
        <li> <img alt="" src="images/slide-2.jpg"></li>
        <li> <img alt="" src="images/slide-3.jpg"></li>
      </ul>
    </div>
  </div>

  <!--  slider end  -->

<!-- WELCOME heading -->

  <div class="box-slogan">
    <h4>Welcome to Fast Fitness!</h4>
    <p>Push your fitness further with our mix of facilities and we’ll support you with advice on new and better ways to train. </p>
  </div>

  <!-- WELCOME heading end -->
</header>



<section id="content">

<!-- three grid content start -->

  <div class="border-horiz"></div>
  <div class="container_12 row-1">
    <article class="grid_4 thumbnail-1">
      <h3><span>Beginner</span> Fitness Plan </h3>
      <figure class="box-img"><img src="images/page1-img1.jpg" alt=""></figure>
      <p><a href="#" class="link-1">Click here</a> for the best fitness plan.</p>
      <a href="#" class="btn">Read more</a> </article>
    <article class="grid_4 thumbnail-1">
      <h3><span>Advance</span> Fitness Plan </h3>
      <figure class="box-img"><img src="images/page1-img2.jpg" alt=""></figure>
      <p>Advance fitness plans for just for you!</p>
      <a href="#" class="btn">Read more</a> </article>
    <article class="grid_4 thumbnail-1">
      <h3><span>Weight</span> Lose </h3>
      <figure class="box-img"><img src="images/page1-img3.jpg" alt=""></figure>
      <p>The best weight loss plans just for you.</p>
      <a href="#" class="btn">Read more</a> </article>
    <div class="clear"></div>
  </div>

  <!-- three grid content end -->

  <div class="border-horiz"></div>
  <div class="container_12">

  <!-- Left section popular area start -->

    <article class="grid_4">
      <h3>popular</h3>
      <ul class="list-popular">
        <li> <a href="#">30 Days Fitness Program</a>
          <p>30 days of intense training to take you fitness to the next level!</p>
        </li>
        <li> <a href="#">Special Weight Lose Events</a>
          <p>Register to gain access to special weight lose events</p>
        </li>
        </ul>
    </article>

    <!-- Left section popular area end -->


<!-- Right section People say area start -->
    <article class="grid_8">
      <h3>What People Says about Us</h3>
      <blockquote class="quote-1"> The best website for begineers to get up to date with the basics of fitness. </blockquote>
      <div class="name-author">- Hussan Ifthikar </div>
      <ul class="list-dropcap">
        <li>
          <div class="wrapper">
            <div class="dropcap">A</div>
            <a href="#">Female workouts</a> </div>
          <figure class="box-img"><img src="images/page1-img4.jpg" alt=""></figure>
        </li>
        <li>
          <div class="wrapper">
            <div class="dropcap">B</div>
            <a href="#">Strength workouts</a> </div>
          <figure class="box-img"><img src="images/page1-img5.jpg" alt=""></figure>
        </li>
        <li>
          <div class="wrapper">
            <div class="dropcap">C</div>
            <a href="#">Cardio</a> </div>
          <figure class="box-img"><img src="images/page1-img6.jpg" alt=""></figure>
        </li>
      </ul>
    </article>
    <div class="clear"></div>
  </div>
</section>


<!-- Right section People say area start -->


<!--  footer start  -->

<footer>
  <div class="main">

  <!--  social icons  -->
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

<!--  footer end  -->


</body>
</html>