<?php
$template_name = 'blog-post';
include '../header.php';

$page_ID = 7; // Hardcoded

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
include '../template-blocks/page-header.php';
?>

<div class="row" style="background-color: <?php echo $block_1_text_block_background_color ?>">
    <?php
        $lead_title = $block_1_text_block_lead_title;
        $content = $block_1_text_block_text;
        include '../template-blocks/text-block.php';
    ?>
</div>

<!--- IMAGE MESSAGE BLOCK --->
<?php
    $image_position = $block_1_message_block_image_position;
    $image = $block_1_message_block_image;
    $image_alt_text = $block_1_message_block_alt_text;
    $title = $block_1_message_block_lead_title;
    $content = $block_1_message_block_content;
    $button_title = $block_1_message_block_button_colour;
    include '../template-blocks/image-message-block.php';
?>
<!--- END OF IMAGE MESSAGE BLOCK --->

<div class="row" style="background-color: <?php echo $block_1_text_block_background_color ?>">
    <?php
        $lead_title1 = $block_1_text_block_lead_title1;
        $content1 = $block_1_text_block_text1;
        $lead_title2 = $block_1_text_block_lead_title2;
        $content2 = $block_1_text_block_text2;
        include '../template-blocks/text-column-block.php';
    ?>
</div>

<div class="row full-width-block polaroid" style="background-color: <?php echo $block_1_polaroid_background_color ?>">
    <?php
        $link = $block_1_polaroid_link1;
        $image = $block_1_polaroid_img1;
        $title = $block_1_polaroid_title1;
        $content = $block_1_polaroid_text1;
        $button_text = $block_1_polaroid_button_name1;
        include '../template-blocks/single-polaroid.php';
    ?>

    <?php
        $link = $block_1_polaroid_link2;
        $image = $block_1_polaroid_img2;
        $title = $block_1_polaroid_title2;
        $content = $block_1_polaroid_text2;
        $button_text = $block_1_polaroid_button_name2;
        include '../template-blocks/single-polaroid.php';
    ?>
</div>

<?php 
include '../footer.php';
?>