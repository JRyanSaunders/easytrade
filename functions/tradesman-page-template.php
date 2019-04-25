<?php
// MAIN TEMPLATE PAGE FOR ALL TRADESMAN PAGES (Duplicates)
$template_name = 'tradesman';
include '../header.php';

$page_ID = #THEVAR#;

// Get content from the database
$all_page_data = EasyTrade_Database::get_from_database("SELECT * FROM tradesman_page_meta WHERE PAGEID=" . $page_ID);
    if ($all_page_data->num_rows > 0) {
    while($row = $all_page_data->fetch_assoc()) {
        $variable_name = $row["METAKEY"];
        $$variable_name = $row["METAVALUE"];
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
                    <?php
                        $image = 'room4.svg';
                        $title = 'Example 1';
                        $info = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor pharetra orci. Duis faucibus tristique vehicula. Etiam rhoncus semper odio, mollis porta neque consequat eget.';
                        include '../tradesman-blocks/previous-work.php'; ?>
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
        <form method="post">

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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
