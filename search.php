<?php
$template_name = 'search';
include 'header.php';

$page_ID = 11;

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

<?php 
$search_string = $_POST['search_string'];

//Search Companies (tradesman)
$search_results = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page WHERE COMPANY_NAME LIKE '%" . $search_string . "%'");
if ($search_results->num_rows > 0) {
    while($row = $search_results->fetch_assoc()) {

















        
        $tradesman_page_ID = $row["ID"];
        $company = $row["COMPANY_NAME"];
        $url = $row["URL_NAME"];

        $tradesman_info = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page_meta WHERE (PAGEID=" . $tradesman_page_ID . " AND METAKEY='company_about')");
        if ($tradesman_info->num_rows > 0) {
            while($row = $tradesman_info->fetch_assoc()) {
                $tradesman_information = $row["METAVALUE"];
            }
        }
        ?>
        
        <a href="<?php echo EasyTrade_Home_URL . 'tradesman/' . $url . '.php' ?>">
            <div class="search-result">
                <h3><?php echo $company ?></h3>
                <p><?php echo $tradesman_information ?></p>
            </div>
        </a>
        

<?php
    }
}

include 'footer.php';
?>