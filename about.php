<?php
$template_name = 'about';
include 'header.php';
$page_title = 'About';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header-overlay.php'; ?>

<div class="textsection">
<h3>about the website</h3>
<h1>How it works</h1>
<p>It's difficult finding a tradesman you can trust.
This website helps you find the right tradesman for you</p>
<button class="btn btn-primary">Find  a tradesman</button>
</div>

<?php
    $image_position = 'left';
    $image = 'brush1.svg';
    $image_alt_text = 'brush';
    $title = 'Accountability through feedback';
    $content = 'Once a job is in progress, a bit of accountability goes a long way. EasyTrade’s feedback 
    system ensures that tradesmen are rewarded for good work and held accountable for any problems. 
    Our tradesmen relish the opportunity to build an outstanding reputation on this website, 
    and your feedback makes that possible.';
    $button_title = 'See our work';
    include 'template-blocks/image-message-block.php';
?>

<div class="row icon-block">
    <h2>Your next project starts here...</h2>
    <p class="large-text">A platform that helps you find the right decorator.</p>

    <div class="row">
        <?php
            $icon = 'world.svg';
            $icon_alt_text = 'world';
            $title = 'Discover';
            $content = 'New connections to companies, to help you with the dream house that you deserve.';
            include 'template-blocks/single-icon.php';

            $icon = 'world.svg';
            $icon_alt_text = 'world';
            $title = 'Discover';
            $content = 'New connections to companies, to help you with the dream house that you deserve.';
            include 'template-blocks/single-icon.php';

            $icon = 'world.svg';
            $icon_alt_text = 'world';
            $title = 'Discover';
            $content = 'New connections to companies, to help you with the dream house that you deserve.';
            include 'template-blocks/single-icon.php';
        ?>
    </div>
</div>

<div class="parallax"> </div>

<?php

    $image_position = 'right';
    $image = 'brush2.svg';
    $image_alt_text = 'brush';
    $title = 'Accountability through feedback';
    $content = 'Once a job is in progress, a bit of accountability goes a long way. EasyTrade’s feedback 
    system ensures that tradesmen are rewarded for good work and held accountable for any problems. 
    Our tradesmen relish the opportunity to build an outstanding reputation on this website, 
    and your feedback makes that possible.';
    $button_title = 'Click me';
    include 'template-blocks/image-message-block.php';
?>


<div class="wbackground">
    <h4>What others are saying about the website</h4>
    <div class="row">    
        <div class="col-sm-4">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor pharetra orci. Duis faucibus tristique vehicula.“</p>
        </div>
        <div class="col-sm-4">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor pharetra orci. Duis faucibus tristique vehicula.“</p>
        </div>
        <div class="col-sm-4">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor pharetra orci. Duis faucibus tristique vehicula.“</p>
        </div>
    </div>

    <div class="row">    
        <div class="col-sm-4">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor pharetra orci. Duis faucibus tristique vehicula.“</p>
        </div>
        <div class="col-sm-4">
            <button class="btn btn-primary">See our work</button>
        </div>
        <div class="col-sm-4">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor pharetra orci. Duis faucibus tristique vehicula.“</p>
        </div>
    </div>
</div>

<?php 
include 'footer.php';
?>