    <!DOCTYPE html>
    <html>

    <head>
        <?php
        include("./header.php");

        ?>
    </head>

    <body>
        <?php
        include("./navigation.php");

        ?>
        <!-- MAIN CONTENT -->
        <div class="container">
            <div class="container">
                <h1>Thank You</h1>
                <hr>
            </div>
            <div class="container">
                <p>Thank you: <?php echo $_GET["email"] ?></p>
                <br>
                <p>We will contact you about the:</p>
                <p><?php echo $_GET["location"] ?> trip on the <?php echo $_GET["date"] ?>. </p>
                
            </div>
        </div>

    </body>

    </html>