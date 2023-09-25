<?php

session_start();
if($_SERVER["REQUEST_METHOD"] === "POST"){

  if (isset($_GET["login"]) && $_GET["login"] === "success"){
   
    if (isset($_SESSION["username"])) {
 
      $username = $_SESSION["username"];
      // Retrieve other data that you want to insert into table2
    $playlistName = $_POST["playlistName"];
    
    }
  
    $playlistName = $_POST["playlistName"];
      $username = $_SESSION["username"];
        
  
    try {
      require_once 'dbh.inc.php';
      require_once 'playlist_model.inc.php';
      require_once 'playlist_control.inc.php';
  
  
  
      create_new_playlist( $pdo ,  $username , $playlistName);
      display_created_playlist( $pdo ,  $username);
      // header("location: ../flixplay.php");
    } catch (PDOException $e) {
      die("QUERY failed" . $e->getmessage());
    }

  }
  else{
    header("location: ../flixplay.php");
  }
 

}else{
    header("location:../flixplay.php");
    die();
}