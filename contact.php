<?php
$template_name = 'contact';
include 'header.php';

$page_ID = 6;

// Page Title
$get_page_title = EasyTrade_Database::get_from_database("SELECT PAGE_TITLE FROM page WHERE ID=" . $page_ID);
    if ($get_page_title->num_rows > 0) {
    while($row = $get_page_title->fetch_assoc()) {
        $page_title = $row["PAGE_TITLE"];
    }
}

// All other page information (page meta)
$all_page_data = EasyTrade_Database::get_from_database("SELECT * FROM page_meta WHERE PAGEID=" . $page_ID);
    if ($all_page_data->num_rows > 0) {
    while($row = $all_page_data->fetch_assoc()) {
        $variable_name = $row["METAKEY"];
        $$variable_name = $row["METAVALUE"];
    }
}

$blog = ($template_name == 'blog-post') ? 'blog' : false;
include 'template-blocks/page-header.php';
?>

<div class="form">
    
    <div class="form-group">
    <label for="sel1">Tell us who you are:</label>
    <select class="form-control" id="sel1">
        <option>Customer</option>
        <option>Tradesman</option>
        <option>Other</option>
    </select>
    </div>

    <div class="form-group">
    <label for="usr">Name:</label>
    <input type="text" class="form-control" id="usr">
    </div>

    <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>

    <button class="btn btn-primary">Send</button>

</div>


<?php 
include 'footer.php';
?>