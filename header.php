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
if (isset($_SESSION['loggedin'])) {
  if ($_SESSION['loggedin'] == true) {
    $loggedin = true;
    $user_role = $_SESSION['user_role'];
    $user_ID = $_SESSION['user_ID'];
  }
}
if ($template_name == 'blog-post') {
  include '../functions.php';
}
else {
  include 'functions.php';
}

$active = 'class="active"';
?>

<html lang="en" loggedin="<?php echo $loggedin ?>" userrole="<?php echo $user_role ?>" userID="<?php echo $user_ID ?>">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo EasyTrade_Home_URL . 'style.css' ?>">
</head>

<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="<?php echo EasyTrade_Home_URL . 'home.php' ?>">EasyTrader</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <form class="navbar-form navbar-left" action="<?php echo EasyTrade_Home_URL . 'search.php' ?>">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <button type="button" class="navbar-toggle tablet-only" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-nav mainmenu">
              <li <?php if (strpos($_SERVER['REQUEST_URI'], 'home.php') !== false) { echo $active; } ?>><a href="<?php echo EasyTrade_Home_URL . 'home.php' ?>"><h3>Home</h3></a></li>
              <li <?php if (strpos($_SERVER['REQUEST_URI'], 'about.php') !== false) { echo $active; } ?>><a href="<?php echo EasyTrade_Home_URL . 'about.php' ?>"><h3>About</h3></a></li>
              <li <?php if (strpos($_SERVER['REQUEST_URI'], 'professional_advice.php') !== false) { echo $active; } ?>><a href="<?php echo EasyTrade_Home_URL . 'professional_advice.php' ?>"><h3>Professional Advice</h3></a></li>
              <li <?php if (strpos($_SERVER['REQUEST_URI'], 'reviews.php') !== false) { echo $active; } ?>><a href="<?php echo EasyTrade_Home_URL . 'reviews.php' ?>"><h3>Reviews</h3></a></li>
              <li <?php if (strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false) { echo $active; } ?>><a href="<?php echo EasyTrade_Home_URL . 'contact.php' ?>"><h3>Contact</h3></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right <?php if ($loggedin == true) { echo 'logged-in'; } ?>">
              <?php if ($loggedin == false) { ?>
                <li <?php if (strpos($_SERVER['REQUEST_URI'], 'login.php') !== false) { echo $active; } ?>><a href="<?php echo EasyTrade_Home_URL . 'login.php' ?>" class="btn signin"><h3>Log in</h3></a></li>
                <li <?php if (strpos($_SERVER['REQUEST_URI'], 'signup.php') !== false) { echo $active; } ?>><a href="<?php echo EasyTrade_Home_URL . 'signup.php' ?>"><h3>Register</h3></a></li>
              <?php }
              else { ?>
                <li><form method="post" class="logout_form"><input type="hidden" name="logout_trigger" value="logout" ><input type="submit" value="Logout"></form></li> 
                <?php if ($user_type == 'admin') { ?>
                  <li><a href="<?php echo EasyTrade_Home_URL . 'admin-pages/admin-dashboard.php' ?>" class="icon"><img class="img-responsive" src="/easytrade/assets/img/Settings-icon.png" alt="settings"></a></li>
                <?php }
                else { ?>
                  <li><a href="<?php echo EasyTrade_Home_URL . 'admin-pages/tradesman-dashboard.php' ?>" class="icon"><img class="img-responsive" src="/easytrade/assets/img/Settings-icon.png" alt="settings"></a></li>
              <?php }
              } ?>
            </ul>
        </div>
    </div>
</nav>

</header>
<body class="<?php echo $template_name ?>">