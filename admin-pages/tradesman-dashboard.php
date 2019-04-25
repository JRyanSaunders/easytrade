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

</div>

<?php 
include 'admin-footer.php';
?>