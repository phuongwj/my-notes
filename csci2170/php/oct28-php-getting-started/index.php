<?php
    $greeting = "Welcome, " . $_REQUEST['name'];
    $string1 = "Greeting = $greeting";
    $string2 = 'Greeting = $greeting';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oct 28: PHP Getting Started</title>
</head>
<body>
    <h1>Oct 28: PHP Getting Started</h1>
    <h2><?php echo $greeting; ?></h2>
    <p><?php echo $string1; ?></p>
    <p><?php echo $string2; ?></p>
</body>
</html>