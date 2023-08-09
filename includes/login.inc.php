<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $pwd = $_POST["password"];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_control.inc.php';

         // ERROR HANDLER
         $errors=[];
         if (is_input_empty($username,$pwd)) { 
            $errors["empty_input"] = "All the fields must be filled!";
          }
          
          $result = get_user($pdo, $username); // the variable contains the the grabed user details
          if (is_username_wrong( $result)) {
            $errors["login_incorrect"] = "Invalid Login, please try again";

          }
    
          if (!is_username_wrong( $result) && is_password_wrong($pwd, $result["pwd"] )) {
            $errors["login_incorrect"] = "Invalid Login, please try again";

          }
            
          require_once 'config_session.inc.php';
          if ($errors) { //if there exists an error then set a session error
           $_SESSION["errors_login"] = $errors;
    
           header("location: ../signup.php");
           die();// stops the other codes from running after the errors have been displayed
          }
          $newSessionId = session_create_id();
          $sessionId = $newSessionId ."_". $result["id"];//appending the user id to the session id 
          session_id($sessionId);
  
          //create a variable that stores the passed variable
          $_SESSION["user_id"] = $result["id"];
          $_SESSION["user_username"] = htmlspecialchars($result["username"]);

          $_SESSION["last-regeneration"]= time();

          header("location: ../flixplay.html?login=success");
           $pdo = null;
          $stmt = null;
          die();
           
          create_user( $pdo,  $username,  $pwd , $email);
           header("location: ../flixplay.html");
           die();
            
           $pdo = null;
           $stmt = null;
       
       
    } catch (PDOException $e) {
        die("Query failed" . $e->getmessage());
    }
}else{
    header("location: ../signup.php");
    die();
}