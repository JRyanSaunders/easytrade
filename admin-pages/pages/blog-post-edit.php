<?php
include 'admin-header.php';

//THIS IS A TEMPLATE FOR EACH OF THE BLOG POSTS (PRICING/VISIT/DEVELOPMENT)

$page_ID = 7; // Got this from the database

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

    //text block

    $text_block_2_background_color = $_POST['2_text_block_background_color'];
    if (!empty($text_block_2_background_color)) {
        $column_to_update = 'METAVALUE="' .  $text_block_2_background_color . '"';
        $row_to_update = $page_finder . '"2_text_block_background_color")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_block_2_lead_title = $_POST['2_text_block_lead_title'];
    if (!empty($text_block_2_lead_title)) {
        $column_to_update = 'METAVALUE="' .  $text_block_2_lead_title . '"';
        $row_to_update = $page_finder . '"2_text_block_lead_title")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_block_2_text = $_POST['2_text_block_text'];
    if (!empty($text_block_2_text)) {
        $column_to_update = 'METAVALUE="' .  $text_block_2_text . '"';
        $row_to_update = $page_finder . '"2_text_block_text")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    //image message block

    $image_message_block_3_image_position_1 = $_POST['3_message_block_image_position'];
    if (!empty($image_message_block_3_image_position_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_3_image_position_1 . '"';
        $row_to_update = $page_finder . '"3_message_block_image_position")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_3_image_1 = $_POST['3_message_block_image'];
    if (!empty($image_message_block_3_image_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_3_image_1 . '"';
        $row_to_update = $page_finder . '"3_message_block_image")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_3_image_alt_text_1 = $_POST['3_message_block_alt_text'];
    if (!empty($image_message_block_3_image_alt_text_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_3_image_alt_text_1 . '"';
        $row_to_update = $page_finder . '"3_image_alt_text")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_3_lead_title_1 = $_POST['3_message_block_lead_title'];
    if (!empty($image_message_block_3_lead_title_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_3_lead_title_1  . '"';
        $row_to_update = $page_finder . '"3_message_block_lead_title")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_3_content_1 = $_POST['3_message_block_content'];
    if (!empty($image_message_block_3_content_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_3_content_1 . '"';
        $row_to_update = $page_finder . '"3_message_block_content")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_3_button_colour_1 = $_POST['3_message_block_button_colour'];
    if (!empty($image_message_block_3_button_colour_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_3_button_colour_1 . '"';
        $row_to_update = $page_finder . '"3_message_block_button_colour")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_3_link_1 = $_POST['3_message_block_link'];
    if (!empty($image_message_block_3_link_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_3_link_1 . '"';
        $row_to_update = $page_finder . '"3_message_block_link")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

}
?>

<div class="admin-page">
<form method="post">

<div class="main-header">
        <h2>Core Page Information</h2>
        <fieldset>
            <label for="page_title">Page Title</label>
            <input type="text" id="page_title" name="page_title"/>
        </fieldset>

        <fieldset>
            <label for="page_subtitle">Page Subtitle</label>
            <input type="text" id="page_subtitle" name="page_subtitle"/>
        </fieldset>   
    </div>

    <?php

    $block_ID = 1;
    include '../blocks/polaroid_block.php';

    $block_ID = 2;
    include '../blocks/polaroid_block.php';
    ?>

    <input type="submit" value="save">

</form>
</div>


<?php 
include '../admin-footer.php';
?>