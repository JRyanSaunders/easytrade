<?php
$template_name = 'about';
include 'header.php';

$page_ID = 4; // Hardcoded

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

<!--- RATING BLOCK --->
<div class="row rating-block" style="background-color: <?php echo $block_1_rating_block_background_color ?>">
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
<!--- RATING BLOCK --->
<div class="row rating-block" style="background-color: <?php echo $block_2_rating_block_background_color ?>">
    <div class="row">
        <?php
            $rating = $block_2_rating_block_rating1;
            $review = $block_2_rating_block_review1;
            $review_type = $block_2_rating_block_review_type1;
            $block_colour = $block_2_rating_block_color1;
            include 'template-blocks/single-rating.php';

            $rating = $block_2_rating_block_rating2;
            $review = $block_2_rating_block_review2;
            $review_type = $block_2_rating_block_review_type2;
            $block_colour = $block_2_rating_block_color2;
            include 'template-blocks/single-rating.php';

            $rating = $block_2_rating_block_rating3;
            $review = $block_2_rating_block_review3;
            $review_type = $block_2_rating_block_review_type3;
            $block_colour = $block_2_rating_block_color3;
            include 'template-blocks/single-rating.php';
        ?>
    </div>
</div>
<!--- RATING BLOCK --->
<div class="row rating-block" style="background-color: <?php echo $block_3_rating_block_background_color ?>">
    <div class="row">
        <?php
            $rating = $block_3_rating_block_rating1;
            $review = $block_3_rating_block_review1;
            $review_type = $block_3_rating_block_review_type1;
            $block_colour = $block_3_rating_block_color1;
            include 'template-blocks/single-rating.php';

            $rating = $block_3_rating_block_rating2;
            $review = $block_3_rating_block_review2;
            $review_type = $block_3_rating_block_review_type2;
            $block_colour = $block_3_rating_block_color2;
            include 'template-blocks/single-rating.php';

            $rating = $block_3_rating_block_rating3;
            $review = $block_3_rating_block_review3;
            $review_type = $block_3_rating_block_review_type3;
            $block_colour = $block_3_rating_block_color3;
            include 'template-blocks/single-rating.php';
        ?>
    </div>
</div>
<!--- END OF RATING BLOCK --->

<!--- BUTTON  --->

<div class="center" style="margin-bottom: 50px;">
    <a href="<?php echo EasyTrade_Home_URL . 'leaveareview.php' ?>"><button class="btn et-btn-med">WRITE A REVIEW</button></a>
</div>


<?php 
include 'footer.php';
?>