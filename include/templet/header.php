<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
  <meta name="author" content="Bartosz Wojciechowski">

	<title><?php echo getTitle(); ?></title>

<!--======================= End Owl Carousel  ===============================-->
  <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>MyStyle.css">

	<script type="text/javascript" src="<?php echo $js; ?>respond.min.js"></script>
	<script type="text/javascript" src="<?php echo $js; ?>html5shiv.min.js"></script>
</head>
<body>
<div class="uper">
  <div class="uper-nav container">
  	<div class="date-time">
    <?php $d=date("d / m / y"); echo "<strong>" . $d . "</strong>"; ?>
  	</div>
    <div class="pull-right">
      <ul>
        <li><a href="wwww.facebook.com" target="plank"><i class="fa fa-facebook "></i></a></li>
        <li><a href="wwww.twitter.com" target="plank"><i class="fa fa-twitter "></i></a></li>
        <li><a href="wwww.youtube.com" target="plank"><i class="fa fa-youtube "></i></a></li>
        <li><a href="profile.php" target="plank"><i class="fa fa-user "></i></a></li>
        <li><a href="index.php" target="plank"><i class="fa fa-sign-in "></i></a></li>
        <li><a href="logout.php" target="plank"><i class="fa fa-sign-out "></i></a></li>
      </ul>
    </div>
  </div>
</div>

<nav class="navbar navbar-inverse ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Dashbord.php"><img src="layout/img/Ticket.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li class="wow bounceInLeft" data-wow-duration='7s'><a href="Dashbord.php"><i class=" fa fa-home"></i> Home</a></li>
        <li class="wow bounceInLeft" data-wow-duration='6s'><a href="hotel.php"><i class=" fa fa-hotel"></i> New Hotels</a></li>
        <li class="wow bounceInLeft" data-wow-duration='5s'><a href="trip.php"><i class=" fa fa-plane"></i>  Travel Blog</a></li>
        <li class="wow bounceInLeft" data-wow-duration='4s'><a href="news.php"><i class=" fa fa-file-text-o"></i> News Room</a></li>
        <li class="wow bounceInLeft" data-wow-duration='3s'><a href="abutus.php"><i class=" fa fa-info"></i> About Tecket.info</a></li>
    
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

