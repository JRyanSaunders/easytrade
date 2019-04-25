<?php
$template_name = 'login';
include 'header.php';

$page_ID = 12;

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
                $user_ID = $row["ID"];
            }
        } else {
            $errors = 'yes';
            echo "nothing found with that username";
        }

        if ($stored_password == $password)
        {
            //get user's type data from database where username matches
                $sql_query = "SELECT * FROM user_meta WHERE USERID = '" . $user_ID . "'";
                $result = EasyTrade_Database::get_from_database($sql_query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $user_role = $row["TYPE"];
                    }
                }

            $_SESSION['loggedin'] = 1;
            $_SESSION['username'] = $username;
            $_SESSION['user_role'] = $user_role;
            $_SESSION['user_ID'] = $user_ID;
            header("Refresh:0; url=home.php");
        }
        else {
            $errors = 'yes';
            echo "password incorrect";
        }
    }
}
?>

<div class="login-form">
    <div class="fields">
        <p>Enter your login details below!</p>
        <form method="post">
        
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
                <input type="submit" class="btn et-btn-white" value="login">
            </fieldset>
        </form>
    </div>
</div>



<?php 
include 'footer.php';
?>