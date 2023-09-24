<?php
function playlist_display(){

    if (isset($_GET["login"]) && $_GET["login"] === "success") {

        $username = $_SESSION["username"];
        
        require_once 'playlist_model.inc.php';
        require_once 'dbh.inc.php';

        $playlistResults = display_users_playlist(  $pdo , $username);

        for ($i=0; $i <count($playlistResults); $i++) { 
            echo  "<p>" . $playlistResults['playlist_name'] .  "</p>";
            echo  "<br>";
        }

} else{
    echo' <p id="playlist-welcoming">Your playlists will appear below</p> <div class="playlist-container"> <div class="playlist-image" id="liked-image" onclick="LibraryManager.overallManager()"></div> <div class="playlist-name"> <p>Liked Songs</p>  <p id="song-number"></p> </div><div class="playing-icon"> <img src="spotifyimages/playing.png" alt=""> </div> </div>';

}
    }
     