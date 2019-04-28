<?php
//THIS IS A TEMPLATE FOR ALL OF THE BLOG POSTS (PRICING/VISIT/DEVELOPMENT)

if ($_POST) {

    $page_title = $_POST['page_title'];
    if (!empty($page_title)) {
        $column_to_update = 'PAGE_TITLE="' . $page_title . '"';
        $page_finder = 'ID=' . $page_ID;
        EasyTrade_Database::update_database_record('page', $column_to_update, $page_finder);
    }

    $table_to_update = "page_meta";
    $page_finder = '(PAGEID=' . $page_ID . ' AND METAKEY=';

    include '../../block-validation/page_header_submit.php';

    $block_ID = 1;
    include '../../block-validation/text_block_validation.php';

    $block_ID = 1;
    include '../../block-validation/image_message_block_submit.php';

    $block_ID = 1;
    include '../../block-validation/text_column_block_validation.php';

    $block_ID = 1;
    include '../../block-validation/polaroid_block_submit.php';

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

?>

<div class="admin-page">
    <form method="post">
        <?php include '../../blocks/page_header.php';

        $block_ID = 1;
        $text_block_background_color = (isset($block_1_text_block_background_color) == 1) ? $block_1_text_block_background_color : '';
        $text_block_lead_title = (isset($block_1_text_block_lead_title) == 1) ? $block_1_text_block_lead_title : '';
        $text_block_text = (isset($block_1_text_block_text) == 1) ? $block_1_text_block_text : '';
        include '../../blocks/text_block.php';

        $block_ID = 1;
        $message_block_image_position = (isset($block_1_message_block_image_position) == 1) ? $block_1_message_block_image_position : '';
        $message_block_image = (isset($block_1_message_block_image) == 1) ? $block_1_message_block_image : '';
        $message_block_alt_text = (isset($block_1_message_block_alt_text) == 1) ? $block_1_message_block_alt_text : '';
        $message_block_lead_title = (isset($block_1_message_block_lead_title) == 1) ? $block_1_message_block_lead_title : '';
        $message_block_content = (isset($block_1_message_block_content) == 1) ? $block_1_message_block_content : '';
        $message_block_button_label = (isset($block_1_message_block_button_label) == 1) ? $block_1_message_block_button_label : '';
        $message_block_button_color = (isset($block_1_message_block_button_color) == 1) ? $block_1_message_block_button_color : '';
        $message_block_link = (isset($block_1_message_block_link) == 1) ? $block_1_message_block_link : '';
        include '../../blocks/image_message_block.php';

        $column_background_color = (isset($block_1_text_column_block_background_color) == 1) ? $block_1_text_column_block_background_color : '';
        $text_column_block_column_1_lead_title = (isset($block_1_text_column_block_column_1_lead_title) == 1) ? $block_1_text_column_block_column_1_lead_title : '';
        $text_column_block_column_1_text = (isset($block_1_text_column_block_column_1_text) == 1) ? $block_1_text_column_block_column_1_text : '';
        $text_column_block_column_2_lead_title = (isset($block_1_text_column_block_column_2_lead_title) == 1) ? $block_1_text_column_block_column_2_lead_title : '';
        $text_column_block_column_2_text = (isset($block_1_text_column_block_column_2_text) == 1) ? $block_1_text_column_block_column_2_text : '';
        include '../../blocks/text_column_block.php';

        $block_ID = 1;
        $polaroid_background_color = (isset($block_1_polaroid_background_color) == 1) ? $block_1_polaroid_background_color : '';
        $polaroid_title1 = (isset($block_1_polaroid_title1) == 1) ? $block_1_polaroid_title1 : '';
        $polaroid_text1 = (isset($block_1_polaroid_text1) == 1) ? $block_1_polaroid_text1 : '';
        $polaroid_img1 = (isset($block_1_polaroid_img1) == 1) ? $block_1_polaroid_img1 : '';
        $polaroid_link1 = (isset($block_1_polaroid_link1) == 1) ? $block_1_polaroid_link1 : '';
        $polaroid_button_name1 = (isset($block_1_polaroid_button_name1) == 1) ? $block_1_polaroid_button_name1 : '';
        $polaroid_title2 = (isset($block_1_polaroid_title2) == 1) ? $block_1_polaroid_title2 : '';
        $polaroid_text2 = (isset($block_1_polaroid_text2) == 1) ? $block_1_polaroid_text2 : '';
        $polaroid_img2 = (isset($block_1_polaroid_img2) == 1) ? $block_1_polaroid_img2 : '';
        $polaroid_link2 = (isset($block_1_polaroid_link2) == 1) ? $block_1_polaroid_link2 : '';
        $polaroid_button_name2 = (isset($block_1_polaroid_button_name2) == 1) ? $block_1_polaroid_button_name2 : '';
        include '../../blocks/polaroid_block.php';
    ?>

    <input type="submit" value="save">

</form>
</div>