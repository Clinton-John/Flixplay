
<?php


 // in the MVC architecture the controll is incharge of communications between the model and the view . what is to be displayed and what we get


function is_input_empty( string $username, string $pwd, string $email){
    if (empty( $username) || empty($pwd) || empty($email)) {
        return true;
    }else {
        return false;
    
    }
}
// checking if the email entered is invalid or valid using a php built in function  
function is_email_invalid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       return true;
    }else {
        return false;
    }
}
// checking if the username entered already exists in the database
 function is_username_taken( object $pdo,string $username){
    if (get_username( $pdo , $username)) {
        return true;
    } else {
        return false;
    }
 }
 function is_email_taken( object $pdo,string $email){
    if (get_email( $pdo, $email)) {
        return true;
    } else {
        return false;
    }
 }

 //creatng a user function
 function create_user(object $pdo, string $username, string $pwd ,string $email){

    set_user( $pdo,  $username,  $pwd , $email);
 }