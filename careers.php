<?php 
    $title = "Careers | Forum Nightclub";
    $meta_desc = "Forum Nightclub Careers";
    $meta_keywords = "career, job, employment, join us, join our team, work, bartender, server, bottle service, nigh club, nightclub, hospitality";
    include "header.php";
?>  

<link rel="stylesheet" href="style_pages.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<h1>Careers</h1>
<div class="container frm">  
    <div class="row">
        <div class="col formcss">
            <!--insert db file: insert_cv.php-->

            <!--Start of the careers form-->
            <form id="form" class="form" name="cv_form" method="post">     
            <div class="row">
                <label for="username">First Name</label>
                <input type="text" placeholder="Type your first name" id="firstname"/>
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="username">Last Name</label>
                <input type="text" placeholder="Type your last name" id="lastname" />
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="username">Phone</label>
                <input type="number" placeholder="Type your phone" id="phone" />
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="username">Email</label>
                <input type="email" placeholder="Type your email" id="email" />
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>

            <div class="row">
                <label for="username">Position</label>
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
            <div class="row">
                <label for="cv_file">Upload CV (.pdf)</label>
                <input type="file" name="File" id="cv_file" onchange="return cv_fileValidation()"/> 
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="cv_img">Upload Image (.jpg .jpeg .png .gif)</label>
                <input class="form_btn" type="file" id="file"
                onchange="return fileValidation()" name="cv_img" accept="image/png,image/jpg,image/bmp">
                <div id="imagePreview"></div> 
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
            <div class="row">
                <label for="cv_msg">Type your cover letter</label>
                <textarea name="cv_msg" placeholder="What would make you a good addition to our team.." style="height:200px" id="cv_msg"></textarea>
                <i class="fa fa-check-circle" style="font-size:15px"></i>
                <i class="fa fa-exclamation-circle" style="font-size:15px"></i>
                <small>Error message</small>
            </div>
                
                <input class="form_btn" type="submit" value="Send">
            </form>
            <!--End of the careers form-->

        </div>
        <div class="col">
            <img class="careerpic" src="Img/team.jpg" alt="bottle service girls holding up merchandise">
        </div>
    </div>
</div>

 <!--Link to javascript form validation-->
<script src="Careers_Form validation and Event handling.js"></script>

<?php include "footer.php";
?>