<?php
/**
 * Script to process all form submission
 */

// echo "Hello!";

$response = [
    "id" => 99,
    "user" => "Yoda",
    "quote" => "Do or do not, there is no try!"
];

echo json_encode($response);

// $_GET - for data submitted using the GET method
// $_POST - for data submitted synchronously using the POST method
// $_REQUEST - for data submitted synchronously using either POST or GET

// $name = $_REQUEST['fname'];
// echo $name;

// trim(), htmlspecialchars(), stripslashes()
// htmlspecialchars(stripslashes(trim()))

// we need to process the data from the input string directly.
// php://input gives you all the input from the client-side
$dataFromClient = json_decode(file_get_contents("php://input"), true);
echo $dataFromClient;

// header("Location: ../index.php?name=$email");
// die();

?>