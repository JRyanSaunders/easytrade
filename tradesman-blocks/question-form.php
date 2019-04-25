<form method="post">  

    <fieldset>
        <label for="quote_name">Your name:</label>
        <input type="text" id="quote_name" name="quote_name" class="form-control mb-3" value="<?php echo $quote_name ?>">
    </fieldset>

    <fieldset>
        <label for="quote_email">Your email address:</label>
        <input type="email" id="qoute_email" name="qoute_email" class="form-control mb-3" value="<?php echo $qoute_email ?>">
    </fieldset>

    <fieldset>
        <label for="quote_comment">Comment:</label>
        <textarea id="quote_comment" name="quote_comment" class="form-control mb-3" value="<?php echo $quote_comment ?>" data-gramm_editor="false"></textarea>
    </fieldset>

    <input type="submit" value="send">
    
</form>