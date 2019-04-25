<form method="post">
        <input type="hidden" name="form_name" value="tradesman__1__enquiry-form">

        <fieldset>
            <label for="enquiry_type">Enquiry Type:</label>
            <select id="enquiry_type" name="enquiry_type" value="<?php echo $review_type ?>">
                <option value="" disabled>Choose option</option>
                <option value="customer">Question</option>
                <option value="tradesman">Quote</option>
                <option value="other">Other</option>
            </select>
        </fieldset>

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

        <fieldset>
            <label for="quote_phoneno">Your phone number:</label>
            <input type="textarea"id="quote_phoneno" name="quote_phoneno" class="form-control mb-3" value="<?php echo $quote_phoneno ?>">
        </fieldset>

        <input type="submit" value="send">

</form>