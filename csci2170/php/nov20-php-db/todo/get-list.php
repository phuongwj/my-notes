<?php
    // Connect to and rea from DB
    $conn = new mysqli(
        "localhost", // host
        "root", // user
        "", // password
        "todo-nov20", // DB name
        "3307" // specifying the port
    );

    if ($conn->connect_error) {
        echo "oops connect error!:<br>".
        $conn->connect_error;
        die();
    }

    // $sql = "SELECT * FROM list";
    // $result = $conn->query($sql);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    // We get this if we do the above.
    //     mysqli_result Object
    // (
    //     [current_field] => 0
    //     [field_count] => 3
    //     [lengths] => 
    //     [num_rows] => 3
    //     [type] => 0
    // )

    $sql = "SELECT * FROM list";
    $result = $conn->query($sql);

    // if there are to be data fetched from the table, it gets assigned
    // $row. and if the $result->fetch_assoc() doesn't have anything
    // then $row will never exist <3
    // while ($row = $result->fetch_assoc()) {
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    // }

    // (1) Assemble a results array with DB row data
    // (2) JSON encode results array
    $listResult = array();

    while ($row = $result->fetch_assoc()) {
        array_push($listResult, $row);
    }

    // echo "<pre>";
    print_r(json_encode($listResult));
    // echo "</pre>";
?>
