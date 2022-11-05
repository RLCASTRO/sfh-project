<?php 

include("connection.php");

$heading = $_GET["heading"];
$tripDate = $_GET["tripdate"];
$duration = $_GET["duration"];
$summary = $_GET["summary"];

$sql = "INSERT INTO `halifaxcanoe`.`adventures` (`heading`, `tripDate`, `duration`, `summary`) 
        VALUES ('$heading', '$tripDate', '$duration', '$summary');";
$rs = false;
$rs = mysqli_query($con, $sql);

if ($rs) {
    # code...
    $result = "New Record created successfully";
}
else {
    $result = "<p class='dbfail'>FAIL to create new record.</p>";
}




?>    




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
                <h1>Admin - Confirm</h1>
                <hr>
                <h3><?php echo $result ?></h3>
                <div class="container">
                    <a href="all-adventures.php" class="alladventureslink">View All Adventures</a>

                </div>
            </div>

        </div>

    </body>

    </html>