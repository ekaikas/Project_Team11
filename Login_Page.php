<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="Log_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="loginbox">
        <img src="img/avatar.png" alt="avatar image" class="avatar">
        <h1>Login Here</h1>
        <form name="form_login" method="post" action="" id="form" class="form">
            <div class="form-control">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter your username" id="form_username"><br>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password:</label>
                <input type="password" name="password" placeholder="Enter your password" id="form_password"><br>
                <small>Error message</small>
            </div>            <br>
<!--
        <form name="form_login" method="post" action="">
            <div id="message"></div>
            <br>
            Username: <input type="text" name="username" id="form_username"><br>
            Password: <input type="password" name="password" id="form_password">
            <br>
            <a href="Registration_Page.php">Registration</a>
            <br>
            <a href="index.php">Back to Main Page</a>
            <br>
            <br>
            <input type="button" name="submit" value="Log In" id="but_submit">
        </form>
-->
    </div>
</body>
  

<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $("#but_submit").click(function(){
            var username = $("#form_username").val().trim();
            var password = $("#form_password").val().trim();

            if( username != "" && password != "" ){
                $.ajax({
                    url:'login.php',
                    type:'post',
                    data:{username:username,password:password},
                    success:function(response){
                        var msg = "";
                        if(response == 1){
                            window.location = "index.php";
                        }else{
                            msg = "Invalid username and password!";
                        }
                        $("#message").html(msg);
                    }
                });
            }
        });

    });
</script>
</html>