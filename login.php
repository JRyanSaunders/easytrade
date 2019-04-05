<?php
$template_name = 'login';
include 'template-blocks/header.php';
$page_title = 'login';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php'; 

$username = $_POST['user_name'];
$password = $_POST['password'];
$conf_password = $_POST['conf_password'];

echo $username;
if ($password === $conf_password) {
    echo "passwords match";
    // Login
}
else {
    echo "passwords don't match";
}
?>

<form method="post">

    <!-- When using 'form method="post"':
    ** ID is used for the label
    ** name is used for getting the values to print
        -->
    <fieldset>
        <label for="username">Username:</label>
            <input type="text" id="username" name="user_name">
    </fieldset>

    <fieldset>
        <label for="password">Password:</label>
            <input type="password" id="password" name="password">
    </fieldset>

    <fieldset>
        <label for="conf_password">Confirm Password:</label>
            <input type="password" id="conf_password" name="conf_password">
    </fieldset>

    <fieldset>
        <input type="submit" value="login">
    </fieldset>

</form>




<?php 
include 'template-blocks/footer.php';
?>