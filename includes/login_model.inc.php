<?php

declare(strict_types=1); // declares the type of the variable that should be in the database

function get_user(object $pdo , string $username){
  $query = "SELECT * from users where username=:username;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":username" ,$username);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);// the fetch method fetches the next row from the result set, the PDO::FETCH_ASSOC specifies the fetch style on this case an associative array
  return $result;
  //if there is a username in the database then the username will return as an array while if there is no username the result will turn out as a boolean
} 