<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
            rel="stylesheet"
    />
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="icon" type="image/x-icon" href="imgs/tab-logo.png"/>
    <link rel="stylesheet" href="style.css"/>
    <script src="scripts.js" defer></script>
    <title>SkyLink</title>
</head>
<body>

<!--navbar-->
<header class="header" id="header">
    <nav class="nav-container">
        <a href="index.html" class="nav-logo">SKYLINK</a>

        <div id="nav-links" class="nav-links-container">
            <ul class="nav-links">
                <li class="nav-li">
                    <a href="index.html" class="nav-item"><span>Home</span></a>
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
            <img
                    class="profile-btn"
                    src="imgs/profile%20btn.png"
                    alt="Profile"
                    onclick="toggelMenu() "
            />
        </div>

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="imgs/profile btn.png" alt="profile photo"/>
                    <h3>Customer name</h3>
                </div>
                <hr/>

                <a href="#" class="sub-menu-link">
                    <i class="bi bi-chat-right-heart"></i>
                    <p>Wish List</p>
                </a>

                <a href="#" class="sub-menu-link">
                    <i class="bi bi-house-door"></i>
                    <p>Bookings</p>
                </a>

                <div class="login-btn-container">
                    <button class="login-btn" id="open-login">
                        <a href="#" class="sub-menu-login">
                            <p>Account</p>
                        </a>
                    </button>
                    <button class="login-btn logout">
                        <a href="#" class="sub-menu-logout">
                            <p>Logout</p>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div id="nav-toggle" class="nav-toggel">
            <i class="bi bi-list"></i>
        </div>
    </nav>
</header>
<!--    login popup-->
<div id="login-popup" class="login-popup-container">
    <div class="login-content">
        <h2>Welcome back 👋</h2>
        <i id="popup-close" class="bi bi-x-circle"></i>
        <form action="#" method="post">
            <input type="text" placeholder="Enter your email"/>

            <input type="password" placeholder="Enter your password"/>

            <input class="login-submit" type="submit" value="Login"/>
        </form>

        <a class="forgot-pass" href="#">
            <p>Forgot password?</p>
        </a>
        <div class="register-container">
            <p>Not a Member? <a id="register-link" class="register-link" href="#">Register now</a></p>
        </div>
    </div>
</div>
<!--  register popup-->
<div id="register-popup" class="login-popup-container">
    <div class="login-content">
        <h2>New account</h2>
        <i id="popup-close2" class="bi bi-x-circle"></i>
        <form action="#" method="post">
            <div class="register-info-container">
                <input type="text" placeholder="First name">
                <input type="text" placeholder="Last name">
            </div>

            <input type="text" placeholder="Enter your email"/>

            <input type="password" placeholder="Enter your password"/>

            <input class="login-submit" type="submit" value="Create account"/>
        </form>

        <a class="forgot-pass" href="#">
            <p>Forgot password?</p>
        </a>
        <div class="register-container">
            <p>Not a Member? <a class="register-link" href="#">Register now</a></p>
        </div>
    </div>
</div>

<!--index page start-->

<div class="searched-container flex">
    <img class="searched-img" src="imgs/index-page-bg.jpg" alt="Error">
    <div class="search-panel-titleTXT">
        <h1>Unlock the sky with SKYLINK</h1>
        <p>Enjoy the great experience</p>
    </div>

    <div class="search-Bar flex">
        <div class="vacation-Info-Input">
            <div style="gap: 10px" class="flex">
                <img class="input-icon" src="imgs/locationIcon.png" alt="red houses and a mountain in the fog">
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

<!--Index content1 Live anywhere-->
<section class="live-anywhere-container">
    <div class="live-anywhere">
        <h3>Live anywhere</h3>
        <p>Keep calm & travel on</p>
        <div class="vacation-card-container">
            <div class="vacation-card">
                <img src="imgs/Mountain-img.png" alt="mountain image">
                <div class="info-card">
                    <h4>Italian Landscape</h4>
                    <div class="vacation-card-details">
                        <i class="bi bi-cup-hot-fill"></i>
                        <p>Breakfast included</p>
                    </div>
                    <p class="card-price">€299</p>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>