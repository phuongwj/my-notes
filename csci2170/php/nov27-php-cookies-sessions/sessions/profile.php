<?php
/* 
 * CSCI 2170: Intro to Server-Side Scripting
 * Example from lecture discussion on Nov 27, 2025
 * 
 * profile.php (sessions)
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions example</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #505050ff;
            padding: 1rem;
        }
        header#banner {
            border-bottom: 1px solid gold;
            padding: 1rem 0;
        }
        header#banner > h1 {
            margin: 0;
            padding: 0;
        }
        footer#pg-footer {
            border-top: 1px solid #00abff;
        }
        main#main-container {
            min-height: 60vh;
        }
        nav#primary-nav {
            display: flex;
            gap: 1rem;
            align-items: center;
            height: 50px;
        }
    </style>
</head>
<body>

    <header id="banner">
        <h1>User Profile @ Sessions</h1>
        <nav id="primary-nav">
            <a href="login.php">Login</a>
            <a href="profile.php">Profile (show this only when user is "logged in")</a>
            <a href="logout.php">Logout (show this only when user is "logged in")</a>
        </nav>
    </header>

    <main id="main-container">
        <h2>Hello, &lt;user&gt;! (show this only when user is "logged in")</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam numquam consequuntur accusantium dicta consectetur at veritatis corrupti quaerat aliquam alias quasi amet praesentium impedit eum, ipsam unde sunt fugit nostrum.</p>
    </main>

    <footer id="pg-footer">
        <p><?php echo date("Y"); ?>. This website.</p>
    </footer>

</body>
</html>