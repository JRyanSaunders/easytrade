<?php
    /*
     *
     * TEXT BLOCK 1
     *
     */

    $text_block_background_color = $_POST['block_' . $block_ID .'_text_block_background_color'];
    if (!empty($text_block_background_color)) {
        $column_to_update = 'METAVALUE="' . $text_block_background_color . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_block_background_color")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_block_lead_title = $_POST['block_' . $block_ID .'_text_block_lead_title'];
    if (!empty($text_block_lead_title)) {
        $column_to_update = 'METAVALUE="' . $text_block_lead_title . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_block_lead_title")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_block_text = $_POST['block_' . $block_ID .'_text_block_text'];
    if (!empty($text_block_text)) {
        $column_to_update = 'METAVALUE="' . $text_block_text . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_block_text")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

?>