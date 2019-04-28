<?php
$template_name = 'admin';
include '../admin-header.php';

$get_page_ID = EasyTrade_Database::get_from_database("SELECT `ID` FROM `tradesman_page` WHERE `USERID` = $user_ID");
if ($get_page_ID->num_rows>0) {
    while($row = $get_page_ID->fetch_assoc()) {
        $page_ID = $row['ID'];
    }
}
?>

<div class="admin-page">

    <h1> Entries </h1>
    <h2>Contact Forms</h2>
    <hr>
    <?php $form_type = 'enquiry__' . $page_ID; ?>
    <div class="row">
        <div class="col-sm-2"><?php echo "ENTRY ID" ?></div>
        <div class="col-sm-2"><?php echo "ENQUIRY TYPE" ?></div>
        <div class="col-sm-2"><?php echo "QUOTE NAME" ?></div>
        <div class="col-sm-2"><?php echo "QUOTE EMAIL" ?></div>
        <div class="col-sm-2"><?php echo "QUOTE PHONE NUMBER" ?></div>
    </div>
    
    <?php
    $entries = EasyTrade_Database::get_from_database("SELECT * FROM entry WHERE FORM_NAME='" . $form_type . "'");
    if ($entries->num_rows > 0) {
        while($column = $entries->fetch_assoc()) {
            $entry_ID = $column["ID"];
            $entry_meta = EasyTrade_Database::get_from_database("SELECT * FROM entry_meta WHERE ENTRYID='" . $entry_ID . "'");
            if ($entry_meta->num_rows > 0) {
                
                while($row = $entry_meta->fetch_assoc()) {
                    $variable_name = $row["METAKEY"];
                    $$variable_name = $row["METAVALUE"];
                }
            }
            ?>

            <div class="row">
                <div class="col-sm-2"><?php echo $entry_ID ?></div>
                <div class="col-sm-2"><?php echo $enquiry_type ?></div>
                <div class="col-sm-2"><?php echo $quote_name ?></div>
                <div class="col-sm-2"><?php echo $quote_email ?></div>
                <div class="col-sm-2"><?php echo $quote_phoneno ?></div>
            </div>
            <div class="row"><?php echo $quote_comment ?></div>
            <hr>
        <?php } 
    } ?> 
</div>


<?php 
include '../admin-footer.php';
?>