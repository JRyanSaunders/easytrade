<form method="post">
    <input type="hidden" name="form_name" value="review">

    <fieldset>
        <label for="button_colour">Review Background Colour</label>
        <div class="radio-button-list">
            <input type="radio" name="block_colour" value="#6893A3"> Light Blue Background<br>
            <input type="radio" name="block_colour" value="#135067"> Medium Blue Background<br>
            <input type="radio" name="block_colour" value="#2F4C57"> Dark Blue Background<br>
            <input type="radio" name="block_colour" value="#B03D55"> Red Background<br>
        </div>
    </fieldset>


    <fieldset>
            <label for="rating">Rating</label>
            <input type="number" id="rating" min="1" max="5" name="rating"/>
    </fieldset>

    <fieldset>
        <label for="review">Review:</label>
        <textarea id="review" name="review"></textarea>
    </fieldset>

    <fieldset>
            <label for="review_name">Your Name:</label>
            <input type="text" id="review_name" name="review_name"/>
    </fieldset>

    <input type="submit" value="send">

</form>