<?php
$template_name = 'about';
include 'header.php';


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

<div class="textsection">
<h3>about the website</h3>
<h1><?php echo $page_title ?></h1>
<p>It's difficult finding a tradesman you can trust.
This website helps you find the right tradesman for you</p>
<button class="btn btn-primary">Find  a tradesman</button>
</div>

<!--- ICON BLOCK --->
<div class="row icon-block">
    <h2><?php echo $block_1_icon_block_1_lead_title?></h2>
    <p class="large-text">A platform that helps you find the right decorator.</p>

    <div class="row">
        <?php
            $icon = 'world.svg';
            $icon_alt_text = 'world';
            $title = $block_1_icon_1_title;
            $content = 'New connections to companies, to help you with the dream house that you deserve.';
            include 'template-blocks/single-icon.php';

            $icon = 'world.svg';
            $icon_alt_text = 'world';
            $title = 'Discover';
            $content = 'New connections to companies, to help you with the dream house that you deserve.';
            include 'template-blocks/single-icon.php';

            $icon = 'world.svg';
            $icon_alt_text = 'world';
            $title = 'Discover';
            $content = 'New connections to companies, to help you with the dream house that you deserve.';
            include 'template-blocks/single-icon.php';
        ?>
    </div>
</div>
<!--- END OF ICON BLOCK --->

<div class="parallax"> </div>

<!--- IMAGE MESSAGE BLOCK --->
<?php
    $image_position = 'left';
    $image = 'brush1.svg';
    $image_alt_text = 'brush';
    $title = 'Accountability through feedback';
    $content = 'Once a job is in progress, a bit of accountability goes a long way. EasyTrade’s feedback 
    system ensures that tradesmen are rewarded for good work and held accountable for any problems. 
    Our tradesmen relish the opportunity to build an outstanding reputation on this website, 
    and your feedback makes that possible.';
    $button_title = 'See our work';
    include 'template-blocks/image-message-block.php';
?>
<!--- END OF IMAGE MESSAGE BLOCK --->

<!--- IMAGE MESSAGE BLOCK --->
<?php
    $image_position = 'right';
    $image = 'brush2.svg';
    $image_alt_text = 'brush';
    $title = 'Accountability through feedback';
    $content = 'Once a job is in progress, a bit of accountability goes a long way. EasyTrade’s feedback 
    system ensures that tradesmen are rewarded for good work and held accountable for any problems. 
    Our tradesmen relish the opportunity to build an outstanding reputation on this website, 
    and your feedback makes that possible.';
    $button_title = 'Click me';
    include 'template-blocks/image-message-block.php';
?>
<!--- END OF IMAGE MESSAGE BLOCK --->

<!--- RATING BLOCK --->
<div class="row rating-block" style="background-color: <?php echo $rating_block_background_colour ?>">
    <div class="row">
        <?php
            $rating = 1;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 3;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 4;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';
        ?>
    </div>
</div>
<!--- END OF RATING BLOCK --->

<?php 
include 'footer.php';
?>