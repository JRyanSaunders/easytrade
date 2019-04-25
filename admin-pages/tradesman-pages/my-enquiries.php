<?php
$template_name = 'admin';
include '../admin-header.php';

$get_page_ID = EasyTrade_Database::get_from_database("SELECT `ID` FROM `tradesman_page` WHERE `USERID` = $user_ID");
if ($get_page_ID->num_rows>0) {
    while($row = $get_page_ID->fetch_assoc()) {
        $page_ID = $row['ID'];
    }
}

if ($_POST) {

    //validate
    //update database
}

// get current data and fill fields

?>

<div class="admin-page">

    <h1> Entries </h1>
    <h2>Contact Forms</h2>
    <hr>
    <?php $form_type = 'tradesman__' . $user_ID . '__enquiry-form'; ?>
    <div class="row">
        <div class="col-sm-2"><?php echo "ENTRY ID" ?></div>
        <div class="col-sm-2"><?php echo "USER NAME" ?></div>
        <div class="col-sm-2"><?php echo "USER TYPE" ?></div>
        <div class="col-sm-2"><?php echo "USER ENQUIRY TYPE" ?></div>
        <div class="col-sm-2"><?php echo "USER EMAIL" ?></div>
    </div>
    
    <form method="post">


        <!-- company name etc -->








        <input type="submit" value="save">

    </form>
</div>


<?php 
include '../admin-footer.php';
?>