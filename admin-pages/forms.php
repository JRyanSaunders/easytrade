<?php
$template_name = 'forms';
include 'admin-header.php';

$page_ID = 15;

?>
<div class="admin-page">

<h1> Entries </h1>

<h2>Contact Forms</h2>

<?php 
$form_type = 'contact-form';

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
    
        // print on page as a row of information
        echo "Entry ID: " . $entry_ID . "<br>";
        echo "Review: " . $review . "<br>";
        echo "Review type: " . $review_type . "<br>";
        echo "Rating: " . $rating . "<br>";

        echo "<hr>";
        
    } 
}

?>


</div>

<?php 
include 'admin-footer.php';
?>