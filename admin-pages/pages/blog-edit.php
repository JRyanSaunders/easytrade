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

    $page_subtitle = $_POST['page_subtitle'];
    if (!empty($page_subtitle)) {
        $column_to_update = 'METAVALUE="' . $page_subtitle . '"';
        $row_to_update = $page_finder . '"page_subtitle")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $block_ID = 2;
    include '../block-validation/polaroid_block_submit.php';

    $block_ID = 3;
    include '../block-validation/polaroid_block_submit.php';
}

// THIS IS THE PROFFESSIONAL ADVICE PAGE

?>
<div class="admin-page">
<form method="post">

<div class="main-header">
        <h2>Core Page Information</h2>
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
        $block_ID = 2;
        include '../blocks/polaroid_block.php';

        $block_ID = 3;
        include '../blocks/polaroid_block.php';?>
    </div>

    <input type="submit" value="save">

</form>
</div>


<?php 
include '../admin-footer.php';
?>