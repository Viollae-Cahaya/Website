<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    include "koneksi.php";
    $qry=mysqli_query($conn, "select * from account where email = '".$_SESSION['email']."'");
    $dt_user=mysqli_fetch_array($qry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="aboutus.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>About Us</title>
</head>
<body>
    <!-- navbar -->
        <nav class="navbar">
            <div class="nav">
                <img src="asset/nhslogo_auto_x2 copy.png" class="brand-logo" alt="">
                <div class="nav-items">
                    <div class="search">
                        <input type="text" class="search-box" placeholder="search product">
                        <button class="search-btn">search</button>
                    </div>
                    <a href="#"><img src="asset/img/cart.png" alt=""></a>
                </div>
            </div>
            <ul class="links-container">
                    <li class="link-item"><a href="index.php" class="link">home</a></li>
                    <li class="link-item"><a href="aboutus.php" class="link">about us</a></li>
                    <li class="link-item"><a href="contact.php" class="link">contact us</a></li>
                    <li class="link-item"><a href="logout.php" class="link">logout</a></li>
            </ul>
        </nav>

        <div class="about-section">
            <h1>About Us Page</h1>
            </div>

            <h2 style="text-align:center">Our Team</h2>
            <div class="row">
            <div class="column">
                <div class="card">
                <img src="asset/jay shuirman.jpg" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jane@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="asset/richard novak.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Mike Ross</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mike@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="asset/doug haut.jpg" alt="John" style="width:100%">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
                </div>
            </div>
        </div>
</body>
</html>
