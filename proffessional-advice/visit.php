<?php
$template_name = 'blogpost';
include 'header.php';
$page_title = 'Prepare for a visit';
$page_header_image = 'visit.jpg';
include 'template-blocks/page-header.php'; ?>

<p>Posted on April 3rd 2019</p>
<div class="line"></div>
<div class="row" style="background-color: <?php echo $text_block_background_colour ?>">
    <?php
        $lead_title = 'tips in preparation for a visit';
        $content = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting
        Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting';
        include 'template-blocks/text-block.php';
    ?>
</div>

<div class="row" style="background-color: <?php echo $text_block_background_colour ?>">
    <?php
        $lead_title1 = 'tips in preparation for a visit';
        $content1 = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting
        Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting';
        $lead_title2 = 'tips in preparation for a visit';
        $content2 = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting
        Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OMG so exciting';
        include 'template-blocks/text-column-block.php';
    ?>
</div>

<!--- IMAGE MESSAGE BLOCK --->
<?php
    $image_position = 'right';
    $image = 'brush2.svg';
    $image_alt_text = 'brush';
    $title = 'Accountability through feedback';
    $content = 'Once a job is in progress, a bit of accountability goes a long way. EasyTrade’s feedback 
    system ensures that tradesmen are rewarded for good work and held accountable for any problems. 
    Our tradesmen relish the opportunity to build an outstanding reputation on this website, 
    and your feedback makes that possible.';
    $button_title = 'Find a tradesman';
    include 'template-blocks/image-message-block.php';
?>
<!--- END OF IMAGE MESSAGE BLOCK --->

<?php 
include 'footer.php';
?>