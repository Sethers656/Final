<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.png">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Log In </title>

    <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/coming-sssoon.css" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/flags/US.png"/>
                English(US)
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="images/flags/DE.png"/> Deutsch</a></li>
                <li><a href="#"><img src="images/flags/GB.png"/> English(UK)</a></li>
                <li><a href="#"><img src="images/flags/FR.png"/> Français</a></li>
                <li><a href="#"><img src="images/flags/RO.png"/> Română</a></li>
                <li><a href="#"><img src="images/flags/IT.png"/> Italiano</a></li>

                <li class="divider"></li>
                <li><a href="#"><img src="images/flags/ES.png"/> Español <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/BR.png"/> Português <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/JP.png"/> 日本語 <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/TR.png"/> Türkçe <span class="label label-default">soon</span></a></li>

              </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <i class="fa fa-facebook-square"></i>
                    Like
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-google-plus-square"></i>
                    Plus
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-pinterest"></i>
                    Pin
                </a>
            </li>
       </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<div class="main" style="background-image: url('images/video_bg.jpg')">
        <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
            <source src="video/time.webm" type="video/webm">
            <source src="video/time.mp4" type="video/mp4">
            Video not supported
        </video>
<!--    Change the image source '/images/video_bg.jpg')" with your favourite image.     -->

    <div class="cover black" data-color="black"></div>

<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">
            Log In
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->

        <div class="content">
            <h4 class="motto">Really Awesome Site you want to log in to.</h4>
            <div class="subscribe">
          <?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  echo "<script> location.href='demo-video-background-login.php'; </script>";
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; color:white }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to our site.</h1>
    </div>
    <p><a href="demo-video-background-logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="container">
             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Group Name</a>. CIS491.01</a>
      </div>
    </div>
 </div>
</body>
   <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>
