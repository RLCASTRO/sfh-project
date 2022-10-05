<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halifax Canoe and Kayak</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src='main.js'></script>
</head>

<body>
    <!-- NAVBAR  -->
    <nav class="topnav">
        <div>
            <!-- <img class="openbtn" onclick="openNav()" src="./images/hamburger.png" width="40px" height="auto" alt="Menu"> -->
            <img class="openbtn" src="./images/hamburger.png" width="40px" height="auto" alt="Menu">
        </div>
        <nav class="navTitle">
            <h2>Halifax Canoe and Kayak</h2>
        </nav>
        <nav>
            <img src="./images/paddle-white.png" width="50px" height="auto" alt="Logo">
        </nav>
    </nav>
    <!-- sidepanel -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="book.php">Book Trip</a>
        <a href="#">Admin Login</a>
    </div>
    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="container">
            <h1>Book a Trip</h1>
            <hr>
        </div>
        <div class="container">
            <form method="GET" action="thankyou.php">
                <label for="email">E-mail: </label>
                <input type="text" id="email" name="email" class="">
                <label for="email">Location: </label>
                <input type="text" id="location" name="location" class="">
                <label for="email">Date: </label>
                <input type="text" id="date" name="date" class="">
            </form>
        </div>
    </div>

</body>

</html>