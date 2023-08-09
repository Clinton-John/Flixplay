<?php
// what is to be viewed inside 
declare(strict_types=1);

function signup_inputs(){
   
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["erros_signup"]["username_taken"]) ) {
    
    echo '<input type="text" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] .'"> ';
    }else{
    echo '<input type="text" name="username" placeholder="Username">';
     
    }
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["erros_signup"]["email_taken"]) && !isset($_SESSION["erros_signup"]["invalid_email"]) ) {
     
        echo '<input type="email" name="email" placeholder="email" value="' . $_SESSION["signup_data"]["email"] .'"> ';
        }else{
        echo '<input type="email" name="email" placeholder="email">';
         
        }
    echo '<input type="password" name="password" placeholder="Enter password">'; 
}

function check_signup_errors(){

    if (isset($_SESSION["errors_signup"])) {
       $errors = $_SESSION["errors_signup"];
  
        
       foreach($errors as $error){
        echo '<p id="error">'. $error . '</p>';
       }
       unset($_SESSION["errors_signup"]);
    }else if(isset($_GET["signup"]) && $_GET["signup"] === "success" ){
        echo '<br>';
        echo "<p id='error'>signup Success </p>";
    }
}