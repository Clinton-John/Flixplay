<?php

  // setting the playist name to show the 
function set_playlist_name(object $pdo , string $username , string $playlistName ){
    
 $query = "INSERT into playlists (username , playlist_name) VALUES (:username, :playlistName)";
   $stmt = $pdo->prepare($query);

  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":playlistName", $playlistName);
  $stmt->execute();

}