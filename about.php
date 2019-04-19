<?php
$template_name = 'about';
include 'header.php';

$page_ID = 3; // Hardcoded

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
?>

<!--- ICON BLOCK --->
<div class="row icon-block">
    <h2><?php echo $block_1_icon_block_1_lead_title?></h2>
    <p class="large-text">A platform that helps you find the right decorator.</p>

    <div class="row">
        <?php
            $icon = $block_1_icon_1_image;
            $icon_alt_text = $block_1_icon_1_alt;
            $title = $block_1_icon_1_title;
            $content = $block_1_icon_1_text;
            include 'template-blocks/single-icon.php';

            $icon = $block_1_icon_2_image;
            $icon_alt_text = $block_2_icon_1_alt;
            $title = $block_1_icon_2_title;
            $content = $block_1_icon_2_text;
            include 'template-blocks/single-icon.php';

            $icon = $block_1_icon_3_image;
            $icon_alt_text = $block_3_icon_1_alt;
            $title = $block_1_icon_3_title;
            $content = $block_1_icon_3_text;
            include 'template-blocks/single-icon.php';
        ?>
    </div>
</div>
<!--- END OF ICON BLOCK --->

<div class="parallax"> </div>

<!--- IMAGE MESSAGE BLOCK --->
<?php
    $image_position = $block_1_message_block_image_position;
    $image = $block_1_message_block_image;
    $image_alt_text = $block_1_message_block_alt_text;
    $title = $block_1_message_block_lead_title;
    $content = $block_1_message_block_content;
    $button_title = $block_1_message_block_button_colour;
    include 'template-blocks/image-message-block.php';
?>
<!--- END OF IMAGE MESSAGE BLOCK --->

<!--- IMAGE MESSAGE BLOCK --->
<?php
    $image_position = $block_2_message_block_image_position;
    $image = $block_2_message_block_image;
    $image_alt_text = $block_2_message_block_alt_text;
    $title = $block_2_message_block_lead_title;
    $content = $block_2_message_block_content;
    $button_title = $block_2_message_block_button_colour;
    include 'template-blocks/image-message-block.php';
?>
<!--- END OF IMAGE MESSAGE BLOCK --->

<!--- RATING BLOCK --->
<div class="row rating-block" style="background-color: <?php echo $block_1_rating_block_background_color_1 ?>">
    <div class="row">
        <?php
            $rating = $block_1_rating_block_rating1;
            $review = $block_1_rating_block_review1;
            $review_type = $block_1_rating_block_review_type1;
            $block_colour = $block_1_rating_block_color1;
            include 'template-blocks/single-rating.php';

            $rating = $block_1_rating_block_rating2;
            $review = $block_1_rating_block_review2;
            $review_type = $block_1_rating_block_review_type2;
            $block_colour = $block_1_rating_block_color2;
            include 'template-blocks/single-rating.php';

            $rating = $block_1_rating_block_rating3;
            $review = $block_1_rating_block_review3;
            $review_type = $block_1_rating_block_review_type3;
            $block_colour = $block_1_rating_block_color3;
            include 'template-blocks/single-rating.php';
        ?>
    </div>
</div>
<!--- END OF RATING BLOCK --->

<?php 
include 'footer.php';
?>