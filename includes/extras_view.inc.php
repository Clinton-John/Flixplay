<?php
function display_users_username(){
    if(isset($_GET["login"]) && $_GET["login"]==="success"){
        echo '<p id="dynamic-username"> ' . $_SESSION["user_username"] .  '</p>';
    }
}

