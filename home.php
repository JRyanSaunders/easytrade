<?php
$template_name = 'home';
include 'header.php'; 
?>



<div class="parallax"> 
    <h1> Helping you find your decorator</h1>
    <h2> Search, discover and explore - your project starts here:</h2>
    <input type="text" placeholder="Search" class="homesearch">
</div>

<div class="row full-width-block polaroid">
    <?php 
        $link = 'about.php';
        $image = 'advice1.jpg';
        $title = 'I need a tradesman or service.';
        $content = 'lorem ipsum';
        $button_text = 'More information';
        include 'template-blocks/single-polaroid.php'; 
    ?>

    <?php 
        $link = 'signup.php';
        $image = 'advice1.jpg';
        $title = 'I am a tradesman.';
        $content = 'lorem ipsum';
        $button_text = 'More information';
        include 'template-blocks/single-polaroid.php'; 
    ?>
</div>

<?php 
include 'footer.php';
?>