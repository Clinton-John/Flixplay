<?php

declare(strict_types=1);

function check_login_errors(){
    if(isset($_SESSION['errors_login'])){
      
        $errors = $_SESSION['errors_login'];
   foreach($errors as $error){
   echo "<br>";
    echo "<p>" .$error . "</p>";
   }

        unset ($_SESSION["errors_login"]);
    } elseif (isset($_GET["login"]) && $_GET["login"]==="success"){
       echo "<p> login success!! </p>";
    }
}