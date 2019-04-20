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
        <?php
        $selected_lightblue = ($message_block_button_colour == 'lightblue') ? 'checked' : false;
        $selected_medblue = ($message_block_button_colour == 'medblue') ? 'checked' : false;
        $selected_darkblue = ($message_block_button_colour == 'darkblue') ? 'checked' : false;
        $selected_accent = ($message_block_button_colour == 'accent') ? 'checked' : false;
        $selected_white = ($message_block_button_colour == 'white') ? 'checked' : false;
        $selected_black = ($message_block_button_colour == 'black') ? 'checked' : false; ?>
        <label for="button_colour">Button Colour</label>
            <input type="radio" <?php echo $selected_lightblue ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="lightblue"> Light Blue<br>
            <input type="radio" <?php echo $selected_medblue ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="medblue"> Medium Blue<br>
            <input type="radio" <?php echo $selected_darkblue ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="darkblue"> Dark Blue<br>
            <input type="radio" <?php echo $selected_accent ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="accent"> Accent<br>
            <input type="radio" <?php echo $selected_white ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="white"> White<br>
            <input type="radio" <?php echo $selected_black ?> name="block_<?php echo $block_ID ?>_message_block_button_colour" value="black"> Black<br>
    </fieldset>

    <fieldset>
        <label for="link">Button Link</label>
        <input type="text" id="link" name="block_<?php echo $block_ID ?>_message_block_link" value="<?php echo $message_block_link ?>"/>
    </fieldset>

</div>