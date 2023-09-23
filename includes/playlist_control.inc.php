<?php
function create_new_playlist(object $pdo , string $username ,string $playlistName){
    set_playlist_name($pdo , $username , $playlistName);
}