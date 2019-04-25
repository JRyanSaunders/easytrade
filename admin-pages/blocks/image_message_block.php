<div class="image-message-block-edit">
    <h2>Image Message Box <?php echo $block_ID ?></h2>

    <!-- Main Information -->

    <fieldset>
        <?php
        $selected_left = ($message_block_image_position == 'left') ? 'selected' : false;
        $selected_right = ($message_block_image_position == 'right') ? 'selected' : false; ?>
        <label for="image_position">Image Position</label>
        <select id="image_position" name="block_<?php echo $block_ID ?>_message_block_image_position">
            <option <?php echo $selected_left ?> value="left">Left</option>
            <option <?php echo $selected_right ?> value="right">Right</option>
        </select>
    </fieldset>

    <fieldset>
        <label for="image">Image</label>
        <input type="text" id="image" name="block_<?php echo $block_ID ?>_message_block_image" value="<?php echo $message_block_image ?>"/>
    </fieldset>

    <fieldset>
        <label for="image_alt_text">Image alt text</label>
        <input type="text" id="image_alt_text" name="block_<?php echo $block_ID ?>_message_block_alt_text" value="<?php echo $message_block_alt_text ?>"/>
    </fieldset>

    <!-- Message Information -->

    <fieldset>
        <label for="lead_title">Lead Title</label>
        <input type="text" id="lead_title" name="block_<?php echo $block_ID ?>_message_block_lead_title" value="<?php echo $message_block_lead_title ?>"/>
    </fieldset>

    <fieldset>
        <label for="content">Text</label>
        <input type="text" id="content" name="block_<?php echo $block_ID ?>_message_block_content" value="<?php echo $message_block_content ?>"/>
    </fieldset>

    <fieldset>
        <label for="button_label">Button Text</label>
        <input type="text" id="button_label" name="block_<?php echo $block_ID ?>_message_block_button_label" value="<?php echo $message_block_button_label ?>"/>
    </fieldset>

    <fieldset>
        <?php
        $selected_lightbluebk = ($message_block_button_colour == 'et-btn-lightbk') ? 'checked' : false;
        $selected_medbluebk = ($message_block_button_colour == 'et-btn-medbk') ? 'checked' : false;
        $selected_darkbluebk = ($message_block_button_colour == 'et-btn-darkbk') ? 'checked' : false;
        $selected_whitebk = ($message_block_button_colour == 'et-btn-whitebk') ? 'checked' : false;
        $selected_lightbluetxt = ($message_block_button_colour == 'et-btn-light') ? 'checked' : false;
        $selected_medbluetxt = ($message_block_button_colour == 'et-btn-med') ? 'checked' : false;
        $selected_darkbluetxt = ($message_block_button_colour == 'et-btn-dark') ? 'checked' : false;
        $selected_whitetxt = ($message_block_button_colour == 'et-btn-white') ? 'checked' : false; ?>
        <label for="button_colour">Button Colour</label>
        <div class="radio-button-list">
            <input type="radio" <?php echo $selected_lightbluebk ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="et-btn-lightbk"> Light Blue Background<br>
            <input type="radio" <?php echo $selected_medbluebk ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="et-btn-medbk"> Medium Blue Background<br>
            <input type="radio" <?php echo $selected_darkbluebk ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="et-btn-darkbk"> Dark Blue Background<br>
            <input type="radio" <?php echo $selected_whitebk ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="et-btn-whitebk"> White Background<br>
            <input type="radio" <?php echo $selected_lightbluetxt ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="et-btn-light"> White Background, Light Blue Text<br>
            <input type="radio" <?php echo $selected_medbluetxt ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="et-btn-med"> White Background, Medium Blue Text<br>
            <input type="radio" <?php echo $selected_darkbluetxt ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="et-btn-dark"> White Background, Dark Blue Text<br>
            <input type="radio" <?php echo $selected_whitetxt ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="et-btn-white">No Background, White Text<br>
        </div>
    </fieldset>

    <fieldset>
        <label for="link">Button Link</label>
        <input type="text" id="link" name="block_<?php echo $block_ID ?>_message_block_link" value="<?php echo $message_block_link ?>"/>
    </fieldset>

</div>