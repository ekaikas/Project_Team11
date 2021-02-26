<?php 
<<<<<<< HEAD
    $title = "Careers-Forum";
=======
    $title = "Careers | Forum Nightclub";
>>>>>>> 8ee041712be5f4a7863e6036405df88e55e1f1e3
    $meta_desc = "Forum Nightclub Careers";
    $meta_keywords = "career, job, employment, join us, join our team, work, bartender, server, bottle service, nigh club, nightclub, hospitality";
    include "header.php";
?>    

<h1>Careers</h1>
<div class="container frm">  
    <div class="row">
        <div class="col formcss">
            <!--insert db file: insert_cv.php-->
            <form name="cv_form" action="insert_cv.php" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="cv_fname">First Name</label>
                    </div>
                    <div class="col-75">
                        <!--cv_fname-->
                        <input type="text" name="cv_fname" placeholder="Your first name..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="cv_lname">Last Name</label>
                    </div>
                    <div class="col-75">
                        <!--cv_lname-->
                        <input type="text" name="cv_lname" placeholder="Your last name..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="cv_phone">Phone</label>
                    </div>
                    <div class="col-75">
                        <!--cv_phone-->
                        <input type="text" name="cv_phone" placeholder="Your number..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="cv_email">Email</label>
                    </div>
                    <div class="col-75">
                        <!--cv_email-->
                        <input type="text" name="cv_email" placeholder="Your email..">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="cv_pos">Position</label>
                    </div>
                    <div class="col-75">
                        <!--cv_pos-->
                        <select name="cv_pos">
                            <option value="NULL">--select--</option>
                            <option value="Bartender">Bartender</option>
                            <option value="Server">Server</option>
                            <option value="Bottle Service">Bottle Service</option>
                            <option value="Security">Security</option>
                            <option value="Manager">Manager</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="cv_file">Upload CV</label>
                    </div>
                    <div class="col-75">
<<<<<<< HEAD
                        <!--cv_file-->
                        <input class="form_btn" type="file" name="cv_file" accept="application/pdf,application/word,application/txt">
=======
                        <!--cv_file-->                        
                        <input type="file" name="cv_file" accept="application/pdf,application/word,application/txt">
>>>>>>> 8ee041712be5f4a7863e6036405df88e55e1f1e3
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="cv_img">Upload Image</label>
                    </div>
                    <div class="col-75">
                        <!--cv_img-->
<<<<<<< HEAD
                        <input class="form_btn" type="file" name="cv_img" accept="image/png,image/jpg,image/bmp">
=======
                        <input type="file" name="cv_img" accept="image/png,image/jpg,image/bmp">
>>>>>>> 8ee041712be5f4a7863e6036405df88e55e1f1e3
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-25">
                        <label for="cv_msg">Message</label>
                    </div>
                    <div class="col-75">
                        <!--cv_msg-->
                        <textarea name="cv_msg" placeholder="What would make you a good addition to our team.." style="height:200px"></textarea>
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

<?php include "footer.php";
?>