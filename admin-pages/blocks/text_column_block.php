<div class="text-column-block-edit">
    <h2>Text Column Box <?php echo $block_ID ?></h2>

    <!-- Main Information -->

    <fieldset>
        <label for="background_color">border color</label>
        <input type="color" id="background_color" name="block_<?php echo $block_ID ?>_column_background_color" value="<?php echo $column_background_color ?>"/>
    </fieldset>

    <!-- text block 1 -->

    <fieldset>
        <label for="lead_title1">Lead Title 1</label>
        <input type="text" id="lead_Title1" name="block_<?php echo $block_ID ?>_column_lead_Title1" value="<?php echo $column_lead_Title1 ?>"/>
    </fieldset>

    <fieldset>
        <label for="text1">Text 1</label>
        <input type="text" id="text1" name="block_<?php echo $block_ID ?>_column_text1" value="<?php echo $column_text1 ?>"/>
    </fieldset>

    <!-- text block 2 -->

    <fieldset>
        <label for="lead_title2">Lead Title 2</label>
        <input type="text" id="lead_Title2" name="block_<?php echo $block_ID ?>_column_lead_Title2" value="<?php echo $column_lead_Title2 ?>"/>
    </fieldset>

    <fieldset>
        <label for="text2">Text 2</label>
        <input type="text" id="text2" name="block_<?php echo $block_ID ?>_column_text2" value="<?php echo $column_text2 ?>"/>
    </fieldset>
</div>