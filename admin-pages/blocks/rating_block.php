<div class="rating-block-edit">
    <h2>Rating Box <?php echo $block_ID ?></h2>
    <!-- Main Information -->
    <fieldset>
        <label for="background_color">background color</label>
        <input type="color" id="background_color" name="block_<?php echo $block_ID ?>_rating_block_background_color" value="<?php echo $rating_block_background_color ?>"/>
    </fieldset>

    <!-- Review 1 -->
    <fieldset>
        <label for="block_color">Rating Block 1 Color</label>
        <input type="color" id="block_color" name="block_<?php echo $block_ID ?>_rating_block_color1" value="<?php echo $rating_block_color1 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="rating1">Rating 1</label>
        <input type="number" id="rating1" min="1" max="5" name="block_<?php echo $block_ID ?>_rating_block_rating1" value="<?php echo $rating_block_rating1 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="review1">Review 1</label>
        <input type="text" id="review1" name="block_<?php echo $block_ID ?>_rating_block_review1" value="<?php echo $rating_block_review1 ?>"/>
    </fieldset> 

    <fieldset>
        <?php
        $selected_left = ($message_block_image_position == 'left') ? 'selected' : false;
        $selected_right = ($message_block_image_position == 'right') ? 'selected' : false; ?>
        <label for="review_type1">Review type 1</label>
        <select id="review_type1" name="block_<?php echo $block_ID ?>_rating_block_review_type1">
            <option <?php echo $customer ?> value="customer">Customer</option>
            <option <?php echo $tradesman ?> value="tradesman">Tradesman</option>
        </select>
    </fieldset> 

    <!-- Review 2 -->
    <fieldset>
        <label for="block_color">Rating Block 2 Color</label>
        <input type="color" id="block_color" name="block_<?php echo $block_ID ?>_rating_block_color2" value="<?php echo $rating_block_color2 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="rating2">Rating 2</label>
        <input type="number" id="rating2" min="1" max="5" name="block_<?php echo $block_ID ?>_rating_block_rating2" value="<?php echo $rating_block_rating2 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="review2">Review 2</label>
        <input type="text" id="review2" name="block_<?php echo $block_ID ?>_rating_block_review2" value="<?php echo $rating_block_review2 ?>"/>
    </fieldset> 

    <fieldset>
        <?php
        $selected_left = ($message_block_image_position == 'left') ? 'selected' : false;
        $selected_right = ($message_block_image_position == 'right') ? 'selected' : false; ?>
        <label for="review_type2">Review type 2</label>
        <select id="review_type2" name="block_<?php echo $block_ID ?>_rating_block_review_type2">
            <option <?php echo $customer ?> value="customer">Customer</option>
            <option <?php echo $tradesman ?> value="tradesman">Tradesman</option>
        </select>
    </fieldset> 

    <!-- Review 3 -->
    <fieldset>
        <label for="block_color">Rating Block 3 Color</label>
        <input type="color" id="block_color" name="block_<?php echo $block_ID ?>_rating_block_color3" value="<?php echo $rating_block_color3 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="rating3">Rating 3</label>
        <input type="number" id="rating3" min="1" max="5" name="block_<?php echo $block_ID ?>_rating_block_rating3" value="<?php echo $rating_block_rating3 ?>"/>
    </fieldset> 

    <fieldset>
        <label for="review3">Review 3</label>
        <input type="text" id="review3" name="block_<?php echo $block_ID ?>_rating_block_review3" value="<?php echo $rating_block_review3 ?>"/>
    </fieldset> 

    <fieldset>
        <?php
        $selected_left = ($message_block_image_position == 'left') ? 'selected' : false;
        $selected_right = ($message_block_image_position == 'right') ? 'selected' : false; ?>
        <label for="review_type3">Review type 3</label>
        <select id="review_type3" name="block_<?php echo $block_ID ?>_rating_block_review_type3">
            <option <?php echo $customer ?> value="customer">Customer</option>
            <option <?php echo $tradesman ?> value="tradesman">Tradesman</option>
        </select>
    </fieldset> 

</div>