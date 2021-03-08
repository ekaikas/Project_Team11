<?php 
    $title = "Careers | Forum Nightclub";
    $meta_desc = "Forum Nightclub Careers";
    $meta_keywords = "career, job, employment, join us, join our team, work, bartender, server, bottle service, nigh club, nightclub, hospitality";
    include "header.php";
?>    

<link rel="stylesheet" href="style_pages.css">


<h1>Careers</h1>
<div class="container frm">  
    <div class="row">
        <div class="col formcss">
            <!--insert db file: insert_cv.php-->
            <form id="form" class="form" name="cv_form" action="insert_cv.php" method="post">
                <div class="row">
                    <div class="col-25">
                    <label for="cv_fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <!--cv_fname-->
                        <input id="firstname" type="text" name="cv_fname" placeholder="Your first name..">
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                    <label for="cv_lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <!--cv_lname-->
                        <input id="lastname" type="text" name="cv_lname" placeholder="Your last name..">
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                    <label for="cv_phone">Phone</label>
                    </div>
                    <div class="col-75">
                        <!--cv_phone-->
                        <input id="phone" type="number" name="cv_phone" placeholder="Your number..">
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                    <label for="cv_email">Email</label>
                    </div>
                    <div class="col-75">
                        <!--cv_email-->
                        <input id="email" type="email" name="cv_email" placeholder="Your email..">
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                    <label for="cv_pos">Position</label>
                    </div>
                    <div class="col-75">
                        <!--cv_pos-->
                        <select name="cv_pos" id="cv_pos">
                            <option cv_posValue="NULL" id="cv_pos">--select--</option>
                            <option cv_posValue="Bartender">Bartender</option>
                            <option cv_posValue="Server">Server</option>
                            <option cv_posValue="Bottle Service">Bottle Service</option>
                            <option cv_posValue="Security">Security</option>
                            <option cv_posValue="Manager">Manager</option>
                        </select> 
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                    <label for="cv_file">Upload CV (.pdf)</label>
                    </div>
                    <div class="col-75">
                        <!--cv_file-->                        
                        <input id="cv_file" onchange="return cv_fileValidation()" type="file" name="cv_file" accept="application/pdf,application/word,application/txt">
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                    <label for="cv_img">Upload Image (.jpg .jpeg .png .gif)</label>
                    </div>
                    <div class="col-75">
                        <!--cv_img-->
                        <input class="form_btn" id="file"
                            onchange="return fileValidation()" type="file" name="cv_img" accept="image/png,image/jpg,image/bmp">
                            <div id="imagePreview"></div>     
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                    <label for="cv_msg">Message</label>
                    </div>
                    <div class="col-75">
                        <!--cv_msg-->
                        <textarea  id="cv_msg" name="cv_msg" placeholder="What would make you a good addition to our team.." style="height:200px"></textarea>
                        <i class="fa fa-check-circle" style="font-size:15px"></i>
                        <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                        <small>Error message</small>
                    </div>
                </div>
                <input class="form_btn" type="submit" value="Send">
            </form>
        </div>
        <div class="col">
            <img class="careerpic" src="Img/team.jpg" alt="bottle service girls holding up merchandise">
        </div>
    </div>
</div>

<!--Link to javascript form validation-->
<script src="careers_validation.js"></script>

<?php include "footer.php";
?>