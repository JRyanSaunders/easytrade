<?php
$template_name = 'advice';
include 'header.php';
$page_title = 'Professional advice';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php'; ?>

<div class="row full-width-block polaroid" style="background-color: <?php echo $polaroid_background_colour ?>">
    <?php
        $link = 'visit.php';
        $image = 'visit.jpg';
        $title = 'Prepare for a visit';
        $content = 'lorem ipsum';
        $button_text = 'More information';
        include 'template-blocks/single-polaroid.php';
    ?>

    <?php
        $link = 'development.php';
        $image = 'development.jpg';
        $title = 'Permitted development';
        $content = 'lorem ipsum';
        $button_text = 'More information';
        include 'template-blocks/single-polaroid.php';
    ?>
</div>

<div class="row full-width-block polaroid" style="background-color: <?php echo $polaroid_background_colour ?>">

<?php
        $link = 'tradesman.php';
        $image = 'tradesman.jpg';
        $title = 'Advice on hiring tradesman';
        $content = 'lorem ipsum';
        $button_text = 'More information';
        include 'template-blocks/single-polaroid.php';
    ?>

    <?php
        $link = 'pricing.php';
        $image = 'pricing.jpg';
        $title = 'Pricing guides';
        $content = 'lorem ipsum';
        $button_text = 'More information';
        include 'template-blocks/single-polaroid.php';
    ?>
</div>



<?php 
include 'footer.php';
?>