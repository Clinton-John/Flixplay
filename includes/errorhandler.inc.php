<?php

error_reporting(E_ALL);

ini_set("display_errors" , 1);

function errorHandler($errno, $errstr, $errfile, $errline){

    echo  "Error: [$errno] $errstr - $errfile:$errline";
}

set_error_handler("errorHandler");
?>
