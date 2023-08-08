<?php

declare(strict_types=1); // declares the type of the variable that should be in the database

 function is_input_empty(string $username , string $pwd){
    if (empty($username) || empty($pwd) ) {
       return true;
    } else {
       return false;
    }
    
 }
 

function is_username_wrong(array|bool $result){ // allows the strict type to accept both a bool and an array
 if (!$result) {
    return true;
 } else {
    return false;
 }
 
} 
function is_password_wrong(string $pwd , string $hashedpwd){
    if (!password_verify($pwd, $hashedpwd)) {
       return true;
    } else {
       return false;
    }
    
   } 