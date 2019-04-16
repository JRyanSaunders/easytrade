<?php
$template_name = 'login';
include 'header.php';
$page_title = 'login';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php'; 

if ($_POST) {

    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];

    $errors = 'no';

    // check username isnt empty

    if ($password !== $conf_password) {
        $errors = 'yes';
        echo "passwords don't match";
    }

    if ($errors === 'no') {

        $stored_password = false;

        //get users data from database where username matches
        $sql_query = "SELECT * FROM user WHERE USERNAME = '" . $username . "'";
        $result = EasyTrade_Database::get_from_database($sql_query);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $stored_password = $row["PASSWORD"];
            }
        } else {
            $errors = 'yes';
            echo "nothing found with that username";
        }

        if ($stored_password == $password)
        {
            EasyTrade_Database::update_database_record('user', 'LOGGEDIN="1"', "USERNAME='" . $username . "'");
            echo "logged in " . $username;
        }
        else {
            $errors = 'yes';
            echo "password incorrect";
        }
    }
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
include 'footer.php';
?>