<?php
$template_name = 'contact';
include 'header.php';
$page_title = 'contact';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php'; ?>

<div class="form">
    
    <div class="form-group">
    <label for="sel1">Tell us who you are:</label>
    <select class="form-control" id="sel1">
        <option>Customer</option>
        <option>Tradesman</option>
        <option>Other</option>
    </select>
    </div>

    <div class="form-group">
    <label for="usr">Name:</label>
    <input type="text" class="form-control" id="usr">
    </div>

    <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>

    <button class="btn btn-primary">Send</button>

</div>


<?php 
include 'footer.php';
?>