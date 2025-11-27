<?php
/* 
 * CSCI 2170: Intro to Server-Side Scripting
 * Example from lecture discussion on Nov 27, 2025
 * 
 * index.php (sessions)
 * 
 */
    session_start();
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
        <h1>Sessions - longer-term and user-specific data management</h1>
        <nav id="primary-nav">
            <a href="login.php">Login</a>
            <a href="profile.php">Profile (show this only when user is "logged in")</a>
            <a href="logout.php">Logout (show this only when user is "logged in")</a>
        </nav>
    </header>

    <main id="main-container">
        <?php 
            if (isset($_SESSION['name'])):
        ?>
        <h2>Hello, <?php echo $_SESSION['name']; ?>! (show this only when user is "logged in")</h2>
        <?php 
            else:
        ?>
        <h2>Hello! Please log in to continue.</h2>
        <?php 
            endif;  
        ?>