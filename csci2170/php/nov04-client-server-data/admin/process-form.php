<?php
/**
 * Process all form submission
 */

// $_GET - for data submitted using the GET method
// $_POST - for data submitted synchronously using the POST method
// $_REQUEST - for data submitted synchronously using either POST or GET

// $name = $_REQUEST['fname'];
// echo $name;

// trim(), htmlspecialchars() => we will use these two to clean out trailing spaces,
// convert any kinds of special characters into html entities
// and also stripslashes()
// => for security purposes when entering data into the form

// These two are values you'll receive from the form.
// $email = htmlspecialchars(striplashes(trim($_POST['login-email'])));
// $password = htmlspecialchars(striplashes(trim($_POST['login-password'])));

// $users = file("users.csv");
// // print_r($users);

// print_r(explode(",", $users[0]));

// will help you read any data that you submitted
$dataFromClient = file_get_contents("php://input");
echo $dataFromClient;

// header("Location: ../index.php?name=$email");
// die(); // we're telling the script to go die after it finishes executing, 
// alternatively there's also a exit() function i think.

?>