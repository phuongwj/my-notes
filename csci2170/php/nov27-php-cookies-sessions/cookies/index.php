<?php
/* 
 * CSCI 2170: Intro to Server-Side Scripting
 * Example from lecture discussion on Nov 25, 2025
 * 
 * index.php (cookies)
 * 
 */
    if (isset($_REQUEST['font']) && ($_REQUEST['font'] == "sans")) {
        setcookie("fontpref", "sans", time() + (60*60*24), "/");
    } else {
        setcookie("fontpref", "serif", time() + (60*60*24), "/");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies example</title>
    <style>

<?php
    if (isset($_COOKIE['fontpref']) && ($_COOKIE['fontpref'] == "sans")) {
        echo "body { font-family: Arial, sans-serif; }";
    } else {
        echo "body { font-family: Times, serif; }";
    }
?>

    </style>
</head>
<body>
    
    <h1>Cookies - setting preferences</h1>

    <ul>
        <li><a href="index.php?font=sans">Set font preference to Sans-Serif (e.g., Arial)</a></li>
        <li><a href="index.php?font=serif">Set font preference to Serif (e.g., Times New Roman)</a></li>
    </ul>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam numquam consequuntur accusantium dicta consectetur at veritatis corrupti quaerat aliquam alias quasi amet praesentium impedit eum, ipsam unde sunt fugit nostrum.</p>

</body>
</html>