<?php
/**
 * Process form submission
 */

// the $_REQUEST gives you access to query parameters accessed through the GET or POST requests
// print_r($_REQUEST);
$name = $_REQUEST['fname'];
echo $name;

// any sort of a re-direction request. because the requested page is a completely different script, from 
// the client-side. So wehat we'll do is I'll forward this response to another file.
// here we are specifycing the location parameter
header("Location: ../index.php?name=$name");

// echo "process-form.php";

// this is how you declare an array in php
// $teas = [
//     "tea1" => "chamomile", 
//     "chai",
//     "tea2" => "chai",
//     "one more tea"
// ];

// $f1team = array(
//     "McLaren",
//     "Ferrari",
//     "Red Bull Racing"
// );

// echo "<pre>";
// print_r($f1teams);
// echo "</pre>";

// array_push($f1teams, "Williams F1");
// $f1teams[sizeof($f1teams)] = "Aston Martin Aramco F1 Team";
// $f1teams[sizeof($f1teams)] = [
//     "Haas F1",
//     "Visa CashApp R8"
// ];


// echo "<pre>";
// print_r($teas);
// passing the ["QUERY_STRING"] gave us like a whole query string.
// like the following -> fname=damn+bro&email=whatsup%40hello.com&msg=haaha&submit=Submit
// print_r($_SERVER["QUERY_STRING"]);
// echo "</pre>";
?>