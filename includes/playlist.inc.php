<?php



if($_SERVER["REQUEST_METHOD"] === "POST"){
  require_once 'config_session.inc.php';  
  $username = isset($_SESSION["username"]) ? $_SESSION["username"]: "";
  $playlistName = $_POST["playlistName"];

        
      

  try {
    require_once 'dbh.inc.php';
    require_once 'playlist_model.inc.php';
    require_once 'playlist_control.inc.php';



    create_new_playlist( $pdo ,  $username , $playlistName);
    header("location: ../flixplay.php");
  } catch (PDOException $e) {
    die("QUERY failed" . $e->getmessage());
  }

}else{
    header("location:..flixplay.php");
    die();
}