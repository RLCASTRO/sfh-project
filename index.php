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
            include("upcomingAdventures.php");
            ?>
        </article>
    </div>

</body>

</html>