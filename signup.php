<?php
$template_name = 'signup';
include 'header.php';

$page_ID = 13;

// Page Title
$get_page_title = EasyTrade_Database::get_from_database("SELECT PAGE_TITLE FROM page WHERE ID=" . $page_ID);
    if ($get_page_title->num_rows > 0) {
    while($row = $get_page_title->fetch_assoc()) {
        $page_title = $row["PAGE_TITLE"];
    }
}

// All other page information (page meta)
$all_page_data = EasyTrade_Database::get_from_database("SELECT * FROM page_meta WHERE PAGEID=" . $page_ID);
    if ($all_page_data->num_rows > 0) {
    while($row = $all_page_data->fetch_assoc()) {
        $variable_name = $row["METAKEY"];
        $$variable_name = $row["METAVALUE"];
    }
}

$blog = ($template_name == 'blog-post') ? 'blog' : false;
include 'template-blocks/page-header.php';

$latest_birth_date = '';
$current_date = date('Y/m/d');
$newdate = strtotime ('-16 year', strtotime ($current_date)) ;
$latest_birth_date = date( 'Y-m-d' , $newdate );

if ($_POST)
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['user_name'];
    $password1 = $_POST['password'];
    $password2 = $_POST['confirm_password'];
    $email = $_POST['email_address'];
    $birthday = $_POST['bdaymonth'];
    $type = $_POST['type'];

    $errors = 'no';

    if (empty($first_name)) {
        $errors = 'yes';
        echo "firstname is empty";
    }

    if (empty($last_name)) {
        $errors = 'yes';
        echo "lastname is empty";
    }

    if (empty($username)) {
        $errors = 'yes';
        echo "username is empty";
    }

    if ($password1 !== $password2) {
        $errors = 'yes';
        echo "passwords do not match";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors = 'yes';
        echo "Invalid email format"; 
    }

    if (empty($type)) {
        $errors = 'yes';
        echo "type of user is empty";
    }

    if ($errors === 'no')
    {
        $user_data = "'" . $username . "','" . $password1 . "','" . $email . "'";
        // add to database
        $user_ID = EasyTrade_Database::insert_into_table('user', 'USERNAME, PASSWORD, EMAIL', $user_data);

        $user_meta_data = "'" . $user_ID . "','" . $first_name . "','" . $last_name . "','" . $birthday . "','" . $type . "','" . date('Y/m/d') . "'";
        EasyTrade_Database::insert_into_table('user_meta', 'USERID, FIRSTNAME, LASTNAME, BIRTHDAY, TYPE, ACCOUNT_CREATION_DATE', $user_meta_data);
        // redirect to homepage
    }
} ?>

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
            <input type="date" id="birthday" name="bdaymonth" max="<?php echo $latest_birth_date ?>">
    </fieldset>

    <fieldset>
        <input type="submit" value="Signup">
    </fieldset>






<?php 
include 'template-blocks/footer.php';
?>