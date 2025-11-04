<?php
    require_once "templates/header.php";
?>

    <main id="pg-main-content">
        <!-- Code for main content in index.php -->
        <h2>Homepage</h2>
        <?php
            if (isset($_GET['name'])) {
        ?>
        <h3>Welcome, <?php echo $_GET['name']; ?></h3>
        <?php
            } else {
        ?>
        <h3>Welcome</h3>
        <?php
            }
        ?>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt itaque quaerat at ut temporibus debitis, vel iusto fugit praesentium assumenda porro ad repellendus reprehenderit? Nam nostrum repudiandae molestiae repellat molestias?</p>
    
        <h2>Quotes</h2>

    <?php
        // (1) Using file() function => this is reading and closing the files automatically
        $fileContents = file("admin/content.txt");
        // Node.js or JS syntax:
        // fileContents.forEach( line => {});
        foreach($fileContents as $line) {
            print("<p>" . $line . "</p>"); // the dot => . in the middle means concatenation
        }

        // (2) Using fopen(), fclose(), functions => here, we are breaking operations down one by one
        // we're manually doing all of this, opening and then closing by ourselves.
        $fileHandler = fopen("admin/context.txt", "r");

        while (!feof($fileHandler)) {
            print("<p>" . fgets($fileHandler) . "</p>");
        }

        fclose($fileHandler);

        // (3) Write into and read from file
        $fileHandler = fopen("admin/content.txt", "a+");

        fwrite($fileHandler, "Hello world" . PHP_EOL);

        // After the cursor have went all the way down, we can do a rewind here 
        // to make the cursor go back all the way up
        // rewind($fileHandler);

        while (!feof($fileHandler)) {
            print("<p>" . fgets($fileHandler) . "</p>");
        }

        fclose($fileHandler);

        // (4) Using file_get_contents() to read files
        print_r(file_get_contents("admin/content.txt"));

    ?>
    
    </main>

<?php
    require_once "templates/footer.php";
?>
