
<?php

require_once "includes/config_session.inc.php";
require_once "includes/signup_model.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/errorhandler.inc.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup / login</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <section class="wrapper">
        <div class="form_signup">
            <header>Signup</header>
            <form action="includes/signup.inc.php" method="post">
                
                <!-- <input type="text" name="username" placeholder="Username" >
                <input type="email" name="email" placeholder="email" >
                <input type="password" name="password" placeholder="Enter password"> -->
                <?php
                  signup_inputs();
                 ?>
                <div class="checkbox">
                    <input type="checkbox" id="signupcheckbox">
                    <label for="signupcheckbox">I have read and accepted the terms and conditions.</label>
                </div>
                <input type="submit" value="Signup">
                <?php
                  check_signup_errors();
                 ?>
                

            </form>
        </div>

        <div class="form_login">
            <header>Login</header>
            <form action="includes/signup.inc.ph" method="post">
                <input type="text" name="username" placeholder="Username">

                <input type="password" name="password" placeholder="Enter password">
                <a href="#" id="forgot-password">Forgot password?</a>
                <input type="submit" value="Login">

            </form>
        </div>
    </section>

</body>

</html>