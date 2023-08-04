<?php
if($_SERVER["REQUEST_METHOD"]=== "POST"){
     
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

       try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_control.inc.php';

        // ERROR HANDLER
        $errors=[];
      if (is_input_empty($username,$pwd,$email)) {
         $errors["empty_input"] = "All the fields must be filled!";
       }
       if (is_email_invalid($email) ) {
        $errors["invalid_email"] = "please enter a valid email";
       
       }   
       if (is_username_taken($pdo,$username) ) {
        $errors["username_taken"] = "The username is already assigned to another user";
       
       }   
       if (is_email_taken($pdo, $email) ) {
        $errors["email_taken"] = "the email is already registered";
      
       }

       require_once 'config_session.inc.php';
       if ($errors) { //if there exists an error then set a session error
        $_SESSION["errors_signup"]= $errors;

            // adding a feature  to improve the interaction of the website such that when an error is displayed, the user data will still be shown in the input field and only the prompet error will be repeated.

            $signupData = [
              'username' => $username,
              'email' => $email,
            ];
        $_SESSION["signup_data"]= $signupData;
        header("location: ../signup.php");
        die();// stops the other codes from running after the errors have been displayed
       }
        
       create_user( $pdo,  $username,  $pwd , $email);
        header("location: ../flixplay.html");
        die();
         
        $pdo = null;
        $stmt = null;
       } catch (PDOException $e) {
        die("Query failed" . $e-getMessage());
       }
}else{

     header("location:../flixplay.html");
     die();
}