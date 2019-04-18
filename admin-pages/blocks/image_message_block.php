<div class="image-message-block-edit">
    <h2>Image Message Box <?php echo $block_ID ?></h2>

    <!-- Main Information -->

    <fieldset>
        <label for="image_position">Image Position</label>
        <select id="image_position" name="block_<?php echo $block_ID ?>_message_block_image_position" value="<?php echo $message_block_image_position ?>">
            <option value="left">Left</option>
            <option value="right">Right</option>
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
        <label for="button_colour">Button Colour</label>
        <input type="text" id="button_colour" name="block_<?php echo $block_ID ?>_message_block_button_colour" value="<?php echo $message_block_button_colour ?>"/>
    </fieldset>

    <fieldset>
        <label for="link">Button Link</label>
        <input type="text" id="link" name="block_<?php echo $block_ID ?>_message_block_link" value="<?php echo $message_block_link ?>"/>
    </fieldset>

</div>