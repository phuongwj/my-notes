<?php
/* 
 * CSCI 2170: Intro to Server-Side Scripting
 * Example from lecture discussion on Nov 20, 2025
 * 
 * get-list.php
 */

    // (0a) Connect to and read from DB
    // Syntax: $connectionObject = new mysqli ($hostname, $username, $password, $dbname);
    $conn = new mysqli("localhost", "root", "", "todo-nov20", "3307"); // i have to set 3307 because it's the port for my sql-xampp stuffs

    // (0b) Kill script if connection not successful
    if ($conn->connect_error) {
        echo "Oops connect error!:<br>" . $conn->connect_error;
        die();
    }

    // (0c) Setup query to read from the list table
    $sql = "SELECT * FROM list";
    $result = $conn->query($sql);

    // (1) Assemble a results array with DB row data
    // (2) JSON encode results array
    $listResult = array();
    while($row = $result->fetch_assoc()) {
        array_push($listResult, $row);
    }

    // (3) Send JSON encoded result (list) to client
    print_r(json_encode($listResult));

?>