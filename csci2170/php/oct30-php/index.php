
    <main id="pg-main-content">
        <!-- Code for main content in index.php -->
        <h2>Homepage</h2>
        <?php
            if (isset($_GET['name'])) {

        ?>
        <h3>Welcome , <?php echo $_GET['name']?></h3>
        <?php
            } else {
        ?>
        <h3>Welcome</h3>
        <?php
            }
        ?>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt itaque quaerat at ut temporibus debitis, vel iusto fugit praesentium assumenda porro ad repellendus reprehenderit? Nam nostrum repudiandae molestiae repellat molestias?</p>
    </main>

    