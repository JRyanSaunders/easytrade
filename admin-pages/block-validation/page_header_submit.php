<?php
    /*
     *
     * PAGE HEADER
     *
     */

    $page_header_background_image = $_POST['page_header_background_image'];
    if (!empty($page_header_background_image)) {
        $column_to_update = 'METAVALUE="' . $page_header_background_image . '"';
        $row_to_update = $page_finder . '"page_header_background_image")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    // Page Title already submitted

    $page_subtitle = $_POST['page_subtitle'];
    if (!empty($page_subtitle)) {
        $column_to_update = 'METAVALUE="' . $page_subtitle . '"';
        $row_to_update = $page_finder . '"page_subtitle")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

?>