<?php
include '../admin-header.php';

$page_ID = 3; // Got this from the database


if ($_POST) {

    $page_title = $_POST['page_title'];
    if (!empty($page_title)) {
        $column_to_update = 'PAGE_TITLE="' . $page_title . '"';
        $page_finder = 'ID=' . $page_ID;
        EasyTrade_Database::update_database_record('page', $column_to_update, $page_finder);
    }

    $table_to_update = "page_meta";
    $page_finder = '(PAGEID=' . $page_ID . ' AND METAKEY=';

    $page_subtitle = $_POST['page_subtitle'];
    if (!empty($page_subtitle)) {
        $column_to_update = 'METAVALUE="' . $page_subtitle . '"';
        $row_to_update = $page_finder . '"page_subtitle")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $block_ID = 1;
    include '../block-validation/icon_block_submit.php';

    $block_ID = 1;
    include '../block-validation/image_message_block_submit.php';

    $block_ID = 2;
    include '../block-validation/image_message_block_submit.php';

    $block_ID = 1;
    include '../block-validation/rating_block_submit.php';
}

$get_page_title = EasyTrade_Database::get_from_database("SELECT `PAGE_TITLE` FROM `page` WHERE `ID` = $page_ID");
if ($get_page_title->num_rows>0) {
    while($row = $get_page_title->fetch_assoc()) {
        $page_title = $row['PAGE_TITLE'];
    }
}

$get_page_meta = EasyTrade_Database::get_from_database("SELECT * FROM `page_meta` WHERE `PAGEID` = $page_ID");
if ($get_page_meta->num_rows>0) {
    while($row = $get_page_meta->fetch_assoc()) {
        $variable_name = $row["METAKEY"];
        $$variable_name = $row["METAVALUE"];
    }
}

$page_subtitle = (isset($page_subtitle) == 1) ? $page_subtitle : '';
?>

<div class="admin-page">
    <form method="post">
    <div class="main-header">
        <h2>Core Page Information</h2>
        <fieldset>
            <label for="page_title">Page Title</label>
            <input type="text" id="page_title" name="page_title" value="<?php echo $page_title ?>"/>
        </fieldset>

        <fieldset>
            <label for="page_subtitle">Page Subtitle</label>
            <input type="text" id="page_subtitle" name="page_subtitle" value="<?php echo $page_subtitle ?>"/>
        </fieldset>   
    </div>

            <?php
            $block_ID = 1;
            $icon_block_1_lead_title = (isset($block_1_icon_block_1_lead_title) == 1) ? $block_1_icon_block_1_lead_title : '';
            $icon_block_1_lead_title = (isset($block_1_icon_block_1_main_subtitle) == 1) ? $block_1_icon_block_1_main_subtitle : '';
            $icon_block_1_lead_title = (isset($block_1_icon_block_1_background_color) == 1) ? $block_1_icon_block_1_background_color : '';
            $icon_1_image = (isset($block_1_icon_1_image) == 1) ? $block_1_icon_1_image : '';
            $icon_1_alt = (isset($block_1_icon_1_alt) == 1) ? $block_1_icon_1_alt : '';
            $icon_1_title = (isset($block_1_icon_1_title) == 1) ? $block_1_icon_1_title : '';
            $icon_1_text = (isset($block_1_icon_1_text) == 1) ? $block_1_icon_1_text : '';
            $icon_1_link = (isset($block_1_icon_1_link) == 1) ? $block_1_icon_1_link : '';
            $icon_2_image = (isset($block_1_icon_2_image) == 1) ? $block_1_icon_2_image : '';
            $icon_2_alt = (isset($block_1_icon_2_alt) == 1) ? $block_1_icon_2_alt : '';
            $icon_2_title = (isset($block_1_icon_2_title) == 1) ? $block_1_icon_2_title : '';
            $icon_2_text = (isset($block_1_icon_2_text) == 1) ? $block_1_icon_2_text : '';
            $icon_2_link = (isset($block_1_icon_2_link) == 1) ? $block_1_icon_2_link : '';
            $icon_3_image = (isset($block_1_icon_3_image) == 1) ? $block_1_icon_3_image : '';
            $icon_3_alt = (isset($block_1_icon_3_alt) == 1) ? $block_1_icon_3_alt : '';
            $icon_3_title = (isset($block_1_icon_3_title) == 1) ? $block_1_icon_3_title : '';
            $icon_3_text = (isset($block_1_icon_3_text) == 1) ? $block_1_icon_3_text : '';
            $icon_3_link = (isset($block_1_icon_3_link) == 1) ? $block_1_icon_3_link : '';
            include '../blocks/icon_block.php';
            
            $block_ID = 1;
            $message_block_image_position = (isset($block_1_message_block_image_position) == 1) ? $block_1_message_block_image_position : '';
            $message_block_image = (isset($block_1_message_block_image) == 1) ? $block_1_message_block_image : '';
            $message_block_alt_text = (isset($block_1_message_block_alt_text) == 1) ? $block_1_message_block_alt_text : '';
            $message_block_lead_title = (isset($block_1_message_block_lead_title) == 1) ? $block_1_message_block_lead_title : '';
            $message_block_content = (isset($block_1_message_block_content) == 1) ? $block_1_message_block_content : '';
            $message_block_button_colour = (isset($block_1_message_block_button_colour) == 1) ? $block_1_message_block_button_colour : '';
            $message_block_link = (isset($block_1_message_block_link) == 1) ? $block_1_message_block_link : '';
            include '../blocks/image_message_block.php';

    
            $block_ID = 2;
            $message_block_image_position = (isset($block_2_message_block_image_position) == 1) ? $block_2_message_block_image_position : '';
            $message_block_image = (isset($block_2_message_block_image) == 1) ? $block_2_message_block_image : '';
            $message_block_alt_text = (isset($block_2_message_block_alt_text) == 1) ? $block_2_message_block_alt_text : '';
            $message_block_lead_title = (isset($block_2_message_block_lead_title) == 1) ? $block_2_message_block_lead_title : '';
            $message_block_content = (isset($block_2_message_block_content) == 1) ? $block_2_message_block_content : '';
            $message_block_button_colour = (isset($block_2_message_block_button_colour) == 1) ? $block_2_message_block_button_colour : '';
            $message_block_link = (isset($block_2_message_block_link) == 1) ? $block_2_message_block_link : '';
            include '../blocks/image_message_block.php';
 
            $block_ID = 1;
            $rating_block_color1 = (isset($block_1_rating_block_color1) == 1) ? $block_1_rating_block_color1 : '';
            $rating_block_color1 = (isset($block_1_rating_block_color1) == 1) ? $block_1_rating_block_color1 : '';

            $rating_block_rating1 = (isset($block_1_rating_block_rating1) == 1) ? $block_1_rating_block_rating1 : '';
            $rating_block_review1 = (isset($block_1_rating_block_review1) == 1) ? $block_1_rating_block_review1 : '';
            $rating_block_review_type1 = (isset($block_1_rating_block_review_type1) == 1) ? $block_1_rating_block_review_type1 : '';
        
            $rating_block_rating1 = (isset($block_1_rating_block_rating2) == 1) ? $block_1_rating_block_rating2 : '';
            $rating_block_review1 = (isset($block_1_rating_block_review2) == 1) ? $block_1_rating_block_review2 : '';
            $rating_block_review_type1 = (isset($block_1_rating_block_review_type2) == 1) ? $block_1_rating_block_review_type2 : '';

            $rating_block_rating1 = (isset($block_1_rating_block_rating3) == 1) ? $block_1_rating_block_rating3 : '';
            $rating_block_review1 = (isset($block_1_rating_block_review3) == 1) ? $block_1_rating_block_review3 : '';
            $rating_block_review_type1 = (isset($block_1_rating_block_review_type3) == 1) ? $block_1_rating_block_review_type3 : '';
            include '../blocks/rating_block.php'; ?>

        <input type="submit" value="save">

    </form>
</div>


<?php 
include '../admin-footer.php';
?>