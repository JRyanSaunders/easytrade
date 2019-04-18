<?php
$template_name = 'advice';
include 'header.php';

$page_ID = 5; // Hardcoded

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

$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php';
?>

<div class="row full-width-block polaroid" style="background-color: <?php echo $block_2_polaroid_background_color ?>">
    <?php
        $link = $block_2_polaroid_link1;
        $image = $block_2_polaroid_img1;
        $title = $block_2_polaroid_title1;
        $content = $block_2_polaroid_text1;
        $button_text = $block_2_polaroid_button_name1;
        include 'template-blocks/single-polaroid.php';
    ?>

    <?php
        $link = $block_2_polaroid_link2;
        $image = $block_2_polaroid_img2;
        $title = $block_2_polaroid_title2;
        $content = $block_2_polaroid_text2;
        $button_text = $block_2_polaroid_button_name2;
        include 'template-blocks/single-polaroid.php';
    ?>
</div>

<div class="row full-width-block polaroid" style="background-color: <?php echo $block_3_polaroid_background_color ?>">
    <?php
        $link = $block_3_polaroid_link1;
        $image = $block_3_polaroid_img1;
        $title = $block_3_polaroid_title1;
        $content = $block_3_polaroid_text1;
        $button_text = $block_3_polaroid_button_name1;
        include 'template-blocks/single-polaroid.php';
    ?>

    <?php
        $link = $block_3_polaroid_link2;
        $image = $block_3_polaroid_img2;
        $title = $block_3_polaroid_title2;
        $content = $block_3_polaroid_text2;
        $button_text = $block_3_polaroid_button_name2;
        include 'template-blocks/single-polaroid.php';
    ?>
</div>



<?php 
include 'footer.php';
?>