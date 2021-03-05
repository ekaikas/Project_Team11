<?php
$name = trim($_POST['name']);
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password_vis = trim($_POST['password']);
$password_hash = password_hash($password_vis, PASSWORD_DEFAULT);
$created_on = date('Y-m-d H:i:s'); //NOTE: server time (UTC) may be displayed

?>