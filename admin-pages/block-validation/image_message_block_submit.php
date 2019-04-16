<?php
/*
     *
     * IMAGE MESSAGE BLOCK 1
     *
     */
    $image_message_block_image_position_1 = $_POST['block_' . $block_ID .'_message_block_image_position'];
    if (!empty($image_message_block_image_position_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_image_position_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_message_block_image_position")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_image_1 = $_POST['block_' . $block_ID . '_message_block_image'];
    if (!empty($image_message_block_image_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_image_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_message_block_image")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_image_alt_text_1 = $_POST['block_' . $block_ID . '_message_block_alt_text'];
    if (!empty($image_message_block_image_alt_text_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_image_alt_text_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_message_block_alt_text")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_lead_title_1 = $_POST['block_' . $block_ID . '_message_block_lead_title'];
    if (!empty($image_message_block_lead_title_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_lead_title_1  . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_message_block_lead_title")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_content_1 = $_POST['block_' . $block_ID . '_message_block_content'];
    if (!empty($image_message_block_content_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_content_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_message_block_content")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_button_colour_1 = $_POST['block_' . $block_ID . '_message_block_button_colour'];
    if (!empty($image_message_block_button_colour_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_button_colour_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_message_block_button_colour")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $image_message_block_link_1 = $_POST['block_' . $block_ID . '_message_block_link'];
    if (!empty($image_message_block_link_1)) {
        $column_to_update = 'METAVALUE="' . $image_message_block_link_1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_message_block_link")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }
?>