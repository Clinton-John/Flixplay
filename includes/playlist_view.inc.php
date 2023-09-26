<?php
function playlist_display(){

    if (isset($_GET["login"]) && $_GET["login"] === "success") {

        $username = $_SESSION["username"];
        
        require_once 'playlist_model.inc.php';
        require_once 'dbh.inc.php';

        $playlistResults = display_users_playlist(  $pdo , $username);
          $playlistNumbers = count($playlistResults);

         $_SESSION["playlistNumbers"] =  $playlistNumbers;
       
            if ($playlistNumbers>0) {
                for ($i=0; $i <$playlistNumbers; $i++) { 
                    echo'  <div class="playlist-container"> <div class="playlist-image" id="liked-image" onclick="LibraryManager.overallManager()"></div> <div class="playlist-name"> <p>' .$playlistResults[$i]  . '</p>  <p id="song-number"></p> </div><div class="playing-icon"> <img src="spotifyimages/playing.png" alt=""> </div> </div>';

                }
            } else{
                echo'  <div class="playlist-container"> <div class="playlist-image" id="liked-image" onclick="LibraryManager.overallManager()"></div> <div class="playlist-name"> <p>Liked Songs</p>  <p id="song-number"></p> </div><div class="playing-icon"> <img src="spotifyimages/playing.png" alt=""> </div> </div>';
            }


} else{
    echo' <p id="playlist-welcoming">Your playlists will appear below</p> <div class="playlist-container"> <div class="playlist-image" id="liked-image" onclick="LibraryManager.overallManager()"></div> <div class="playlist-name"> <p>Liked Songs</p>  <p id="song-number"></p> </div><div class="playing-icon"> <img src="spotifyimages/playing.png" alt=""> </div> </div>';

}
    };
     


    function playlist_display_numbers(){ 
        if (isset($_GET["login"]) && $_GET["login"] === "success") {
            $playlistNumbers = $_SESSION["playlistNumbers"];
            echo  $playlistNumbers . " Public Playlists" . ". 0 followers";
    
        } else{
            echo  "No Public Playlists";
            
        }
       
    }