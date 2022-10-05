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
        <a href="#">Home</a>
        <a href="#">Book Trip</a>
        <a href="#">Admin Login</a>
    </div>
<!-- MAIN CONTENT -->
    <div class="container">
        <header class="page-header">
            <img class="header-img" src="./images/canoe.jpg" alt="Canoe" style="width: 100%;">
            <h1 class="centered">Come Experience Canada</h1>
        </header>

        <article>
            <div class="contentTitle">
                <h1>Upcoming Adventures</h1>
                <hr>
            </div>
            <div class="articleContent">
                <div class="articleTitle">
                    <h2>Halifax</h2>
                </div>
                <div class="articleDate">
                    <p>Date: 2017-04-12 </p>
                    <p>Duration: 4 days</p>
                </div>
                <div class="articleSummary">
                    <h3>Summary</h3>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio adipisci corporis iusto dolorum
                        quos
                        magni exercitationem, a culpa pariatur maiores, ab rerum vero perspiciatis incidunt ullam et id
                        labore sunt.
                    </p>
                </div>
            </div>
            <div class="articleContent">
                <div class="articleTitle">
                    <h2>Sydney</h2>
                </div>
                <div class="articleDate">
                    <p>Date: 2017-05-10 </p>
                    <p>Duration: 2 days</p>
                </div>
                <div class="articleSummary">
                    <h3>Summary</h3>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio adipisci corporis iusto dolorum
                        quos
                        magni exercitationem, a culpa pariatur maiores, ab rerum vero perspiciatis incidunt ullam et id
                        labore sunt.
                    </p>
                </div>
            </div>
        </article>
    </div>

</body>

</html>