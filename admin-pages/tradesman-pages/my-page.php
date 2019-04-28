<?php
$template_name = 'admin';
include '../admin-header.php';

$get_page_ID = EasyTrade_Database::get_from_database("SELECT `ID` FROM `tradesman_page` WHERE `USERID` = $user_ID");
if ($get_page_ID->num_rows>0) {
    while($row = $get_page_ID->fetch_assoc()) {
        $page_ID = $row['ID'];
    }
}

// get current data and fill fields
$get_page_meta = EasyTrade_Database::get_from_database("SELECT * FROM `tradesman_page_meta` WHERE `PAGEID` = $page_ID");
if ($get_page_meta->num_rows>0) {
    while($row = $get_page_meta->fetch_assoc()) {
        $variable_name = $row["METAKEY"];
        $$variable_name = $row["METAVALUE"];
    }
}

if (isset($_POST)) {

    $table_to_update = "tradesman_page_meta";
    $page_finder = '(PAGEID=' . $page_ID . ' AND METAKEY=';

    if ($_POST['form_name'] == 'my-profile') {

        $profile_example_image = $_POST['profile_example_image'];
        if (!empty($profile_example_image)) {
            $column_to_update = 'METAVALUE="' . $profile_example_image . '"';
            $row_to_update = $page_finder . '"profile_example_image")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }

        $calltoaction_title = $_POST['calltoaction_title'];
        if (!empty($calltoaction_title)) {
            $column_to_update = 'METAVALUE="' . $calltoaction_title . '"';
            $row_to_update = $page_finder . '"calltoaction_title")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }

        $calltoaction_image = $_POST['calltoaction_image'];
        if (!empty($calltoaction_image)) {
            $column_to_update = 'METAVALUE="' . $calltoaction_image . '"';
            $row_to_update = $page_finder . '"calltoaction_image")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }

        $company_about = $_POST['company_about'];
        if (!empty($company_about)) {
            $column_to_update = 'METAVALUE="' . $company_about . '"';
            $row_to_update = $page_finder . '"company_about")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }
    
        $social_media_facebook = $_POST['social_media_facebook'];
        if (!empty($social_media_facebook)) {
            $column_to_update = 'METAVALUE="' . $social_media_facebook . '"';
            $row_to_update = $page_finder . '"social_media_facebook")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }

        $social_media_twitter = $_POST['social_media_twitter'];
        if (!empty($social_media_twitter)) {
            $column_to_update = 'METAVALUE="' . $social_media_twitter . '"';
            $row_to_update = $page_finder . '"social_media_twitter")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }
    
        $social_media_google = $_POST['social_media_google'];
        if (!empty($social_media_google)) {
            $column_to_update = 'METAVALUE="' . $social_media_google . '"';
            $row_to_update = $page_finder . '"social_media_google")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }

        $social_media_linkedin = $_POST['social_media_linkedin'];
        if (!empty($social_media_linkedin)) {
            $column_to_update = 'METAVALUE="' . $social_media_linkedin . '"';
            $row_to_update = $page_finder . '"social_media_linkedin")';
            EasyTrade_Database::update_database_record($table_to_update, $column_to_update, $row_to_update);
        }

    }
    else if ($_POST['form_name'] == 'team-member') {

        $team_member_name = $_POST['team_member_name'];
        $team_member_image = $_POST['team_member_image'];

        if ((!empty($team_member_name)) && (!empty($team_member_image))) {

            $value = $team_member_name . '__' . $team_member_image;
            $data = "'" . $page_ID . "','team_member', '" . $value . "'";
            EasyTrade_Database::insert_into_table('tradesman_page_meta', 'PAGEID, METAKEY, METAVALUE', $data);
        }

    }
    else if ($_POST['form_name'] == 'remove-team-member') {
        
        $team_member_ID = $_POST['team_member_ID'];
        $identifier = "ID=" . $team_member_ID;
        EasyTrade_Database::delete_database_record('tradesman_page_meta', $identifier);

    }
    else if ($_POST['form_name'] == 'previous-work') {

        $block_border_color_1 = $_POST['block_border_color_1'];
        $example_image_1 = $_POST['example_image_1'];
        $example_title_1 = $_POST['example_title_1'];
        $example_desc_1 = $_POST['example_desc_1'];

        if ((!empty($block_border_color_1)) && (!empty($example_image_1)) && (!empty($example_title_1)) && (!empty($example_desc_1))) {

            $value = $block_border_color_1 . '__' . $example_image_1 . '__' . $example_title_1 . '__' . $example_desc_1;
            $data = "'" . $page_ID . "','previous_work', '" . $value . "'";
            EasyTrade_Database::insert_into_table('tradesman_page_meta', 'PAGEID, METAKEY, METAVALUE', $data);
        }

    }
    else if ($_POST['form_name'] == 'remove-previous-work') {
        
        $previous_work_ID = $_POST['previous_work_ID'];
        $identifier = "ID=" . $previous_work_ID;
        EasyTrade_Database::delete_database_record('tradesman_page_meta', $identifier);

    }
}

?>

<div class="admin-page">

    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
        <li><a data-toggle="tab" href="#team">Team</a></li>
        <li><a data-toggle="tab" href="#previous">Previous Work</a></li>
    </ul>

    <div class="tab-content">

        <!-- TAB 1 - PROFILE -->
        <div id="profile" class="tab-pane fade in active">
            <!-- about company, call to action, image for the front etc -->
            <form method="post">
                <div>
                    <input type="hidden" name="form_name" value="my-profile">
                    <h2> Your Profile </h2>

                    <fieldset>
                        <?php $profile_example_image = (isset($profile_example_image) == 1) ? $profile_example_image : ''; ?>
                        <label for="profile_example_image">Profile Example Image:</label>
                        <input type="text" id="profile_example_image" name="profile_example_image" value="<?php echo $profile_example_image ?>"/>
                    </fieldset>

                    <fieldset>
                        <?php $calltoaction_title = (isset($calltoaction_title) == 1) ? $calltoaction_title : ''; ?>
                        <label for="calltoaction_title">Call-To-Action Title:</label>
                        <input type="text" id="calltoaction_title" name="calltoaction_title" value="<?php echo $calltoaction_title ?>"/>
                    </fieldset>

                    <fieldset>
                        <?php $calltoaction_image = (isset($calltoaction_image) == 1) ? $calltoaction_image : ''; ?>
                        <label for="calltoaction_image">Call-To-Action Image:</label>
                        <input type="text" id="calltoaction_image" name="calltoaction_image" value="<?php echo $calltoaction_image ?>"/>
                    </fieldset>

                    <fieldset>
                        <?php $company_about = (isset($company_about) == 1) ? $company_about : ''; ?>
                        <label for="company_about">About The Company:</label>
                        <textarea id="company_about" name="company_about"><?php echo $company_about ?></textarea>
                    </fieldset>

                    <fieldset>
                        <?php $social_media_facebook = (isset($social_media_facebook) == 1) ? $social_media_facebook : ''; ?>
                        <label for="social_media_facebook">Facebook Link:</label>
                        <input type="text" id="social_media_facebook" name="social_media_facebook" value="<?php echo $social_media_facebook ?>"/>
                    </fieldset>

                    <fieldset>
                        <?php $social_media_twitter = (isset($social_media_twitter) == 1) ? $social_media_twitter : ''; ?>
                        <label for="social_media_twitter">Twitter Link:</label>
                        <input type="text" id="social_media_twitter" name="social_media_twitter" value="<?php echo $social_media_twitter ?>"/>
                    </fieldset>

                    <fieldset>
                        <?php $social_media_google = (isset($social_media_google) == 1) ? $social_media_google : ''; ?>
                        <label for="social_media_google">Google Link:</label>
                        <input type="text" id="social_media_google" name="social_media_google" value="<?php echo $social_media_google ?>"/>
                    </fieldset>

                    <fieldset>
                        <?php $social_media_linkedin = (isset($social_media_linkedin) == 1) ? $social_media_linkedin : ''; ?>
                        <label for="social_media_linkedin">LinkedIn Link:</label>
                        <input type="text" id="social_media_linkedin" name="social_media_linkedin" value="<?php echo $social_media_linkedin ?>"/>
                    </fieldset>

                    <input type="submit" value="save">
                </div>
            </form>
        </div>

        <div id="team" class="tab-pane fade">
            <!-- add A team member: image name etc -->

            <?php
            $get_team_members = EasyTrade_Database::get_from_database("SELECT * FROM `tradesman_page_meta` WHERE `PAGEID`=$page_ID AND `METAKEY`='team_member'");
            if ($get_team_members->num_rows>0) {
                while($row = $get_team_members->fetch_assoc()) {
                    $team_member_ID = $row["ID"];
                    $team_member = $row["METAVALUE"];
                    $split_team_member_details = explode('__', $team_member);
                    
                    $name = $split_team_member_details[0];
                    $image = $split_team_member_details[1];
                    
                    echo "<form method='post'>";
                    echo "<input type='hidden' name='form_name' value='remove-team-member'>";
                    echo "<input type='hidden' name='team_member_ID' value='$team_member_ID'>";
                        echo "<div class='team-member'>";
                            echo "Name: " . $name . "<br>";
                            echo "Image: " . $image . "<br>";
                            echo "<button type='submit'>Delete Team Member</button>";
                        echo "</div>";
                    echo "</form>";

                }
            } ?>
            <form method="post">
                <div>
                    <input type="hidden" name="form_name" value="team-member">

                    <h2> Your Team </h2>

                    
                    <fieldset>
                        <?php $team_member_name = (isset($team_member_name) == 1) ? $team_member_name : ''; ?>
                        <label for="team_member_name">Team Member Name:</label>
                        <input type="text" id="team_member_name" name="team_member_name" value="<?php echo $team_member_name ?>"/>
                    </fieldset>

                    <fieldset>
                        <?php $team_member_image = (isset($team_member_image) == 1) ? $team_member_image : ''; ?>
                        <label for="team_member_image">Team Member Image:</label>
                        <input type="text" id="team_member_image" name="team_member_image" value="<?php echo $team_member_image ?>"/>
                    </fieldset>

                    <input type="submit" value="save">
                </div>
            </form>
        </div>

        <!-- TAB 2 -->
        <div id="previous" class="tab-pane fade">
            <!-- add A previous work: image title description etc -->

            <?php
            $get_previous_work = EasyTrade_Database::get_from_database("SELECT * FROM `tradesman_page_meta` WHERE `PAGEID`=$page_ID AND `METAKEY`='previous_work'");
            if ($get_previous_work->num_rows>0) {
                while($row = $get_previous_work->fetch_assoc()) {
                    $previous_work_ID = $row["ID"];
                    $previous_work = $row["METAVALUE"];
                    $split_previous_work_details = explode('__', $previous_work);

                    $block_border_color = $split_previous_work_details[0];
                    $image = $split_previous_work_details[1];
                    $title = $split_previous_work_details[2];
                    $desc = $split_previous_work_details[3];

            
                    echo "<form method='post'>";
                    echo "<input type='hidden' name='form_name' value='remove-previous-work'>";
                    echo "<input type='hidden' name='previous_work_ID' value='$previous_work_ID'>";
                        echo "<div class='previous-work'>";
                            echo "Block Border Colour: " . $block_border_color . "<br>";
                            echo "Image: " . $image . "<br>";
                            echo "Title: " . $title . "<br>";
                            echo "Description: " . $desc . "<br>";
                            echo "<button type='submit'>Delete  Previous Work</button>";
                        echo "</div>";
                    echo "</form>";

                }
            } ?>

        <form method="post">
            <div>
                <input type="hidden" name="form_name" value="previous-work">
                <h2> Your Previous Work </h2>

                <fieldset>
                    <?php $block_border_color_1 = (isset($block_border_color_1) == 1) ? $block_border_color_1 : ''; ?>
                    <label for="block_border_color_1">Block Border Colour 1:</label>
                    <input type="color" id="block_border_color_1" name="block_border_color_1" value="<?php echo $block_border_color_1 ?>"/>
                </fieldset>

                <fieldset>
                    <?php $example_image_1 = (isset($example_image_1) == 1) ? $example_image_1 : ''; ?>
                    <label for="example_image_1">Example Image 1:</label>
                    <input type="text" id="example_image_1" name="example_image_1" value="<?php echo $example_image_1 ?>"/>
                </fieldset>

                <fieldset>
                    <?php $example_title_1 = (isset($example_title_1) == 1) ? $example_title_1 : ''; ?>
                    <label for="example_title_1">Example Title 1:</label>
                    <input type="text" id="example_title_1" name="example_title_1" value="<?php echo $example_title_1 ?>"/>
                </fieldset>

                <fieldset>
                    <?php $example_desc_1 = (isset($example_desc_1) == 1) ? $example_desc_1 : ''; ?>
                    <label for="example_desc_1">Example Description 1:</label>
                    <textarea id="example_desc_1" name="example_desc_1" value="<?php echo $example_desc_1 ?>"></textarea>
                </fieldset>

                <input type="submit" value="save">
            </div>
        </form>
        </div>
    </div>
</div>


<?php 
include '../admin-footer.php';
?>