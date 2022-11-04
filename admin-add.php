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
            <h1>Admin - Add Adventure</h1>
            <hr>
        </div>
        <div class="container container-form">
            <h3>Input details about the trip</h3>
            <form method="GET" action="admin-confirm.php" id="adminconfirmation">
                <label for="heading">Heading:</label>
                <input type="text" id="heading" name="heading" class="">
                <br>
                <label for="tripdate">Trip Date:</label>
                <input type="text" id="tripdate" name="tripdate" class="">
                <br>
                <label for="duration">Duration:</label>
                <input type="text" id="duration" name="duration" class="">
                <br>
                <label for="summary">Summary</label>
                <textarea name="summary" id="summary" cols="57" rows="5"></textarea>
                <br>
                <input type="submit" class="submit-btn" value="Submit">

            </form>
        </div>
    </div>

</body>

</html>
            
            