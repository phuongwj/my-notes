<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap: Async Comm with PHP</title>
</head>
<body>
    <h1>Async communication with a PHP server</h1>

    <?php
        echo "<h2>Sample heading customized on the server-side </h2>";
    ?>

    <div id="content-from-server"></div>

    <script>
        const contentBox = document.querySelector("#content-from-server");
        
        // Get data from server
        fetch("process-form.php")
        .then(res => res.json()) // we need to parse the json string as a json first
        .then(data => {
            contentBox.innerHTML = `<p>${data.user} says "<em>${data.quote}</em>" </p>`;
            // note that if you do contentBox.textContent = `<p>${data}</p>`;
            // it will litereally give you <p>Hello!</p>
        })
        .catch(err => console.error(err));

        // Replace the following line with data received from server
        contentBox.innerHTML = "<p>Hello from the server-side!</p>";
    </script>
</body>
</html>