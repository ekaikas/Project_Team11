<?php
    session_start();
    unset($_SESSION["id"], $_SESSION["username"], $_SESSION["name"], $_SESSION["email"], $_SESSION["password"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
    header("Location: Index.php");
?>

