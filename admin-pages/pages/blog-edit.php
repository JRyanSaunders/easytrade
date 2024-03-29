<?php
include '../admin-header.php';

$page_ID = 5; // Got this from the database

if ($_POST) {

    $page_title = $_POST['page_title'];
    if (!empty($page_title)) {
        $column_to_update = 'PAGE_TITLE="' . $page_title . '"';
        $page_finder = 'ID=' . $page_ID;
        EasyTrade_Database::update_database_record('page', $column_to_update, $page_finder);
    }

    $table_to_update = "page_meta";
    $page_finder = '(PAGEID=' . $page_ID . ' AND METAKEY=';

    include '../block-validation/page_header_submit.php';

    $block_ID = 2;
    include '../block-validation/polaroid_block_submit.php';

    $block_ID = 3;
    include '../block-validation/polaroid_block_submit.php';
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


// THIS IS THE PROFFESSIONAL ADVICE PAGE

?>
<div class="admin-page">
<form method="post">
    <?php include '../blocks/page_header.php';

        $block_ID = 2;
        $polaroid_background_color = (isset($block_2_polaroid_background_color) == 1) ? $block_2_polaroid_background_color : '';
        $polaroid_title1 = (isset($block_2_polaroid_title1) == 1) ? $block_2_polaroid_title1 : '';
        $polaroid_text1 = (isset($block_2_polaroid_text1) == 1) ? $block_2_polaroid_text1 : '';
        $polaroid_img1 = (isset($block_2_polaroid_img1) == 1) ? $block_2_polaroid_img1 : '';
        $polaroid_link1 = (isset($block_2_polaroid_link1) == 1) ? $block_2_polaroid_link1 : '';
        $polaroid_button_name1 = (isset($block_2_polaroid_button_name1) == 1) ? $block_2_polaroid_button_name1 : '';
        $polaroid_title2 = (isset($block_2_polaroid_title2) == 1) ? $block_2_polaroid_title2 : '';
        $polaroid_text2 = (isset($block_2_polaroid_text2) == 1) ? $block_2_polaroid_text2 : '';
        $polaroid_img2 = (isset($block_2_polaroid_img2) == 1) ? $block_2_polaroid_img2 : '';
        $polaroid_link2 = (isset($block_2_polaroid_link2) == 1) ? $block_2_polaroid_link2 : '';
        $polaroid_button_name2 = (isset($block_2_polaroid_button_name2) == 1) ? $block_2_polaroid_button_name2 : '';
        include '../blocks/polaroid_block.php';

        $block_ID = 3;
        $polaroid_background_color = (isset($block_3_polaroid_background_color) == 1) ? $block_3_polaroid_background_color : '';
        $polaroid_title1 = (isset($block_3_polaroid_title1) == 1) ? $block_3_polaroid_title1 : '';
        $polaroid_text1 = (isset($block_3_polaroid_text1) == 1) ? $block_3_polaroid_text1 : '';
        $polaroid_img1 = (isset($block_3_polaroid_img1) == 1) ? $block_3_polaroid_img1 : '';
        $polaroid_link1 = (isset($block_3_polaroid_link1) == 1) ? $block_3_polaroid_link1 : '';
        $polaroid_button_name1 = (isset($block_3_polaroid_button_name1) == 1) ? $block_3_polaroid_button_name1 : '';
        $polaroid_title2 = (isset($block_3_polaroid_title2) == 1) ? $block_3_polaroid_title2 : '';
        $polaroid_text2 = (isset($block_3_polaroid_text2) == 1) ? $block_3_polaroid_text2 : '';
        $polaroid_img2 = (isset($block_3_polaroid_img2) == 1) ? $block_3_polaroid_img2 : '';
        $polaroid_link2 = (isset($block_3_polaroid_link2) == 1) ? $block_3_polaroid_link2 : '';
        $polaroid_button_name2 = (isset($block_3_polaroid_button_name2) == 1) ? $block_3_polaroid_button_name2 : '';
        include '../blocks/polaroid_block.php';
        ?>

    <input type="submit" value="save">

</form>
</div>


<?php 
include '../admin-footer.php';
?>