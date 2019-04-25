<?php
$template_name = 'admin';
include '../admin-header.php';

$get_page_ID = EasyTrade_Database::get_from_database("SELECT `ID` FROM `tradesman_page` WHERE `USERID` = $user_ID");
if ($get_page_ID->num_rows>0) {
    while($row = $get_page_ID->fetch_assoc()) {
        $page_ID = $row['ID'];
    }
}

if (isset($_POST)) {

    $table_to_update = "tradesman_page_meta";
    $page_finder = '(PAGEID=' . $page_ID . ' AND METAKEY=';

    $page_background_color = $_POST['page_background_color'];
        if (!empty($page_background_color)) {
            $column_to_update = 'METAVALUE="' . $page_background_color . '"';
            $row_to_update = $page_finder . '"page_background_color")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }

    $company_name = $_POST['company_name'];
    if (!empty($company_name)) {
        $column_to_update = 'METAVALUE="' . $company_name . '"';
        $row_to_update = $page_finder . '"company_name")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        EasyTrade_Database::update_database_record('tradesman_page', 'COMPANY_NAME="' . $company_name . '"', 'ID=' . $page_ID);
        $company_name_slug = preg_replace('/[^a-z0-9]/', "-", strtolower($company_name));
        EasyTrade_Database::update_database_record('tradesman_page', 'URL_NAME="' . $company_name_slug . '"', 'ID=' . $page_ID);
    }

    $header_image = $_POST['header_image'];
    if (!empty($header_image)) {
        $column_to_update = 'METAVALUE="' . $header_image . '"';
        $row_to_update = $page_finder . '"header_image")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

    $company_logo = $_POST['company_logo'];
    if (!empty($company_logo)) {
        $column_to_update = 'METAVALUE="' . $company_logo . '"';
        $row_to_update = $page_finder . '"company_logo")';
        EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
    }

}

// get current data and fill fields
$get_page_meta = EasyTrade_Database::get_from_database("SELECT * FROM `tradesman_page_meta` WHERE `PAGEID` = $page_ID");
if ($get_page_meta->num_rows>0) {
    while($row = $get_page_meta->fetch_assoc()) {
        $variable_name = $row["METAKEY"];
        $$variable_name = $row["METAVALUE"];
    }
}

?>

<div class="admin-page">
    <form method="post">


        <!-- company name etc -->

        <h2> My Details </h2>

        <fieldset>
            <?php $page_background_color = (isset($page_background_color)) ? $page_background_color : ''; ?>
            <label for="background_color">Background Color:</label>
            <input type="color" id="page_background_color" name="page_background_color" value="<?php echo $page_background_color ?>"/>
        </fieldset>

        <fieldset>
            <?php $company_name = (isset($company_name)) ? $company_name : ''; ?>
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" value="<?php echo $company_name ?>"/>
        </fieldset>

        <fieldset>
            <?php $header_image = (isset($header_image)) ? $header_image : ''; ?>
            <label for="header_image">Header Image:</label>
            <input type="text" id="header_image" name="header_image" value="<?php echo $header_image ?>"/>
        </fieldset>

        <fieldset>
            <?php $company_logo = (isset($company_logo)) ? $company_logo : ''; ?>
            <label for="company_logo">Company Logo:</label>
            <input type="text" id="company_logo" name="company_logo" value="<?php echo $company_logo ?>"/>
        </fieldset>

        <input type="submit" value="save">

    </form>
</div>


<?php 
include '../admin-footer.php';
?>