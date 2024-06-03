<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>SkyLink Search</title>
</head>
<body>

<header class="header" id="header">
    <nav class="nav-container">
        <a href="index.php" class="nav-logo">SKYLINK</a>

        <div id="nav-links" class="nav-links-container">
            <ul class="nav-links">
                <li class="nav-li">
                    <a href="index.php" class="nav-item"><span>Home</span></a>
                </li>

                <li class="nav-li">
                    <a href="#" class="nav-item"><span>About</span></a>
                </li>
                <li class="nav-li">
                    <a href="#" class="nav-item"><span>Contact</span></a>
                </li>
            </ul>

            <div id="nav-close" class="nav-close">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>

        <div class="profile-btn-container">
            <button class="profile-btn">
                <img
                        class="profile-btn"
                        src="imgs/profile%20btn.png"
                        alt="Profile"
                />
            </button>

            <div id="nav-toggle" class="nav-toggel">
                <i class="bi bi-list"></i>
            </div>
        </div>
    </nav>
</header>


    <div class="searched-container flex">
        <img class="searched-img" src="imgs/seachedIMG.png" alt="Error">
        <div class="search-panel-titleTXT">
            <h1>Unlock the Sky</h1>
            <p>Enjoy the great experience</p>
        </div>

        <div class="search-Bar flex">
            <div class="vacation-Info-Input">
                <div style="gap: 10px" class="flex">
                    <img class="input-icon" src="imgs/locationIcon.png" alt="">
                    <input class="Search-input location-input" type="text" placeholder="Location">
                </div>
                <p class="search-txt location-txt">Where are you going?</p>

            </div>

            <div class="vacation-Info-Input">
                <div style="gap: 10px" class="flex">
                    <input class="Search-input check-in-input flex" type="date" placeholder="Check in">
                </div>
                <p class="search-txt">Departure</p>
            </div>

            <div class="vacation-Info-Input">
                <div style="gap: 10px" class="flex">
                    <input class="Search-input check-out-input flex" type="date" placeholder="Check in">
                </div>
                <p class="search-txt">Arrival</p>
            </div>

            <div class="search-btn-container flex">
                <button class="search-btn">
                    <a href="#">
                        <img class="search-icon" src="imgs/search-icon.png" alt="??">
                    </a>
                </button>
            </div>
        </div>
    </div>

    <div style="height: 150px"></div>

    <div class="vacations-container flex" >
        <div class="title-searchpage">
            <h1 class="">Places to stay</h1>
        </div>

        <div class="vacation-search-result flex">
            <div class="vacations">
                <a href="vacation-page.php" style="text-decoration: none">
                    <img class="vacation-img" src="imgs/italian-land.jpg" alt="">
                    <div class="vacation-base-info flex">
                        <div class="vacation-name-txt flex">
                            <h3 style="font-weight: 600;">Italian Landscape</h3>
                            <p style="text-align: center; color: #AAAAAA"><img src="imgs/coffee-icon.png" alt="">  Breakfast included</p>
                        </div>
                        <div class="price-vacation" style="color: #57C27D">€129</div>
                    </div>
                </a>
            </div>

            <div class="vacations">
                <a href="vacation-page.php" style="text-decoration: none">
                    <img class="vacation-img" src="imgs/italian-land.jpg" alt="">
                    <div class="vacation-base-info flex">
                        <div class="vacation-name-txt flex">
                            <h3 style="font-weight: 600;">Italian Landscape</h3>
                            <p style="text-align: center; color: #AAAAAA"><img src="imgs/coffee-icon.png" alt="">  Breakfast included</p>
                        </div>
                        <div class="price-vacation" style="color: #57C27D">€129</div>
                    </div>
                </a>
            </div>

            <div class="vacations">
                <a href="vacation-page.php" style="text-decoration: none">
                    <img class="vacation-img" src="imgs/italian-land.jpg" alt="">
                    <div class="vacation-base-info flex">
                        <div class="vacation-name-txt flex">
                            <h3 style="font-weight: 600;">Italian Landscape</h3>
                            <p style="text-align: center; color: #AAAAAA"><img src="imgs/coffee-icon.png" alt="">  Breakfast included</p>
                        </div>
                        <div class="price-vacation" style="color: #57C27D">€129</div>
                    </div>
                </a>
            </div>

        </div>
    </div>

<footer class="footer flex">
    <div>
        <h1 style="color: black">SKYLINK</h1>
    </div>
    <div class="footer-containers flex">
        <a>FAQ</a>
        <a>Support</a>
    </div>
    <div class="footer-containers flex">
        <h3>Follow Us</h3>
        <div class="icons-container flex">
            <i class="bi bi-instagram"></i>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter-x"></i>
        </div>
    </div>
    <div class="footer-containers flex">
        <h3>Newsletter</h3>
        <div class="newsletter-input-container flex">
            <input class="newsletter-input" type="email" placeholder="Enter your email">
            <button class="newsletter-submit flex">
                <i style="color: white" class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</footer>

    <script src="scripts.js"></script>
</body>
</html>