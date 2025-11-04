<?php
    require_once "templates/header.php";
?>

    <main id="pg-main-content">
        <!-- Code for main content in login.php -->
        <h2>Login</h2>

        <form id="login-form" action="admin/process-form.php" method="post">
            <div class="form-group">
                <label for="login-email">Email:</label>
                <input type="email" name="login-email" id="login-email">
            </div>
            <div class="form-group">
                <label for="login-password">Password:</label>
                <input type="password" name="login-password" id="login-password">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="login-submit" value="Login">
            </div>
        </form>
    </main>

    <script>
        document.getElementById("login-form").addEventListener("submit", (event) => {
            event.preventDefault();
            submitData();
        });

        document.getElementById("login-submit").addEventListener("click", (event) => {
            event.preventDefault();
            submitData();
        });

        async function submitData() {
            const uname = document.getElementById("login-email").value;
            const password = document.getElementById("login-password").value;
            const url = "admin/process-form.php";

            const result = await fetch(url,
            {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                }
                body: JSON.stringify({
                    loginEmail: uname, 
                    loginPassword: password 
                })
            });

            const data = await result.text();
            console.log(data);
        }
    </script>

<?php
    require_once "templates/footer.php";
?>