<?php
$template_name = 'home';
include 'template-blocks/header.php'; ?>


<div class="parallax"> 
    <h1> Helping you find your decorator</h1>
    <h2> Search, discover and explore - your project starts here:</h2>
    <input type="text" placeholder="Search" class="homesearch">
</div>

<div class="row full-width-block polaroid">
    <a href="visit.php">
        <div class="col-sm-6 polaroid-box">
            <img src="/easytrade/assets/img/advice1.jpg" class="img-responsive" alt=""/>
            <div class="content">
                <h3>I need a tradesman or service.</h3>
                <p>lorem ipsum </p>
                <button class="btn btn-primary">More information</button>
            </div>
        </div>
    </a>
    <a href="visit.php">
        <div class="col-sm-6 polaroid-box">
            <img src="/easytrade/assets/img/advice1.jpg" class="img-responsive" alt=""/>
            <div class="content">
                <h3>I am a tradesman.</h3>
                <p>lorem ipsum </p>
                <button class="btn btn-primary">More information</button>
            </div>
        </div>
    </a>
</div>

<?php 
include 'template-blocks/footer.php';
?>