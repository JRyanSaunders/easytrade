<?php
$template_name = 'leaveareview.php';
include 'header.php';

$page_ID = 14;

if (isset($_POST)) {

echo 'FORM HAS BEEN POSTED';
$errors = 'no';
$review = $_POST['review'];
$review_type = $_POST['review_type'];
$rating = $_POST['rating'];

// add them all

if (empty($review)) {
    $errors = 'yes';
    echo "user email is empty";
}

if (empty($rating)) {
    $errors = 'yes';
    echo $_POST['Your name is empty'];
}
if ($errors == 'no') {
    // add new entry to database
    $form_data = "'" . date('d-m-Y') . "','" . $_POST['form_name'] . "'";
    $entry_ID = EasyTrade_Database::insert_into_table('entry', 'ENTRY_DATE, FORM_NAME', $form_data);

    // add information to entrymeta
    $form_data = "'" . $entry_ID . "','review','" . $review . "'";
    EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

    $form_data = "'" . $entry_ID . "','review_type','" . $review_type . "'";
    EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

    $form_data = "'" . $entry_ID . "','rating','" . $rating . "'";
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

<div>
    <form method="post">
        
        <input type="hidden" name="form_name" value="review">
        <div>
            <fieldset>
                <label for="rating">Rating</label>
                <input type="number" id="rating" min="1" max="5" name="rating" value="<?php echo $rating ?>"/>
            </fieldset> 


            <fieldset>
                <label for="review">Review:</label>
                <textarea id="review" name="review" value="<?php echo $review ?>"></textarea>
            </fieldset>

            <fieldset>
                <label for="review_type">Tell us who you are:</label>
                <select id="review_type" name="review_type" value="<?php echo $review_type ?>">
                    <option value="customer">Customer</option>
                    <option value="tradesman">Tradesman</option>
                    <option value="other">Other</option>
                </select>
            </fieldset>
        </div>

        <input type="submit" value="send">

    </form>
</div>

<?php 
include 'footer.php';
?>