<?php
    require_once "templates/header.php";
    // before we have like include_once but i don't remember, make sure to 
    // check again when reviewing 
?>    
    
    <main id="pg-main-content">
        <!-- Code for main content in contact.php -->
        <h2>Contact Us</h2>

        <form id="contact-form" action="admin/process-form.php" method="get">
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

<?php
    require_once "templates/footer.php";
?>