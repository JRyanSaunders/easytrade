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
      <link rel="stylesheet" type="text/css" href="../../../style.css">
    <?php }
    else { ?>
      <link rel="stylesheet" type="text/css" href="../../style.css">
    <?php } ?>


</head>
<?php 
if ($template_name == 'blog-post') {
  include '../../../functions.php';
}
else {
  include '../../functions.php';
} ?>

<?php   //include '../../functions/database-functions.php';
//include '../../functions/create-tables.php';
         ?>
<header class="admin-header">

  <div class="admin-navbar">
    <a href="../../../home.php">HOME</a>
    <a href="../../../about.php">ABOUT</a>
    <a href="../../../professional_advice.php">PROFESSIONAL ADVICE</a>
    <a href="../../../reviews.php">REVIEWS</a>
    <a href="../../../contact.php">CONTACT</a>
      <div class="navbar navbar-right">
      <a href="#">Welcome back Admin</a>
      <a href="#" class="pull-right"><img src="/easytrade/assets/img/profile.svg"></a> 
      </div>

  </div>

  <div class="sidenav">
  <ul class="list-unstyled components">
            <li class="active">
                <a href="./core-site-info.php">Core site info</a>
            </li>
            <li>
                <a href="./forms.php">Forms</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="./home-edit.php">HOME</a>
                    </li>
                    <li>
                        <a href="./about-edit.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="./review-edit.php">REVIEWS</a>
                    </li>
                    <li>
                        <a href="./blog-edit.php">PROFESSIONAL ADVICE</a>
                    </li>
                    <li>
                        <a href="./blog-posts/visit-edit.php">BLOG: PREPARE FOR A VISIT</a>
                    </li>
                    <li>
                        <a href="./blog-posts/development-edit.php">BLOG: PERMITTED DEVELOPMENT</a>
                    </li>
                    <li>
                        <a href="./blog-posts/tradesman-edit.php">BLOG: ADVICE ON HIRING TRADESMAN</a>
                    </li>
                    <li>
                        <a href="./blog-posts/pricing-edit.php">BLOG PRICING GUIDES</a>
                    </li>
                    <li>
                        <a href="./contact-edit.php">CONTACT</a>
                    </li>
                </ul>
            </li>
        </ul>
    
</header>

<body class="<?php echo $template_name ?>">