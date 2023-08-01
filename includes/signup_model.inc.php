<?php

// the model is incharge of communiacting to the databases and returning the output 
declare(strict_types=1);


function get_username(object $pdo, string $username){
   
   $query = "SELECT username from users where username=:username;";
   $stmt = $pdo->prepare($query);
   $stmt->bindParam(":username", $username);
   $stmt->execute();

   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;

}
function get_email(object $pdo, string $email){
   
    $query = "SELECT email from users where email=:email;";
    $stmt = $pdo->prepare($query);
          

    $stmt->bindParam(":email", $email);
    $stmt->execute();
 
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
 
 }

 // the below function is incharge of entering the functions inside the database
 function set_user(object $pdo, string $username, string $pwd ,string $email){
   $query = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd );";
   $stmt = $pdo->prepare($query);

     // the below section hashes the user password 

 $options = [
   'cost' => 12
   ];
  
   $hashedpwd = password_hash($pwd , PASSWORD_BCRYPT, $options);
   $stmt->bindParam(":username", $username);
   $stmt->bindParam(":email", $email);
   $stmt->bindParam(":pwd", $hashedpwd);
   $stmt->execute();
   
}