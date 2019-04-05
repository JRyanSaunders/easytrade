<?php
$template_name = 'signup';
include 'admin-header.php';



include 'icon_block.php';


?>








<form method="home">

    <fieldset>
        <label for="parallax">Parallax</label>
        <input type="text" id="parallax" name="parallax"/>
    </fieldset> 

    <fieldset>
        <label for="page_title">Page Title</label>
        <input type="text" id="page_title" name="page_title"/>
    </fieldset>

    <fieldset>
        <label for="page_subtitle">Page Subtitle</label>
        <input type="text" id="page_subtitle" name="page_subtitle"/>
    </fieldset>

    <div>
        <h2>Feature Box 1</h2>
        <fieldset>
            <label for="polaroid_1_title">Title</label>
            <input type="text" id="polaroid_1_title" name="polaroid_1_title"/>
        </fieldset>

        <fieldset>
            <label for="polaroid_1_content">Content</label>
            <input type="text" id="polaroid_1_content" name="polaroid_1_content"/>
        </fieldset>

        <fieldset>
            <label for="polaroid_1_button_text">Button Text</label>
            <input type="text" id="polaroid_1_button_text" name="polaroid_1_button_text"/>
        </fieldset>

        <fieldset>
            <label for="polaroid_1_button_link">Link</label>
            <input type="text" id="polaroid_1_button_link" name="polaroid_1_button_link"/>
        </fieldset>
    </div>

    <div>
        <h2>Feature Box 2</h2>
        <fieldset>
            <label for="polaroid_2_title">Title</label>
            <input type="text" id="polaroid_2_title" name="polaroid_2_title"/>
        </fieldset>

        <fieldset>
            <label for="polaroid_2_content">Content</label>
            <input type="text" id="polaroid_2_content" name="§  "/>
        </fieldset>

        <fieldset>
            <label for="polaroid_2_button_text">Button Text</label>
            <input type="text" id="polaroid_2_button_text" name="polaroid_2_button_text"/>
        </fieldset>

        <fieldset>
            <label for="polaroid_2_button_link">Link</label>
            <input type="text" id="polaroid_2_button_link" name="polaroid_2_button_link"/>
        </fieldset>
    </div>

    <input type="submit" value="submit"/>

</form>









<?php 
include 'admin-footer.php';
?>