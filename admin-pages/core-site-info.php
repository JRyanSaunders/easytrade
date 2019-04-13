<?php
$template_name = 'core-site-info';
include 'admin-header.php';
?>
<div class="admin-page">

<h1> Core site Info </h1>

<form method="post">

    <fieldset>
        <label for="website_name">Website name</label>
        <input type="text" id="website_name" name="website_name"/>
    </fieldset>

    <fieldset>
        <label for="website_logo">Website logo</label>
        <input type="text" id="website_logo" name="website_logo"/>
    </fieldset>

    </form>

    <div class="square">
    <h2>Publish</h2>
    <p>Status: draft</p>
    <p>visibility: public</p>
    <p>Published: Dec 16th, 2019</p>

    <button class="btn btn-primary">Find  a tradesman</button>
    </div>

</div>

<?php 
include 'admin-footer.php';
?>