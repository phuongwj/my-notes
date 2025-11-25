<?php
/* 
 * CSCI 2170: Intro to Server-Side Scripting
 * Example from lecture discussion on Nov 20, 2025
 * 
 * update-list.php
 */

    // get ID value sent by client
    $id = $_REQUEST['id'];

    // (0a) Connect to and read from DB
    // Syntax: $connectionObject = new mysqli ($hostname, $username, $password, $dbname);
    $conn = new mysqli("localhost", "root", "", "todo-nov20", "3307"); // i have to set 3307 because it's the port for my sql-xampp stuffs

    // (0b) Kill script if connection not successful
    if ($conn->connect_error) {
        echo "Oops connect error!:<br>" . $conn->connect_error;
        die();
    }

    // (0c) Setup query to read from the list table
    $sql = "UPDATE list SET done=!done WHERE id = {$id}";
    $result = $conn->query($sql);

    print_r($result);

?>