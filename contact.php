<?php
$template_name = 'contact';
include 'header.php';

$page_ID = 6;

if (isset($_POST)) {

    echo 'FORM HAS BEEN POSTED';
    $errors = 'no';
    $user_type = $_POST['user_type'];
    $user_enquiry_type = $_POST['user_enquiry_type'];
    $user_email = $_POST['user_email'];
    $user_name = $_POST['user_name'];
    $user_comment = $_POST['user_comment'];
    // add them all

    if (empty($user_email)) {
        $errors = 'yes';
        echo "user email is empty";
    }

    if (empty($user_comment)) {
        $errors = 'yes';
        echo "user comment of user is empty";
    }

    if (empty($user_name)) {
        $errors = 'yes';
        echo $_POST['Your name is empty'];
    }
    if ($errors == 'no') {
        // add new entry to database
        $form_data = "'" . date('d-m-Y') . "','" . $_POST['form_name'] . "'";
        $entry_ID = EasyTrade_Database::insert_into_table('entry', 'ENTRY_DATE, FORM_NAME', $form_data);

        // add information to entrymeta
        $form_data = "'" . $entry_ID . "','user_type','" . $user_type . "'";
        EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

        $form_data = "'" . $entry_ID . "','user_enquiry_type','" . $user_enquiry_type . "'";
        EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

        $form_data = "'" . $entry_ID . "','user_email','" . $user_email . "'";
        EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

        $form_data = "'" . $entry_ID . "','user_name','" . $user_name . "'";
        EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

        $form_data = "'" . $entry_ID . "','user_comment','" . $user_comment . "'";
        EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

    }
}

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
include 'template-blocks/page-header.php'; ?>

<div class="login-form">
    <div class="fields">
        <form method="post">
            
            <input type="hidden" name="form_name" value="contact-form">
            <div>
            <fieldset>
                <label for="user_type">Tell us who you are:</label>
                <select id="user_type" name="user_type" class="browser-default custom-select mb-3" value="<?php echo $user_type ?>">
                    <option value="" disabled>Choose option</option>
                    <option value="customer">Customer</option>
                    <option value="tradesman">Tradesman</option>
                    <option value="other">Other</option>
                </select>
            </fieldset>

            <fieldset>
                <label for="user_enquiry_type">Enquiry type:</label>
                <select id="user_enquiry_type" name="user_enquiry_type" class="browser-default custom-select mb-3" value="<?php echo $user_enquiry_type ?>">
                    <option value="" disabled>Choose option</option>
                    <option value="customer">General enquiry</option>
                    <option value="tradesman">Joining the website</option>
                    <option value="complaint">Complaint</option>
                    <option value="other">Other</option>
                </select>
            </fieldset>

            <fieldset>
                <label for="user_email">Your email address:</label>
                <input type="email" id="user_email" name="user_email" class="form-control mb-3" value="<?php echo $user_email ?>">
            </fieldset>

            <fieldset>
                <label for="user_name">Your name:</label>
                <input type="text"id="user_name" name="user_name" class="form-control mb-3" value="<?php echo $user_name ?>">
            </fieldset>

            <fieldset>
                <label for="user_comment">Comment:</label>
                <textarea id="user_comment" name="user_comment" class="form-control mb-3" value="<?php echo $user_comment ?>" data-gramm_editor="false"></textarea>
            </fieldset>
            </div>

            <input type="submit" value="send">

        </form>
    </div>
</div>

<?php 
include 'footer.php';
?>