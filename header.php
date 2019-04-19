<?php
session_start();
$loggedin = false;
$user_role = false;
$user_ID = false;

if (isset($_POST['logout_trigger'])) {
  $_SESSION['loggedin'] = false;
  $_SESSION['username'] = false;
  $_SESSION['user_role'] = false;
  $_SESSION['user_ID'] = false;
} 
if ($_SESSION['loggedin'] == true) {
  $loggedin = true;
  $user_role = $_SESSION['user_role'];
  $user_ID = $_SESSION['user_ID'];
}  

?>
<html lang="en" loggedin="<?php echo $loggedin ?>" userrole="<?php echo $user_role ?>">
<head>
    <meta charset="utf-8">
    <title>PHP Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <?php 
    if ($template_name == 'blog-post') { ?>
      <link rel="stylesheet" type="text/css" href="../style.css">
    <?php }
    else { ?>
      <link rel="stylesheet" type="text/css" href="style.css">
    <?php } ?>


</head>
<?php 
if ($template_name == 'blog-post') {
  include '../functions.php';
  $up_a_level = '../';
}
else {
  include 'functions.php';
  $up_a_level = false;
}
?>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
          <a class="navbar-brand" href="./home.php">EasyTrader</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <form class="navbar-form navbar-left" action="<?php echo $up_a_level ?>search.php">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo $up_a_level ?>home.php"><h3>Home</h3></a></li>
              <li><a href="<?php echo $up_a_level ?>about.php"><h3>About</h3></a></li>
              <li><a href="<?php echo $up_a_level ?>professional_advice.php"><h3>Professional Advice</h3></a></li>
              <li><a href="<?php echo $up_a_level ?>reviews.php"><h3>Reviews</h3></a></li>
              <li><a href="<?php echo $up_a_level ?>contact.php"><h3>Contact</h3></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?php if ($loggedin == false) { ?>
                <li><a href="<?php echo $up_a_level ?>login.php" class="btn signin"><h3>Log in</h3></a></li>
                <li><a href="<?php echo $up_a_level ?>signup.php"><h3>Register</h3></a></li> 
              <?php } 
              else { ?>
                <li><form method="post"><input type="hidden" name="logout_trigger" value="logout" ><input type="submit" value="Logout"></form></li> 
                <img class="img-responsive settings" src="/easytrade/assets/img/Settings-icon.png" alt="settings">
              <?php } ?>    
            </ul>
        </div>
    </div> 
</nav>
    
</header>
<body class="<?php echo $template_name ?>">