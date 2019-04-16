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
    <link rel="stylesheet" type="text/css" href="../../style.css">

</head>
<?php   include '../../functions/database-functions.php';
include '../../functions/create-tables.php';
         ?>
<header class="admin-header">

  <div class="admin-navbar">
    <a href="#">Home</a>
      <div class="navbar navbar-right">
      <a href="#">firstname, Lastname</a>
      <a href="#" class="pull-right"><img src="/easytrade/assets/img/profile.svg"></a> 
      </div>

  </div>

  <div class="sidenav">
  <ul class="list-unstyled components">
            <li class="active">
                <a href="./core-site-info.php">Core site info</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="./users.php">Users</a>
            </li>
            <li>
                <a href="./forms.php">Forms</a>
            </li>
        </ul>
    
</header>

<body class="<?php echo $template_name ?>">