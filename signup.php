<?php
$template_name = 'signup';
include 'template-blocks/header.php';
$page_title = 'Signup';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php'; 


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['user_name'];
$password1 = $_POST['password'];
$password2 = $_POST['confirm_password'];
$email = $_POST['email_address'];
$birthday = $_POST['bdaymonth'];
$type = $_POST['type'];


echo $first_name;
echo $last_name;
echo $username;
echo $password1;
echo $password2;
echo $email;
echo $birthday;
echo $type;

?>

<form method="post">

    <!-- When using 'form method="post"':
    ** ID is used for the label
    ** name is used for getting the values to print
        -->

    <fieldset>
        <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="first_name">
    </fieldset>

    <fieldset>
        <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="last_name">
    </fieldset>

    <fieldset>
        <label for="username">Username:</label>
            <input type="text" id="username" name="user_name">
    </fieldset>

    <fieldset>
        <label for="password">Password:</label>
            <input type="text" id="password1" name="password">
    </fieldset>

    <fieldset>
        <label for="confirm_password">Confirm Password:</label>
            <input type="text" id="password2" name="confirm_password">
    </fieldset>

    <fieldset>
        <label for="email">email address:</label>
            <input type="text" id="email" name="email_address">
    </fieldset>

    <fieldset>
        <label for="birthday">Birthday (month and year):</label>
            <input type="date" id="birthday" name="bdaymonth" max="2003-12-31">
    </fieldset>

    <fieldset>
        <label>Select the correct field:</label>
            <label for="tradesman">I am a tradesman</label>
                <input type="radio" id="tradesman" name="type" value="" checked>
            <label for="customer"> am a customer looking for a tradesman</label>
                <input type="radio" id="customer" name="type" value="">
            <label for="other">Other</label>
                <input type="radio" id="other" name="type" value="">
    </fieldset>

    <fieldset>
        <input type="submit" value="Signup">
    </fieldset>

</form>







<?php 
include 'template-blocks/footer.php';
?>