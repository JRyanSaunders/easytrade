<?php
$template_name = 'contacttrade';
include 'header.php';
$page_title = 'contacttrade';
$page_header_image = 'paint6.jpg';
include 'template-blocks/page-header.php'; ?>

<ul class="breadcrumb">
  <li><a href="#profile.php">Profile</a></li>
  <li><a href="#previous.php">Previous Work</a></li>
  <li><a href="#tradereviews.php">Reviews</a></li>
  <li class="active">Contact</li> 
</ul>

<div class="form">

    <h2>Quote contact form </h2>

    <div class="form-group">
    <label for="usr">Name:</label>
    <input type="text" class="form-control" id="usr">
    </div>

    <div class="form-group">
    <label for="usr">Contact email:</label>
    <input type="text" class="form-control" id="usr">
    </div>

    <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>

    <div class="form-group">
    <label for="usr">Contact phone number:</label>
    <input type="text" class="form-control" id="usr">
    </div>

    <button class="btn btn-primary">Send</button>

    <h2>Quote contact form </h2>

    <div class="form-group">
    <label for="usr">Contact email:</label>
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