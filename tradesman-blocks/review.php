<?php
// Code for 1 Review square

$opacity_1 = false;
$opacity_2 = false;
$opacity_3 = false;
$opacity_4 = false;
$opacity_5 = false;

if ($rating >= 1) {
    $opacity_1 = 'opacity: 1;';
}
if ($rating >= 2) {
    $opacity_2 = 'opacity: 1;';
}
if ($rating >= 3) {
    $opacity_3 = 'opacity: 1;';
}
if ($rating >= 4) {
    $opacity_4 = 'opacity: 1;';
}
if ($rating >= 5) {
    $opacity_5 = 'opacity: 1;';
}
?>

<div class="col-sm-3">
    <div class="rating" style="background-color: <?php echo $block_colour ?>">
        <div class="stars">
            <img class="img-responsive icon" src="/easytrade/assets/img/star.svg" alt="star" style="<?php echo $opacity_1 ?>"/>
            <img class="img-responsive icon" src="/easytrade/assets/img/star.svg" alt="star" style="<?php echo $opacity_2 ?>"/>
            <img class="img-responsive icon" src="/easytrade/assets/img/star.svg" alt="star" style="<?php echo $opacity_3 ?>"/>
            <img class="img-responsive icon" src="/easytrade/assets/img/star.svg" alt="star" style="<?php echo $opacity_4 ?>"/>
            <img class="img-responsive icon" src="/easytrade/assets/img/star.svg" alt="star" style="<?php echo $opacity_5 ?>"/>
        </div>
        <p class="large-text"><?php echo $review; ?></p>
        <h3><?php echo $review_type; ?></h3>
    </div>
</div>
