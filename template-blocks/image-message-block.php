<!-- DONE WITH CSS -->

<!--
    background_color
    image_position
    image
    image_alt_text
    lead_title
    content
    button_title
    link
    -->

<div class="row image-message-block">
    <?php if ($image_position == 'left') { ?>
        <div class="col-sm-6">
            <img class="img-responsive" src="/easytrade/assets/img/<?php echo $image ?>" alt="<?php echo $image_alt_text ?>">
        </div>
    <?php } ?>
    <div class="col-sm-6">
        <h2><?php echo $title ?></h2>
        <p><?php echo $content ?></p>
        <button class="btn <?php echo $button_colour ?>"><?php echo $button_title ?></button>
    </div>
    <?php if ($image_position == 'right') { ?>
        <div class="col-sm-6">
            <img class="img-responsive" src="/easytrade/assets/img/<?php echo $image ?>" alt="<?php echo $image_alt_text ?>">
        </div>
    <?php } ?>
</div>