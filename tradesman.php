<?php
$template_name = 'tradesman';
include 'header.php';

$page_header_image = 'room3.svg';
$page_title = 'All Tradesman';
$page_subtitle = 'Everyone';

$blog = ($template_name == 'blog-post') ? 'blog' : false;
include 'template-blocks/page-header.php'; ?>

<div class="row">
    <div class="col-sm-12">
        <?php
        $all_tradesman = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page");
        if ($all_tradesman->num_rows > 0) {
            while($row = $all_tradesman->fetch_assoc()) {
                $tradesman_page_ID = $row["ID"];
                $company_name = $row["COMPANY_NAME"];
                $url = $row["URL_NAME"];

                $tradesman_info = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page_meta WHERE PAGEID=" . $tradesman_page_ID);
                if ($tradesman_info->num_rows > 0) {
                    while($row = $tradesman_info->fetch_assoc()) {
                        $variable = $row["METAKEY"];
                        $$variable = $row["METAVALUE"];
                    }
                } 
                $tradesman_tagline = (strlen($company_about) > 100) ? substr($company_about, 0, 100) . '...' : $company_about; ?>
                
                <a class="col-sm-3 single-tradesman" href="<?php echo EasyTrade_Home_URL . 'tradesman/' . $url . '.php' ?>">
                <img class="img-responsive" src="<?php echo EasyTrade_Home_URL . 'assets/img/' . $company_logo ?>"/> 
                <h3><?php echo $company_name ?></h3>
                    <p><?php echo $tradesman_tagline ?></p>
                </a>
                
            <?php }  
        } ?>
    </div>
</div>

<?php 
include 'footer.php';
?>