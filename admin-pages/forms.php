<?php
$template_name = 'forms';
include 'admin-header.php';

$page_ID = 15;

?>
<div class="admin-page">

<h1> Entries </h1>
<br>
<h2>Contact Forms</h2>
<hr>
<?php 
$form_type = 'contact-form'; ?>
<div class="row">
            <div class="col-sm-2"><?php echo "ENTRY ID" ?></div>
            <div class="col-sm-2"><?php echo "USER NAME" ?></div>
            <div class="col-sm-2"><?php echo "USER TYPE" ?></div>
            <div class="col-sm-2"><?php echo "USER ENQUIRY TYPE" ?></div>
            <div class="col-sm-2"><?php echo "USER EMAIL" ?></div>
        </div>
        <?php
// NEED TO ADD A WAY TO SHOW ITS A 'COMMENT'

// Page Title
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
            <div class="col-sm-2"><?php echo $user_name ?></div>
            <div class="col-sm-2"><?php echo $user_type ?></div>
            <div class="col-sm-2"><?php echo $user_enquiry_type ?></div>
            <div class="col-sm-2"><?php echo $user_email ?></div>
        </div>
        <div class="row"><?php echo $user_comment ?></div>
        <hr>
        <?php
    } 
}

?>



<h2>Reviews</h2>
<hr>

<?php 
$form_type = 'review';

// Page Title
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
            <div class="col-sm-4"><?php echo "ENTRY ID" ?></div>
            <div class="col-sm-4"><?php echo "RATING" ?></div>
            <div class="col-sm-4"><?php echo "REVIEW TYPE" ?></div>
        </div>

        <div class="row">
            <div class="col-sm-4"><?php echo $entry_ID ?></div>
            <div class="col-sm-4"><?php echo $rating ?></div>
            <div class="col-sm-4"><?php echo $review_type ?></div>
        </div>
        <div class="row"><?php echo $review ?></div>
        <hr>
        <?php
    } 
}

?> 
</div>

<?php 
include 'admin-footer.php';
?>