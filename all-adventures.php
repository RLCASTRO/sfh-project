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
        <header class="page-header">
            <img class="header-img" src="./images/canoe.jpg" alt="Canoe" style="width: 100%;">
            <h1 class="centered">Come Experience Canada</h1>
        </header>

        <article>
            <?php
            // include("upcomingAdventures.php");

            include("connection.php");

            $sql = "SELECT * FROM halifaxcanoe.adventures";

            if (mysqli_query($con, $sql)) {

                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $heading = $row["heading"];
                        $tripDate = $row["tripdate"];
                        $duration = $row["duration"];
                        $summary = $row["summary"];

                        echo "<div class='articleContent'>";
                        echo "<div class='articleTitle'>";
                        echo "<h2>$heading</h2>";
                        echo "</div>";
                        echo "<div class='articleDate'>";
                        echo "<p>Date: $tripDate </p>";
                        echo "<p>Duration: $duration days</p>";
                        echo "</div>";
                        echo "<div class='articleSummary'>";
                        echo "<h3>Summary</h3>";
                        echo "<p>$summary</p>";
                        echo "</div>";
                        echo "</div>";
                        
                    }
                }
                else {
                echo "<p>No Records found</p>";
                }
            }
            ?>
        </article>
    </div>

</body>

</html>