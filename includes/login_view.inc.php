<?php

declare(strict_types=1);
function output_username(){

    if (isset($_SESSION["user_id"])) {
       echo "You are loged in as " .$_SESSION["user_username"] ;
    } else {
        echo "you are not logged in";
    }
    
}
function check_login_errors(){
    if(isset($_SESSION['errors_login'])){
        $errors = $_SESSION['errors_login'];
   
        echo '<p id="error">Invalid Login, please try again.</p>';
//    foreach($errors as $error){
//    echo '<p id="error">'. $error . "</p>";
//    }

        unset ($_SESSION["errors_login"]);
    } elseif (isset($_GET["login"]) && $_GET["login"]==="success"){
       echo "<p> login success! </p>";
    }
}

function login_display(){
    if (!isset($_SESSION["user_id"])) {
        echo "Login/Signup" ;
     } else if(isset($_SESSION["user_id"])){
         echo "";
     }
}

function logout_display(){
    if (isset($_SESSION["user_id"])) {
        echo '<input type="submit" value="Logout">';
    } else {
    
    echo '<input type="submit" value="Login">';
    }
    

}