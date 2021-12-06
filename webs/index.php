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
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHS FUN FACTORY</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
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

    <!-- header -->
        <header>
            <div>
            <p class="sub-heading">From skater to skater</p>
            </div>
        </header>

    <!-- product deck -->
        <section class="product">
            <h2 class="product-category">Skateboard Deck</h2>
                <button class="pre-btn"><img src="asset/img/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="asset/img/arrow.png" alt=""></button>
            <div class="product-container">
                
                <!-- 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/Baker Skateboards 8.5 Theotis Red White.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Baker Skateboards 8.5 Theotis Red White</p>
                            <span class="price">Rp 1.500.000</span>
                        </div>
                    </div>
                <!-- 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/Baker Skateboards 8.38 Kader Judgement Day Deck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Baker Skateboards 8.38 Kader Judgement Day Deck</p>
                            <span class="price">Rp 1.500.000</span>
                        </div>
                    </div>
                <!-- 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/Broken Promises x Santa Cruz Flutter 8.25 Deck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Broken Promises x Santa Cruz Flutter 8.25 Deck</p>
                            <span class="price">Rp 1.450.000</span>
                        </div>
                    </div>
                <!-- 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/Broken Promises x Santa Cruz Thornless 8.0 Deck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Broken Promises x Santa Cruz Thornless 8.0 Deck</p>
                            <span class="price">Rp 1.300.000</span>
                        </div>
                    </div>
                <!-- 5 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/8.0in x 31.8in Provost Horseman VX Deck Creature Skateboard Deck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">8.0in x 31.8in Provost Horseman VX Deck Creature Skateboard Deck</p>
                            <span class="price">Rp 1.000.000</span>
                        </div>
                    </div>
                <!-- 6 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/8.78in x 32.06in Hitz Last Call Creature Skateboard Deck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">8.78in x 32.06in Hitz Last Call Creature Skateboard Deck</p>
                            <span class="price">Rp 1.000.000</span>
                        </div>
                    </div>
                <!-- 7 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/Baekkel Aske Creature Skateboard Deck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Baekkel Aske Creature Skateboard Deck</p>
                            <span class="price">Rp 1.000.000</span>
                        </div>
                    </div>
                <!-- 8 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/Baekkel Cheap Thrills Creature Skateboard Deck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Baekkel Cheap Thrills Creature Skateboard Deck</p>
                            <span class="price">Rp 1.000.000</span>
                        </div>
                    </div>
                <!-- 9 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/deck/Iridescent Dot Santa Cruz Skateboard Deck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Iridescent Dot Santa Cruz Skateboard Deck</p>
                            <span class="price">Rp 1.000.000</span>
                        </div>
                    </div>
            </div>
        </section>

    <!-- product truck -->
        <section class="product">
            <h2 class="product-category">Truck</h2>
                <button class="pre-btn"><img src="asset/img/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="asset/img/arrow.png" alt=""></button>
            <div class="product-container">
                
                <!-- 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/Hollow Reynolds Block Silver Mid Independent Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Hollow Reynolds Block Silver Mid Independent Skateboard Trucks</p>
                            <span class="price">Rp 1.200.000</span>
                        </div>
                    </div>
                <!-- 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/independent truck polished 139 silver standart.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Independent Truck Polished 139 Silver Standart</p>
                            <span class="price">Rp 800.000</span>
                        </div>
                    </div>
                <!-- 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/Stage 11 Forged Titanium Silver Standard Independent Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Stage 11 Forged Titanium Silver Standard Independent Skateboard Trucks</p>
                            <span class="price">Rp 850.000</span>
                        </div>
                    </div>
                <!-- 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/Stage 11 Polished T-Hanger Standard Independent Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Stage 11 Polished T-Hanger Standard Independent Skateboard Trucks</p>
                            <span class="price">Rp 850.000</span>
                        </div>
                    </div>
                <!-- 5 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/Stage 11 Pro Mason Silva Black Silver Standard Independent Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Stage 11 Pro Mason Silva Black Silver Standard Independent Skateboard Trucks</p>
                            <span class="price">Rp 1.000.000</span>
                        </div>
                    </div>
                <!-- 6 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/Black Standard Bullet Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Black Standard Bullet Skateboard Trucks</p>
                            <span class="price">Rp 600.000</span>
                        </div>
                    </div>
                <!-- 7 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/Blue Standard Bullet Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Blue Standard Bullet Skateboard Trucks</p>
                            <span class="price">Rp 600.000</span>
                        </div>
                    </div>
                <!-- 8 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/Independent x Supreme Truck.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">Independent x Supreme Truck</p>
                            <span class="price">Rp 1.500.000</span>
                        </div>
                    </div>
                <!-- 9 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/K5 Grind Out Racism DLK Standard Krux Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">K5 Grind Out Racism DLK Standard Krux Skateboard Trucks</p>
                            <span class="price">Rp 950.000</span>
                        </div>
                    </div>
                <!-- 10 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/K5 Nora By Alexis Standard Krux Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">K5 Nora By Alexis Standard Krux Skateboard Trucks</p>
                            <span class="price">Rp 950.000</span>
                        </div>
                    </div>
                <!-- 11 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/truck/K5 Nora Triangle Standard Krux Skateboard Trucks.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">K5 Nora By Alexis Standard Krux Skateboard Trucks</p>
                            <span class="price">Rp 950.000</span>
                        </div>
                    </div>
            </div>
        </section>

    <!-- product wheels -->
        <section class="product">
            <h2 class="product-category">Wheel</h2>
                <button class="pre-btn"><img src="asset/img/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="asset/img/arrow.png" alt=""></button>
            <div class="product-container">
                
                <!-- 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/wheel/52mm Chrome Core Black Gold 99a Ricta Skateboard Wheels.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">52mm Chrome Core Black Gold 99a Ricta Skateboard Wheels</p>
                            <span class="price">Rp 500.000</span>
                        </div>
                    </div>
                <!-- 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="asset/wheel/53mm Clouds Red 86a Ricta Skateboard Wheels.jpg" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <p class="product-short-des">53mm Clouds Red 86a Ricta Skateboard Wheels</p>
                            <span class="price">Rp 500.000</span>
                        </div>
                    </div>
                <!-- 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="asset/wheel/53mm Elite Hardline 99a OJ Skateboard Wheels.jpg" class="product-thumb" alt="">
                        <button class="card-btn">add to whislist</button>
                    </div>
                    <div class="product-info">
                        <p class="product-short-des">53mm Elite Hardline 99a OJ Skateboard Wheels</p>
                        <span class="price">Rp 500.000</span>
                    </div>
                </div>
                <!-- 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="asset/wheel/54.5mm Mini OG Slime Green Pink 78a Slime Balls Skateboard Wheels.jpg" class="product-thumb" alt="">
                        <button class="card-btn">add to whislist</button>
                    </div>
                    <div class="product-info">
                        <p class="product-short-des">54.5mm Mini OG Slime Green Pink 78a Slime Balls Skateboard Wheels</p>
                        <span class="price">Rp 500.000</span>
                    </div>
                </div>
                <!-- 5 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="asset/wheel/54mm Skate Jawn Keyframe 87a OJ Skateboard Wheels.jpg" class="product-thumb" alt="">
                        <button class="card-btn">add to whislist</button>
                    </div>
                    <div class="product-info">
                        <p class="product-short-des">54mm Skate Jawn Keyframe 87a OJ Skateboard Wheels</p>
                        <span class="price">Rp 500.000</span>
                    </div>
                </div>
                <!-- 6 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="asset/wheel/58mm Shin Sangbongi Original Mini Combo 99a OJ Skateboard Wheels.jpg" class="product-thumb" alt="">
                        <button class="card-btn">add to whislist</button>
                    </div>
                    <div class="product-info">
                        <p class="product-short-des">58mm Shin Sangbongi Original Mini Combo 99a OJ Skateboard Wheels</p>
                        <span class="price">Rp 500.000</span>
                    </div>
                </div>
            </div>
        </section>


    
<script src="home.js"></script>

</body>
</html>