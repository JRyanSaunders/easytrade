<html lang="en">
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
      <link rel="stylesheet" type="text/css" href="style.css'">
    <?php } ?>


</head>
<?php 
if ($template_name == 'blog-post') {
  include '../functions.php';
  echo 'template is blog post';
}
else {
  include 'functions.php';
} ?>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
          <a class="navbar-brand" href="#">EasyTrader</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <form class="navbar-form navbar-left" action="/action_page.php">
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
              <li class="active"><a href="home.php"><h3>Home</h3></a></li>
              <li><a href="about.php"><h3>About</h3></a></li>
              <li><a href="professional_advice.php"><h3>Professional Advice</h3></a></li>
              <li><a href="reviews.php"><h3>Reviews</h3></a></li>
              <li><a href="contact.php"><h3>Contact</h3></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="login.php" class="btn signin"><h3>Log in</h3></a></li>
              <li><a href="signup.php"><h3>Register</h3></a></li> 
                <img class="img-responsive profile" src="/easytrade/assets/img/user.svg" alt="User">
            </ul>
        </div>
    </div> 
</nav>
    
</header>
<body class="<?php echo $template_name ?>">