<?php
/* 
 * CSCI 2170: Intro to Server-Side Scripting
 * Example from lecture discussion on Nov 27, 2025
 * 
 * login.php (script to log the user into the system)
 * 
 */
    session_start();

    echo session_id();
    echo "<br>";

    // security-wise, we have to do an extra step
    // The actual login functionality goes here, with user
    // credential validation/verification based on DB info

    session_regenerate_id();

    echo session_id();

    // session id is a value that is created when the 
    // session starts.

    $_SESSION['name'] = "Yoda";
    $_SESSION['email'] = "yoda@theforce.org"; 

    header("Location: index.php");
?>
