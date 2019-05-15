<?php
$template_name = 'tradesman-dashboard';
include 'admin-header.php'; 

?>
<div class="admin-page">

    <h1> Your Dashboard </h1>


    <form method="post" action="<?php echo EasyTrade_Home_URL . 'functions/publish-tradesman-page.php'?>">

        <input type="hidden" name="tradesman_ID" value="<?php echo $user_ID ?>">
        <input type="submit" value="publish">

    </form>
    
    <div class="row">
        <div class="col-sm-4">
            <a href="tradesman-pages/my-details.php">
                <div class="quicklink">
                    <img class="img-responsive" src="<?php echo EasyTrade_Home_URL . '/assets/img/InformationIcon.jpg' ?>"/>
                    <h3>My Details</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="tradesman-pages/my-page.php">
                <div class="quicklink">
                    <img class="img-responsive" src="<?php echo EasyTrade_Home_URL . '/assets/img/InformationIcon.jpg' ?>"/>
                    <h3>My Webpage</h3>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <a href="tradesman-pages/my-enquiries.php">
                <div class="quicklink">
                    <img class="img-responsive" src="<?php echo EasyTrade_Home_URL . '/assets/img/InformationIcon.jpg' ?>"/>
                    <h3>My Enquiries</h3>
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="tradesman-pages/my-reviews.php">
                <div class="quicklink">
                    <img class="img-responsive" src="<?php echo EasyTrade_Home_URL . '/assets/img/InformationIcon.jpg' ?>"/>
                    <h3>My Reviews</h3>
                </div>
            </a>
        </div>
    </div>
</div>

<?php 
include 'admin-footer.php';
?>