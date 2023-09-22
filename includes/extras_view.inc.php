<?php


function display_users_username(){

if (isset($_SESSION["user_id"])) {
    echo '<p id="dynamic-username"> ' . $_SESSION["user_username"] .  '</p>';

 } else if(!isset($_SESSION["user_id"])){
     echo "";
 }
}


function display_created_playlist(){
   if(isset($_GET["login"]) && $_GET["login"]==="success") {
    
    echo'<div class="playlist-container"> <div class="playlist-image" id="liked-image" onclick="LibraryManager.overallManager()"></div> <div class="playlist-name"> <p>La gran mentira</p>  <p id="song-number">15 Songs</p> </div><div class="playing-icon"> <img src="spotifyimages/playing.png" alt=""> </div> </div>';
   }
 
}


function create_playlist_onclick(){
    if (isset($_GET["login"]) && $_GET["login"] === "success"){
        echo '<div class="playlist-container"> <div class="playlist-image" id="liked-image" onclick="LibraryManager.overallManager()"></div> <div class="playlist-name"> <p>La gran mentira</p>  <p id="song-number">15 Songs</p> </div><div class="playing-icon"> <img src="spotifyimages/playing.png" alt=""> </div> </div>';
    }else
    {
        echo '<a  class="try-me" onclick="addPlaylist()" >BEFORE CLICKED </a>';
    }
}