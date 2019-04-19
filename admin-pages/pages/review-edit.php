<?php
include '../admin-header.php';

$page_ID = 4; // Got this from the database

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

    $block_ID = 1;
    include '../block-validation/rating_block_submit.php';

    $block_ID = 2;
    include '../block-validation/rating_block_submit.php';

    $block_ID = 3;  
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
?>

<div class="admin-page">
    <form method="post">
    <?php include '../blocks/page_header.php';

        $block_ID = 1;
        $rating_block_background_color = (isset($block_1_rating_block_background_color) == 1) ? $block_1_rating_block_background_color : '';

        $rating_block_color1 = (isset($block_1_rating_block_color1) == 1) ? $block_1_rating_block_color1 : '';
        $rating_block_rating1 = (isset($block_1_rating_block_rating1) == 1) ? $block_1_rating_block_rating1 : '';
        $rating_block_review1 = (isset($block_1_rating_block_review1) == 1) ? $block_1_rating_block_review1 : '';
        $rating_block_review_type1 = (isset($block_1_rating_block_review_type1) == 1) ? $block_1_rating_block_review_type1 : '';
    
        $rating_block_color2 = (isset($block_1_rating_block_color2) == 1) ? $block_1_rating_block_color2 : '';
        $rating_block_rating2 = (isset($block_1_rating_block_rating2) == 1) ? $block_1_rating_block_rating2 : '';
        $rating_block_review2 = (isset($block_1_rating_block_review2) == 1) ? $block_1_rating_block_review2 : '';
        $rating_block_review_type2 = (isset($block_1_rating_block_review_type2) == 1) ? $block_1_rating_block_review_type2 : '';
    
        $rating_block_color3 = (isset($block_1_rating_block_color3) == 1) ? $block_1_rating_block_color3 : '';
        $rating_block_rating3 = (isset($block_1_rating_block_rating3) == 1) ? $block_1_rating_block_rating3 : '';
        $rating_block_review3 = (isset($block_1_rating_block_review3) == 1) ? $block_1_rating_block_review3 : '';
        $rating_block_review_type3 = (isset($block_1_rating_block_review_type3) == 1) ? $block_1_rating_block_review_type3 : '';
        include '../blocks/rating_block.php';

        $block_ID = 2;
        $rating_block_background_color = (isset($block_2_rating_block_background_color) == 1) ? $block_2_rating_block_background_color : '';

        $rating_block_color1 = (isset($block_2_rating_block_color1) == 1) ? $block_2_rating_block_color1 : '';
        $rating_block_rating1 = (isset($block_2_rating_block_rating1) == 1) ? $block_2_rating_block_rating1 : '';
        $rating_block_review1 = (isset($block_2_rating_block_review1) == 1) ? $block_2_rating_block_review1 : '';
        $rating_block_review_type1 = (isset($block_2_rating_block_review_type1) == 1) ? $block_2_rating_block_review_type1 : '';
    
        $rating_block_color2 = (isset($block_2_rating_block_color2) == 1) ? $block_2_rating_block_color2 : '';
        $rating_block_rating2 = (isset($block_2_rating_block_rating2) == 1) ? $block_2_rating_block_rating2 : '';
        $rating_block_review2 = (isset($block_2_rating_block_review2) == 1) ? $block_2_rating_block_review2 : '';
        $rating_block_review_type2 = (isset($block_2_rating_block_review_type2) == 1) ? $block_2_rating_block_review_type2 : '';
    
        $rating_block_color3 = (isset($block_2_rating_block_color3) == 1) ? $block_2_rating_block_color3 : '';
        $rating_block_rating3 = (isset($block_2_rating_block_rating3) == 1) ? $block_2_rating_block_rating3 : '';
        $rating_block_review3 = (isset($block_2_rating_block_review3) == 1) ? $block_2_rating_block_review3 : '';
        $rating_block_review_type3 = (isset($block_2_rating_block_review_type3) == 1) ? $block_2_rating_block_review_type3 : '';
        include '../blocks/rating_block.php';

        $block_ID = 3;
        $rating_block_background_color = (isset($block_3_rating_block_background_color) == 1) ? $block_3_rating_block_background_color : '';

        $rating_block_color1 = (isset($block_3_rating_block_color1) == 1) ? $block_3_rating_block_color1 : '';
        $rating_block_rating1 = (isset($block_3_rating_block_rating1) == 1) ? $block_3_rating_block_rating1 : '';
        $rating_block_review1 = (isset($block_3_rating_block_review1) == 1) ? $block_3_rating_block_review1 : '';
        $rating_block_review_type1 = (isset($block_3_rating_block_review_type1) == 1) ? $block_3_rating_block_review_type1 : '';
    
        $rating_block_color2 = (isset($block_3_rating_block_color2) == 1) ? $block_3_rating_block_color2 : '';
        $rating_block_rating2 = (isset($block_3_rating_block_rating2) == 1) ? $block_3_rating_block_rating2 : '';
        $rating_block_review2 = (isset($block_3_rating_block_review2) == 1) ? $block_3_rating_block_review2 : '';
        $rating_block_review_type2 = (isset($block_3_rating_block_review_type2) == 1) ? $block_3_rating_block_review_type2 : '';
    
        $rating_block_color3 = (isset($block_3_rating_block_color3) == 1) ? $block_3_rating_block_color3 : '';
        $rating_block_rating3 = (isset($block_3_rating_block_rating3) == 1) ? $block_3_rating_block_rating3 : '';
        $rating_block_review3 = (isset($block_3_rating_block_review3) == 1) ? $block_3_rating_block_review3 : '';
        $rating_block_review_type3 = (isset($block_3_rating_block_review_type3) == 1) ? $block_3_rating_block_review_type3 : '';
        include '../blocks/rating_block.php';
        ?>

        <input type="submit" value="save">

    </form>
</div>

<?php 
include '../admin-footer.php';
?>