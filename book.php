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
            <h1>Book a Trip</h1>
            <hr>
        </div>
        <div class="container container-form">
            <form method="GET" action="thankyou.php">
                <label for="email">E-mail: </label>
                <input type="text" id="email" name="email" class="">
                <br>
                <label for="email">Location: </label>
                <input type="text" id="location" name="location" class="">
                <br>
                <label for="email">Date: </label>
                <input type="date" id="date" name="date" class="">
                <br>
                <input type="submit" class="submit-btn" value="Submit">

            </form>
        </div>
    </div>

</body>

</html>