<?php

if($_SESSION["REQUEST_METHOD"] === "POST"){
        
  try {
    require_once 'playlist_model.inc.php';
    require_once 'playlist_control.inc.php';



    create_new_playlist( $pdo ,  $username , $playlistName);
  } catch (PDOException $e) {
    die("QUERY failed" . $e->getmessage());
  }

}else{
    header("location:..flixplay.php");
    die();
}