<!--
 *
 * CSCI 2170: Intro to Server-Side Scripting
 * Academic Term: Fall Semester 2025
 * Lecture discussions: __Oct 30, 2025__
 * Dr. Raghav Sampangi (raghav@cs.dal.ca)
 *
 * Contact page
 *-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oct 30: Lecture discussions</title>

    <!-- Link to the stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <header id="pg-banner">
        <h1>Oct 30: Lecture Discussions</h1>
    </header>

    <nav id="primary-nav">
        <a href="index.php">Home</a>
        <a href="#">Projects</a>
        <a href="contact.php">Contact</a>
    </nav>

    <main id="pg-main-content">
        <!-- Code for main content in contact.php -->
        <h2>Contact Us</h2>

        <form id="contact-form" action="process-form" method="get">
            <div class="form-group">
                <label for="i-name">Full name:</label>
                <input type="text" name="fname" id="i-name">
            </div>
            <div class="form-group">
                <label for="i-email">Email:</label>
                <input type="email" name="email" id="i-email">
            </div>
            <div class="form-group">
                <label for="i-msg">Your message:</label>
                <textarea name="msg" id="i-msg"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="i-submit">
                <input type="reset" name="reset" id="i-reset">
            </div>
        </form>
    </main>

    <footer id="pg-footer">
        <p>&copy; 2025. This website</p>
    </footer>
    
</body>
</html>