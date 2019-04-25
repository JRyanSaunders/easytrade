<?php
// MAIN TEMPLATE PAGE FOR ALL TRADESMAN PAGES (Duplicates)
$template_name = 'tradesman';
include '../header.php';

$page_ID = 12;

// Get content from the database
$all_page_data = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page_meta WHERE PAGEID=" . $page_ID);
    if ($all_page_data->num_rows > 0) {
    while($row = $all_page_data->fetch_assoc()) {
        $variable_name = $row["METAKEY"];
        $$variable_name = $row["METAVALUE"];
    }
}

if (isset($_POST)) {

    if ($_POST['form_name'] == 'enquiry') {

        $errors = 'no';
        $enquiry_type = $_POST['enquiry_type'];
        $quote_name = $_POST['quote_name'];
        $quote_email = $_POST['quote_email'];
        $quote_comment = $_POST['quote_comment'];
        $quote_phoneno = $_POST['quote_phoneno'];

        if (empty($quote_name)) {
            $errors = 'yes';
            echo "please enter your name";
        }
        if (empty($quote_email)) {
            $errors = 'yes';
            echo "please enter your email";
        }
        if (empty($quote_comment)) {
            $errors = 'yes';
            echo "please enter your comment";
        }
        if (empty($quote_phoneno)) {
            $errors = 'yes';
            echo "please enter your phone number";
        }
        if ($errors == 'no') {
            // add new entry to database
            $form_name = $_POST['form_name'] . '__' . $page_ID;
            $form_data = "'" . date('d-m-Y') . "','" . $form_name . "'";
            $entry_ID = EasyTrade_Database::insert_into_table('entry', 'ENTRY_DATE, FORM_NAME', $form_data);

            // add information to entrymeta
            $form_data = "'" . $entry_ID . "','enquiry_type','" . $enquiry_type . "'";
            EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

            $form_data = "'" . $entry_ID . "','quote_name','" . $quote_name . "'";
            EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

            $form_data = "'" . $entry_ID . "','quote_email','" . $quote_email . "'";
            EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

            $form_data = "'" . $entry_ID . "','quote_comment','" . $quote_comment . "'";
            EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

            $form_data = "'" . $entry_ID . "','quote_phoneno','" . $quote_phoneno . "'";
            EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

        }
    }
    else if ($_POST['form_name'] == 'review') {

        $errors = 'no';
        $rating = $_POST['rating'];
        $review = $_POST['review'];
        $review_name = $_POST['review_name'];

        if (empty($rating)) {
            $errors = 'yes';
            echo "please enter a rating";
        }
        if (empty($review)) {
            $errors = 'yes';
            echo "please enter your review";
        }
        if (empty($review_name)) {
            $errors = 'yes';
            echo "please enter your name";
        }

        if ($errors == 'no') {
            // add new entry to database
            $form_name = $_POST['form_name'] . '__' . $page_ID;
            $form_data = "'" . date('d-m-Y') . "','" . $form_name . "'";
            $entry_ID = EasyTrade_Database::insert_into_table('entry', 'ENTRY_DATE, FORM_NAME', $form_data);

            // add information to entrymeta
            $form_data = "'" . $entry_ID . "','rating','" . $rating . "'";
            EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

            $form_data = "'" . $entry_ID . "','review','" . $review . "'";
            EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

            $form_data = "'" . $entry_ID . "','review_name','" . $review_name . "'";
            EasyTrade_Database::insert_into_table('entry_meta', 'ENTRYID, METAKEY, METAVALUE', $form_data);

        }
    }
}

// START OF PAGE CONTENT
?>
<div class="slimline-container">

    <?php include '../tradesman-blocks/page-header.php'; ?>

    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#profile">Home</a></li>
        <li><a data-toggle="tab" href="#previous">Previous Work</a></li>
        <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
        <li><a data-toggle="tab" href="#contact">Contact</a></li>
    </ul>

    <div class="tab-content">

        <!-- TAB 1 - PROFILE -->
        <div id="profile" class="tab-pane fade in active">
        
            <div class="row" style="margin-right: -15px;">
                <div class="col-sm-8 box-about">
                    <h3>ABOUT <?php echo $company_name ?></h3>
                    <p><?php echo $company_about ?></p>
                </div>

                <div class="col-sm-4">
                    <div class=" box-image">
                        <a data-toggle="tab" href="#reviews"><img src="/easytrade/assets/img/<?php echo $profile_example_image?>" class="img-responsive" alt="Room example"/></a>
                    </div>

                    <div class="box-media">
                        <h4> ALSO FIND US AT: </h4>
                        <a href="<?php echo $social_media_facebook ?>" class="fa fa-facebook"></a>
                        <a href="<?php echo $social_media_twitter ?>" class="fa fa-twitter"></a>
                        <a href="<?php echo $social_media_google ?>" class="fa fa-google"></a>
                        <a href="<?php echo $social_media_linkedin ?>" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 box-team">
                    <h3>The Team</h3>

                    <?php 
                    $get_team_members = EasyTrade_Database::get_from_database("SELECT * FROM `tradesman_page_meta` WHERE `PAGEID`=$page_ID AND `METAKEY`='team_member'");
                    if ($get_team_members->num_rows>0) {
                        while($row = $get_team_members->fetch_assoc()) {
                            $team_member = $row["METAVALUE"];
                            $split_team_member_details = explode('__', $team_member);
                            
                            $name = $split_team_member_details[0];
                            $image = $split_team_member_details[1];

                            include '../tradesman-blocks/team-member.php';
                        }
                    } ?>
                </div>
            </div>

            <div class="row">
                <a data-toggle="tab" href="#contact">
                    <div class="col-sm-12 call-to-action-img" style="background-image: url('/easytrade/assets/img/<?php echo $calltoaction_image ?>');">
                        <div class="overlay"></div>
                        <h3><?php echo $calltoaction_title ?></h3>
                    </div>
                </a>
            </div>
        </div>



        <!--// TAB 2 - PREVIOUS WORK -->
        <!-- // foreach 'previous work-block' metavalue 1/2/3/4/5, store as array, foreach loop, get data, get template -->
        <div id="previous" class="tab-pane fade">

            <div class="row">
                <div class="col-sm-12">

                <?php $get_previous_work = EasyTrade_Database::get_from_database("SELECT * FROM `tradesman_page_meta` WHERE `PAGEID`=$page_ID AND `METAKEY`='previous_work'");
                if ($get_previous_work->num_rows>0) {
                    while($row = $get_previous_work->fetch_assoc()) {
                        $previous_work = $row["METAVALUE"];
                        $split_previous_work_details = explode('__', $previous_work);

                        $block_border_color = $split_previous_work_details[0];
                        $image = $split_previous_work_details[1];
                        $title = $split_previous_work_details[2];
                        $info = $split_previous_work_details[3];

                        include '../tradesman-blocks/previous-work.php';

                    }
                } ?>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-6" style="margin-bottom: 50px;">
                    <a href="#contact"><button class="btn et-btn-med">ASK A QUESTION</button></a>
                </div>

                <div class="col-sm-6" style="margin-bottom: 50px;">
                    <a href="#contact"><button class="btn et-btn-med"> INVITE TO QUOTE</button></a>
                </div>
            </div>



        </div>



        <!-- // TAB 3 - REVIEWS -->
        <div id="reviews" class="tab-pane fade">
        
            <div class="row">
                <?php
                // foreach 'review-block' metavalue 1/2/3/4/5, store as array, foreach loop, get data, get template
                $rating = 4;
                $review = 'happy quote';
                $review_type = 'customer';
                $block_colour = '#B03D55';
                include '../tradesman-blocks/review.php'; ?>
            </div>
            
            <!--- BUTTON  --->
            <div class="center" style="margin-bottom: 50px;">
                <button type="button" class="btn btn et-btn-med" data-toggle="modal" data-target="#myModal">WRITE A REVIEW</button>
            </div>

        </div>

        <!-- // TAB 4 - CONTACT -->
        <div id="contact" class="tab-pane fade">

            <h2> QUOTE CONTACT FORM </h2>
            <?php include '../tradesman-blocks/quote-form.php'; ?>

        </div>

    </div>

<?php
include '../footer.php'; ?>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">WRITE A REVIEW</h4>
      </div>
      <div class="modal-body">
        <?php include '../tradesman-blocks/leave-review.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
