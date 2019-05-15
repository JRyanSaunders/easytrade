<?php
    /*
     *
     * POLAROID BLOCK 1
     *
     */

    $polaroid_block_1_background_colour = $_POST['block_' . $block_ID . '_polaroid_background_color'];
    if (!empty($polaroid_block_1_background_colour)) {
        $column_to_update = 'METAVALUE="' . $polaroid_block_1_background_colour . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_background_color")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_title1 = $_POST['block_' . $block_ID . '_polaroid_title1'];
    if (!empty($polaroid_block_1_polaroid_title1)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_title1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_title1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_text1 = $_POST['block_' . $block_ID . '_polaroid_text1'];
    if (!empty($polaroid_block_1_polaroid_text1)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_text1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_text1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_img1 = $_POST['block_' . $block_ID . '_polaroid_img1'];
    if (!empty($polaroid_block_1_polaroid_img1)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_img1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_img1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_link1 = $_POST['block_' . $block_ID . '_polaroid_link1'];
    if (!empty($polaroid_block_1_polaroid_link1)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_link1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_link1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_button_name1 = $_POST['block_' . $block_ID . '_polaroid_button_name1'];
    if (!empty($polaroid_block_1_polaroid_button_name1)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_button_name1 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_button_name1")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_title2 = $_POST['block_' . $block_ID . '_polaroid_title2'];
    if (!empty($polaroid_block_1_polaroid_title2)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_title2 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_title2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_text2 = $_POST['block_' . $block_ID . '_polaroid_text2'];
    if (!empty($polaroid_block_1_polaroid_text2)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_text2 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_text2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_img2 = $_POST['block_' . $block_ID . '_polaroid_img2'];
    if (!empty($polaroid_block_1_polaroid_img2)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_img2 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_img2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_link2 = $_POST['block_' . $block_ID . '_polaroid_link2'];
    if (!empty($polaroid_block_1_polaroid_link2)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_link2 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_link2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $polaroid_block_1_polaroid_button_name2 = $_POST['block_' . $block_ID . '_polaroid_button_name2'];
    if (!empty($polaroid_block_1_polaroid_button_name2)) {
        $column_to_update = 'METAVALUE="' .  $polaroid_block_1_polaroid_button_name2 . '"';
        $row_to_update = $page_finder . '"block_' . $block_ID . '_polaroid_button_name2")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }
?>