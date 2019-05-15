<div class="text-block-edit">
    <h2>Text Box <?php echo $block_ID ?></h2>

    <!-- Main Information -->

    <fieldset>
        <label for="text_block_background_color">background color</label>
        <input type="color" id="text_block_background_color" name="block_<?php echo $block_ID ?>_text_block_background_color" value="<?php echo $text_block_background_color ?>"/>
    </fieldset>

    <!-- text block -->

    <fieldset>
        <label for="text_block_lead_title">lead title</label>
        <input type="text" id="text_block_lead_title" name="block_<?php echo $block_ID ?>_text_block_lead_title" value="<?php echo $text_block_lead_title ?>"/>
    </fieldset>

    <fieldset>
        <label for="text_block_text">text</label>
        <input type="text" id="text_block_text" name="block_<?php echo $block_ID ?>_text_block_text" value="<?php echo $text_block_text ?>"/>
    </fieldset>
</div>