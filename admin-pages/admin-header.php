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
  else {
    if ($template_name == 'blog-post') {
      header('Location: ../../../login.php');
    }
    else if ($template_name == 'forms') {
      header('Location: ../login.php');
    }
    else {
      header('Location: ../../login.php');
    }
    die();
  }
}

if ($template_name == 'blog-post') {
  include '../../../functions.php';
}
else if (($template_name == 'forms') || ($template_name == 'core-site-info')  || ($template_name == 'admin-dashboard') || ($template_name == 'tradesman-dashboard')) {
  include '../functions.php';
}
else {
    include '../../functions.php';
}

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
    <link rel="stylesheet" type="text/css" href="<?php echo EasyTrade_Home_URL . 'style.css' ?>">
</head>

<header class="admin-header">

  <div class="admin-navbar">
    <a href="<?php echo EasyTrade_Home_URL . 'home.php' ?>">HOME</a>
    <a href="<?php echo EasyTrade_Home_URL . 'about.php' ?>">ABOUT</a>
    <a href="<?php echo EasyTrade_Home_URL . 'professional_advice.php' ?>">PROFESSIONAL ADVICE</a>
    <a href="<?php echo EasyTrade_Home_URL . 'reviews.php' ?>">REVIEWS</a>
    <a href="<?php echo EasyTrade_Home_URL . 'contact.php' ?>">CONTACT</a>
      <div class="navbar navbar-right">
      <a href="#">Welcome back Admin</a>
      <a href="#" class="pull-right"><img src="/easytrade/assets/img/profile.svg"></a>
      </div>

  </div>

  <div class="sidenav">
    <ul class="list-unstyled components">
      <?php if ($user_role == 'admin') { ?>
        <li class="active"><a href="<?php echo EasyTrade_Admin_URL . 'admin-dashboard.php' ?>">DASHBOARD</a></li>
        <li><a href="<?php echo EasyTrade_Admin_URL . 'core-site-info.php' ?>">CORE SITE INFO</a></li>
        <li><a href="<?php echo EasyTrade_Admin_URL . 'forms.php' ?>">FORMS</a></li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">PAGES</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/home-edit.php' ?>">HOME</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/about-edit.php' ?>">ABOUT</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/review-edit.php' ?>">REVIEWS</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/blog-edit.php' ?>">PROFESSIONAL ADVICE</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/blog-posts/visit-edit.php' ?>">BLOG: PREPARE FOR A VISIT</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/blog-posts/development-edit.php' ?>">BLOG: PERMITTED DEVELOPMENT</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/blog-posts/tradesman-edit.php' ?>">BLOG: ADVICE ON HIRING TRADESMAN</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/blog-posts/pricing-edit.php' ?>">BLOG PRICING GUIDES</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/contact-edit.php' ?>">CONTACT</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/signup-edit.php' ?>">SIGNUP</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/login-edit.php' ?>">LOGIN</a></li>
                <li><a href="<?php echo EasyTrade_Admin_URL . 'pages/leaveareview-edit.php' ?>">LEAVE A REVIEW</a></li>
              </ul>
        </li>
      <?php }
      else { ?>
      <li class="active"><a href="<?php echo EasyTrade_Admin_URL . 'tradesman-dashboard.php' ?>">DASHBOARD</a></li>
        <li><a href="<?php echo EasyTrade_Admin_URL . 'tradesman-pages/my-details.php' ?>">MY DETAILS</a></li>
        <li><a href="<?php echo EasyTrade_Admin_URL . 'tradesman-pages/my-page.php' ?>">MY PAGE</a></li>
        <li><a href="<?php echo EasyTrade_Admin_URL . 'tradesman-pages/my-reviews.php' ?>">REVIEWS</a></li>
        <li><a href="<?php echo EasyTrade_Admin_URL . 'tradesman-pages/my-enquiries.php' ?>">ENQUIRIES</a></li>
        
      <?php } ?>
    </ul>
</header>

<body class="<?php echo $template_name ?>">