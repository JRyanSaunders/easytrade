<?php
$template_name = 'login';
include 'template-blocks/header.php';
$page_title = 'login';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php'; 

$username = $_POST['user_name'];
$password1 = $_POST['password'];

echo $username;
echo $password1;

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
            <input type="text" id="password1" name="password">
    </fieldset>

    <fieldset>
        <input type="submit" value="login">
    </fieldset>

</form>




<?php 
include 'template-blocks/footer.php';
?>