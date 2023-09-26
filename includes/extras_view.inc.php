<?php


function display_users_username(){

if (isset($_SESSION["user_id"])) {
    echo '<p id="dynamic-username"> ' . $_SESSION["user_username"] .  '</p>';

 } else if(!isset($_SESSION["user_id"])){
     echo "";
 }
}


function display_users_playlist_number(){
    
}


