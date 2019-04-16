<?php
    /*
     *
     * TEXT BLOCK 1
     *
     */

    $rating_block_1_block_color_1 = $_POST['block_' . $block_ID .'_text_block_background_color'];
    if (!empty($rating_block_1_block_color_1)) {
        $column_to_update = 'METAVALUE="' . $rating_block_1_block_color_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_block_background_color")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $rating_block_1_block_color_1 = $_POST['block_' . $block_ID .'_text_block_lead_title'];
    if (!empty($rating_block_1_block_color_1)) {
        $column_to_update = 'METAVALUE="' . $rating_block_1_block_color_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_block_lead_title")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $rating_block_1_block_color_1 = $_POST['block_' . $block_ID .'_text_block_text'];
    if (!empty($rating_block_1_block_color_1)) {
        $column_to_update = 'METAVALUE="' . $rating_block_1_block_color_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_block_text")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

?>