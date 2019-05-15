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

<h1> Reviews </h1>
<hr>
<?php $form_type = 'review__' . $page_ID; ?>
<div class="row">
    <div class="col-sm-2"><?php echo "ENTRY ID" ?></div>
    <div class="col-sm-2"><?php echo "BLOCK COLOUR" ?></div>
    <div class="col-sm-2"><?php echo "RATING" ?></div>
    <div class="col-sm-2"><?php echo "REVIEW" ?></div>
    <div class="col-sm-2"><?php echo "REVIEW NAME" ?></div>
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
            <div class="col-sm-2"><?php echo $block_colour ?></div>
            <div class="col-sm-2"><?php echo $rating ?></div>
            <div class="col-sm-2"><?php echo $review ?></div>
            <div class="col-sm-2"><?php echo $review_name ?></div>
        </div>
        <hr>
    <?php } 
} ?> 
</div>


<?php 
include '../admin-footer.php';
?>