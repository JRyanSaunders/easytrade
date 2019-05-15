<?php
if ($loggedin == false) {
    die;
} 
else {
    $_SESSION['loggedin'] = false;
    $_SESSION['username'] = false;
    $_SESSION['user_role'] = false;
    $_SESSION['user_ID'] = false;

    header("Location: /index.php");
    die;
}  
?>