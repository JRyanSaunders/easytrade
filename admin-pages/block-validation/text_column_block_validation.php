<?php
    /*
     *
     * TEXT BLOCK 1
     *
     */

    $text_column_block_background_colour = $_POST['block_' . $block_ID .'_text_column_block_background_color'];
    if (!empty($text_column_block_background_colour)) {
        $column_to_update = 'METAVALUE="' . $text_column_block_background_colour . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_column_block_background_color")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_column_block_column_1_lead_title = $_POST['block_' . $block_ID .'_text_column_block_column_1_lead_title'];
    if (!empty($text_column_block_column_1_lead_title)) {
        $column_to_update = 'METAVALUE="' . $text_column_block_column_1_lead_title . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_column_block_column_1_lead_title")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_column_block_column_1_text = $_POST['block_' . $block_ID .'_text_column_block_column_1_text'];
    if (!empty($text_column_block_column_1_text)) {
        $column_to_update = 'METAVALUE="' . $text_column_block_column_1_text . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_column_block_column_1_text")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_column_block_column_2_lead_title = $_POST['block_' . $block_ID .'_text_column_block_column_2_lead_title'];
    if (!empty($text_column_block_column_2_lead_title)) {
        $column_to_update = 'METAVALUE="' . $text_column_block_column_2_lead_title . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_column_block_column_2_lead_title")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $text_column_block_column_2_text = $_POST['block_' . $block_ID .'_text_column_block_column_2_text'];
    if (!empty($text_column_block_column_2_text)) {
        $column_to_update = 'METAVALUE="' . $text_column_block_column_2_text . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_text_column_block_column_2_text")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

?>