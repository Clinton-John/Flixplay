<?php

  // setting the playist name to show the 
function set_playlist_name(object $pdo , string $username , string $playlistName ){
    
 $query = "INSERT into playlists (username , playlist_name) VALUES (:username, :playlistName)";
   $stmt = $pdo->prepare($query);

  $stmt->bindParam(":username", $username);
  $stmt->bindParam(":playlistName", $playlistName);
  $stmt->execute();

}

function display_users_playlist( object $pdo , $username){
  $query = "SELECT  playlist_name from playlists where username=:username;;";
  $stmt= $pdo->prepare($query);

  $stmt->bindParam(":username" , $username);
  $stmt->execute();

  $playlistResults = [];

  while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
     $playlistResults[] = $row["playlist_name"];
  }

  return $playlistResults;


}

/*
function display_users_playlist( object $pdo , $username){
  $query = "SELECT  playlist_name from playlists where username=:username;;";
  $stmt= $pdo->prepare($query);

  $stmt->bindParam(":username" , $username);
  $stmt->execute();

  $playlistResults = $stmt->fetch(PDO::FETCH_ASSOC);

 

  return $playlistResults;


}*/