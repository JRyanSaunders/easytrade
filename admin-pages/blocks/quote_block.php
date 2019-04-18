<div class="quote-block-edit">
    <h2>Quote Box <?php echo $block_ID ?></h2>

    <!-- Main Information -->
    <fieldset>
        <label for="quote_block_background_color">background color</label>
        <input type="color" id="quote_block_background_color" name="block_<?php echo $block_ID ?>_quote_block_background_color" value="<?php echo $quote_block_background_color ?>"/>
    </fieldset>

    <!-- Quote 1 -->
    <fieldset>
        <label for="quote1">Quote 1</label>
        <input type="text" id="quote1" name="block_<?php echo $block_ID ?>_quote1" value="<?php echo $quote1 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="author1">Author 1</label>
        <input type="text" id="author1" name="block_<?php echo $block_ID ?>_author1" value="<?php echo $author1 ?>"/>
    </fieldset> 

    <!-- Quote 2 -->
    <fieldset>
        <label for="quote2">Quote 2</label>
        <input type="text" id="quote2" name="block_<?php echo $block_ID ?>_quote2" value="<?php echo $quote2 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="author2">Author 2</label>
        <input type="text" id="author2" name="block_<?php echo $block_ID ?>_author2" value="<?php echo $author2 ?>"/>
    </fieldset> 

    <!-- Quote 3 -->
    <fieldset>
        <label for="quote3">Quote 3</label>
        <input type="text" id="quote3" name="block_<?php echo $block_ID ?>_quote3" value="<?php echo $quote3 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="author3">Author 3</label>
        <input type="text" id="author3" name="block_<?php echo $block_ID ?>_author3" value="<?php echo $author3 ?>"/>
    </fieldset> 
</div>