<?php
$template_name = 'about';
include 'template-blocks/header.php';
$page_title = 'About';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header-overlay.php'; ?>


<div class="wbackground">
    <h3>Your next project starts here...</h3>
    <p>A platform that helps you find the right decorator.</p>
    
    <div class="row">
        <div class="col-sm-4">
        <img class="img-responsive icon" src="/easytrade/assets/img/magnifying.svg" alt="magnifying">
        <h4>Search</h4>
        <p>A range of Painter & Decorators in St. Albans and surrounding areas, a service to connect people to their next project.</p>
        </div>
        <img class="img-responsive icon" src="/easytrade/assets/img/handshake.svg" alt="handshake">
        <div class="col-sm-4">
        <h4>Discover</h4>
        <p>New connections to companies, to help you with the dream house that you deserve.</p>
        </div>
        <div class="col-sm-4">
        <img class="img-responsive icon" src="/easytrade/assets/img/world.svg" alt="world">
        <h4>Explore</h4>
        <p>The different options for you, taking into account price and styles to suit your needs.</p>
        </div>
    </div>
</div>

<div class="parallax"> </div>

<div class="bbackground">
    <div class="row">
        <div class="col-sm-6">
            <h4>Accountability through feedback</h4>
            <p>Once a job is in progress, a bit of accountability goes a long way. EasyTrade’s feedback 
                system ensures that tradesmen are rewarded for good work and held accountable for any problems. 
                Our tradesmen relish the opportunity to build an outstanding reputation on this website, 
                and your feedback makes that possible.</p>
            <button class="btn btn-primary">See our work</button>
        </div>
        <div class="col-sm-6">
            <img class="img-responsive icon" src="/easytrade/assets/img/brush1.svg" alt="world">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <img class="img-responsive icon" src="/easytrade/assets/img/brush2.svg" alt="world">
        </div>
        <div class="col-sm-6">
            <h4>Accountability through feedback</h4>
            <p>Once a job is in progress, a bit of accountability goes a long way. EasyTrade’s feedback 
                system ensures that tradesmen are rewarded for good work and held accountable for any problems. 
                Our tradesmen relish the opportunity to build an outstanding reputation on this website, 
                and your feedback makes that possible.</p>
            <button class="btn btn-primary">See our work</button>
        </div>
    </div>
</div>


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
include 'template-blocks/footer.php';
?>