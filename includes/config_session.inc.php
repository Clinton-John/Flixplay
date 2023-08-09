<?php

ini_set("session.use_only_cookies" , 1);// the session after being started only uses the cookies
ini_set("session.use_strict_mode" , 1);

session_set_cookie_params([

    'lifetime' => 1800, //sets the lifetime in which the cookie will expire in seconds
    'domain' => 'localhost',// the domain name in which the cookie will be available
    'path' => '/', // all the subpaths in the webpage can still function using the cookie
    'secure' => true,
    'httponly' => true // only run over http only and not on any https
]);

session_start(); //starts the session within the variable
if (isset($_SESSION["user_id"])) {
    //if the user is logged in then ..
    if (!isset($_SESSION["last-regeneration"])) { // checks if the session has generated an id 
        regenerate_session_id_loggedIn(); // generates the session id and sets it to the current time
    } else{
    $interval = 60*30;
       if ($_SESSION["last-regeneration"] >= $interval) { // if the last id is more than the 30 minutes then regenerate
        regenerate_session_id_loggedIn(); // the function is called instead to avoid duplication
       }
    
    }
} else {
    if (!isset($_SESSION["last-regeneration"])) { // checks if the session has generated an id 
        regenerate_session_id(); // generates the session id and sets it to the current time
    } else{
    $interval = 60*30;
       if ($_SESSION["last-regeneration"] >= $interval) { // if the last id is more than the 30 minutes then regenerate
        regenerate_session_id(); // the function is called instead to avoid duplication
       }
    
    }
}



// using the functions to avoid duplication of the codes inside the website
 function regenerate_session_id(){
    session_regenerate_id(true);
    $_SESSION["last-regeneration"]= time();
 }

 function regenerate_session_id_loggedIn() {
    session_regenerate_id(true);
     
    $userId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId ."_". $userId;//appending the user id to the session id 
    // session_id($sessionId);
    $_SESSION["last-regeneration"]= time();
 }