<?php
    /*
     *
     * QUOTE BLOCK 1
     *
     */

    $quote_block_background_color = $_POST['block_' . $block_ID . '_quote_block_background_color'];
    if (!empty($quote_block_background_color)) {
        $column_to_update = 'METAVALUE="' . $quote_block_background_color . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_quote_block_background_color")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote1 = $_POST['block_' . $block_ID . '_quote1'];
    if (!empty($quote1)) {
        $column_to_update = 'METAVALUE="' . $quote1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_quote1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $author1 = $_POST['block_' . $block_ID . '_author1'];
    if (!empty($author1)) {
        $column_to_update = 'METAVALUE="' . $author1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_author1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote2 = $_POST['block_' . $block_ID . '_quote2'];
    if (!empty($quote2)) {
        $column_to_update = 'METAVALUE="' . $quote2 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_quote2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $author2 = $_POST['block_' . $block_ID . '_author2'];
    if (!empty($author2)) {
        $column_to_update = 'METAVALUE="' . $author2 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_author2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $quote3 = $_POST['block_' . $block_ID . '_quote3'];
    if (!empty($quote3)) {
        $column_to_update = 'METAVALUE="' . $quote3 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_quote3")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $author3 = $_POST['block_' . $block_ID . '_author3'];
    if (!empty($author3)) {
        $column_to_update = 'METAVALUE="' . $author3 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_author3")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

?>