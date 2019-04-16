<?php
$template_name = 'home';
include 'header.php';

$page_ID = 2; // Hardcoded

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

// Delete these once you have matched up the correct fields
$text_block_background_colour = '#FFF';
$text_block_column_background_colour = '#6893A3';
$quote_block_background_colour = '#6893A3';
$rating_block_background_colour = '#FFF';

?>



<div class="parallax">
    <h1><?php echo $page_title ?></h1>
    <h2><?php echo $page_subtitle ?></h2>
    <input type="text" placeholder="Search" class="homesearch">
</div>

<div class="row full-width-block polaroid" style="background-color: <?php echo $block_1_polaroid_background_color ?>">
    <?php
        $link = $block_1_polaroid_link1;
        $image = $block_1_polaroid_img1;
        $title = $block_1_polaroid_title1;
        $content = $block_1_polaroid_text1;
        $button_text = $;
        include 'template-blocks/single-polaroid.php';
    ?>

    <?php
        $link = 'signup.php';
        $image = 'advice1.jpg';
        $title = $block_1_polaroid_title2;
        $content = 'lorem ipsum';
        $button_text = 'More information';
        include 'template-blocks/single-polaroid.php';
    ?>
</div>

<div class="row" style="background-color: <?php echo $text_block_background_colour ?>">
    <?php
        $lead_title = 'I need a tradesman or service.';
        $content = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting
        Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting';
        include 'template-blocks/text-block.php';
    ?>
</div>

<div class="row" style="background-color: <?php echo $quote_block_background_colour ?>">
    <?php
        $quote1 = 'INTERESTING QUOTE RECCOMMENDING THE WEBSITE OR THE TRADEMSMAN GOES IN THIS SLOT IT LOOKS REALLY NICE';
        $author1 = 'Author 1';
        $quote2 = 'INTERESTING QUOTE RECCOMMENDING THE WEBSITE OR THE TRADEMSMAN GOES IN THIS SLOT IT LOOKS REALLY NICE';
        $author2 = 'Author 2';
        $quote3 = 'INTERESTING QUOTE RECCOMMENDING THE WEBSITE OR THE TRADEMSMAN GOES IN THIS SLOT IT LOOKS REALLY NICE';
        $author3 = 'Author 3';
        include 'template-blocks/quote-block.php';
    ?>
</div>

<?php
include 'footer.php';
?>