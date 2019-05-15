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

$page_header_background_image = 'landscape-architecture.jpg';
$blog = ($template_name == 'blog-post') ? 'blog' : false;
include 'template-blocks/page-header.php';
?>

<?php 
$search_string = $_POST['search_string'];
$all_search_results = array();

//Search Companies (tradesman)
$search_companies = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page WHERE COMPANY_NAME LIKE '%" . $search_string . "%'");
if ($search_companies->num_rows > 0) {
    while($row = $search_companies->fetch_assoc()) {
        $page_title = $row["COMPANY_NAME"];
        $page_url = EasyTrade_Home_URL . 'tradesman/' . $row["URL_NAME"] . '.php';


        $tradesman_page_ID = $row["ID"];
        $tradesman_info = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page_meta WHERE (PAGEID=" . $tradesman_page_ID . " AND METAKEY='company_about')");
        if ($tradesman_info->num_rows > 0) {
            while($row = $tradesman_info->fetch_assoc()) {
                $page_info = $row["METAVALUE"];
            }
        }
        $all_search_results[] = $page_title . '__' . $page_url . '__' . $page_info;
    }
}

//Search Pages
$search_pages = EasyTrade_Database::get_from_database("SELECT * FROM page_meta WHERE METAVALUE LIKE '%" . $search_string . "%'");
if ($search_pages->num_rows > 0) {
    while($row = $search_pages->fetch_assoc()) {
        $result_page_ID = $row["PAGEID"];

        if (($result_page_ID !== 11) && ($result_page_ID !== 12) && ($result_page_ID !== 13) && ($result_page_ID !== 15) && ($result_page_ID !== 16)) {

            $get_page_title = EasyTrade_Database::get_from_database("SELECT * FROM page WHERE ID=" . $result_page_ID);
            if ($get_page_title->num_rows > 0) {
                while($row = $get_page_title->fetch_assoc()) {
                    $page_title = $row["PAGE_TITLE"];
                    $page_url = EasyTrade_Home_URL . $row["URL_NAME"];
                }
            }
            $all_page_data = EasyTrade_Database::get_from_database("SELECT * FROM page_meta WHERE PAGEID=" . $result_page_ID);
            if ($all_page_data->num_rows > 0) {
                while($row = $all_page_data->fetch_assoc()) {
                    $variable_name = $row["METAKEY"];
                    $$variable_name = $row["METAVALUE"];
                }
            }
            $page_info = $page_subtitle;

            $all_search_results[] = $page_title . '__' . $page_url . '__' . $page_info;
        }
    }
}

//Search Tradesman Pages
$search_pages = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page_meta WHERE METAVALUE LIKE '%" . $search_string . "%'");
if ($search_pages->num_rows > 0) {
    while($row = $search_pages->fetch_assoc()) {
        $result_page_ID = $row["PAGEID"];

        $get_page_title = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page WHERE ID=" . $result_page_ID);
        if ($get_page_title->num_rows > 0) {
            while($row = $get_page_title->fetch_assoc()) {
                $page_title = $row["COMPANY_NAME"];
                $page_url = EasyTrade_Home_URL . 'tradesman/' . $row["URL_NAME"] . '.php';
            }
        }
        $all_page_data = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page_meta WHERE PAGEID=" . $result_page_ID);
        if ($all_page_data->num_rows > 0) {
            while($row = $all_page_data->fetch_assoc()) {
                $variable_name = $row["METAKEY"];
                $$variable_name = $row["METAVALUE"];
            }
        }
        $page_info = $company_about;

        $all_search_results[] = $page_title . '__' . $page_url . '__' . $page_info;
        
    }
}?>

<div class="row" style="margin: 40px 0;">
    <div class="col-sm-12">
         <h3 style="margin-bottom: 25px">Search results for <?php echo $search_string ?>...</h3>
        <?php foreach (array_unique($all_search_results) as $result) {
            $split_result = explode('__', $result);
            $page_title = $split_result[0];
            $page_url = $split_result[1];
            $page_info = $split_result[2];
            $page_info = (strlen($page_info) > 100) ? substr($page_info, 0, 100) . '...' : $page_info;
            ?>
            <div class="col-sm-3">
                <a href="<?php echo $page_url ?>">
                    <div class="search-result">
                        <div class="header">
                            <h3><?php echo $page_title ?></h3>
                        </div>
                        <p><?php echo $page_info ?></p>
                    </div>
                </a>
            </div>

        <?php } ?>
    </div>
</div>
                
        
        

<?php
include 'footer.php';
?>