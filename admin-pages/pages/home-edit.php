<?php
include '../admin-header.php';

$page_ID = 2; // Got this from the database


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

    $block_ID = 1;
    include '../block-validation/polaroid_block_submit.php';

    // text block, block 1 

    $text_block_1_background_color = $_POST['1_text_block_background_color'];
    if (!empty($text_block_1_background_color)) {
        $column_to_update = 'METAVALUE="' .  $text_block_1_background_color . '"';
        $row_to_update = $page_finder . '"1_text_block_background_color")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_block_1_lead_title = $_POST['1_text_block_lead_title'];
    if (!empty($text_block_1_lead_title)) {
        $column_to_update = 'METAVALUE="' .  $text_block_1_lead_title . '"';
        $row_to_update = $page_finder . '"1_text_block_lead_title")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_block_1_text = $_POST['1_text_block_text'];
    if (!empty($text_block_1_text)) {
        $column_to_update = 'METAVALUE="' .  $text_block_1_text . '"';
        $row_to_update = $page_finder . '"1_text_block_text")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    // quote block 1

    $quote_block_background_color = $_POST['1_quote_block_background_color'];
    if (!empty($quote_block_background_color)) {
        $column_to_update = 'METAVALUE="' .  $quote_block_background_color . '"';
        $row_to_update = $page_finder . '"1_quote_block_background_color")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote_block_quote1 = $_POST['1_quote1'];
    if (!empty($quote_block_quote1)) {
        $column_to_update = 'METAVALUE="' .  $quote_block_quote1 . '"';
        $row_to_update = $page_finder . '"1_quote1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote_block_author1 = $_POST['1_author1'];
    if (!empty($quote_block_author1)) {
        $column_to_update = 'METAVALUE="' .  $quote_block_author1 . '"';
        $row_to_update = $page_finder . '"1_author1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote_block_quote2 = $_POST['1_quote2'];
    if (!empty($quote_block_quote2)) {
        $column_to_update = 'METAVALUE="' .  $quote_block_quote2 . '"';
        $row_to_update = $page_finder . '"1_quote2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote_block_author2 = $_POST['1_author2'];
    if (!empty($quote_block_author2)) {
        $column_to_update = 'METAVALUE="' .  $quote_block_author2 . '"';
        $row_to_update = $page_finder . '"1_author2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote_block_quote3 = $_POST['1_quote3'];
    if (!empty($quote_block_quote3)) {
        $column_to_update = 'METAVALUE="' .  $quote_block_quote3 . '"';
        $row_to_update = $page_finder . '"1_quote3")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote_block_author3 = $_POST['1_author3'];
    if (!empty($quote_block_author3)) {
        $column_to_update = 'METAVALUE="' .  $quote_block_author3 . '"';
        $row_to_update = $page_finder . '"1_author3")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }
}

?>
<div class="admin-page">
    <form method="post">

    <div class="main-header">
        <h2>Core Page Information</h2>
        <fieldset>
            <label for="parallax">Parallax</label>
            <input type="text" id="parallax" name="parallax"/>
        </fieldset> 

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

        $block_ID = 1;
        include '../blocks/text_block.php';

        $block_ID = 1;
        include '../blocks/quote_block.php'; ?>

        <input type="submit" value="save">

    </form>
</div>


<?php 
include '../admin-footer.php';
?>