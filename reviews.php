<?php
$template_name = 'reviews';
include 'header.php';
$page_title = 'reviews';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php'; ?>

<!--- RATING BLOCK --->
<div class="row rating-block" style="background-color: <?php echo $rating_block_background_colour ?>">
    <div class="row">
        <?php
            $rating = 1;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 3;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 4;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 4;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';
        ?>
    </div>
    <div class="row">
        <?php
            $rating = 1;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 3;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 4;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 4;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';
        ?>
    </div>
    <div class="row">
        <?php
            $rating = 1;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 3;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 4;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';

            $rating = 4;
            $review = 'Interesting test about this icons and how it really changed your life OMG so exciting Interesting test about this icons and how it really changed your life OM';
            $review_type = 'Redecoration';
            $block_colour = '#6893A3';
            include 'template-blocks/single-rating.php';
        ?>
    </div>
</div>
<!--- END OF RATING BLOCK --->




<?php 
include 'footer.php';
?>