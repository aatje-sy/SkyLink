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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="imgs/tab-logo.png"/>
    <link rel="stylesheet" href="style.css"/>
    <script src="scripts.js" defer></script>
    <title>SkyLink</title>
</head>
<body>

<!--navbar-->
<header class="header" id="header">
    <nav class="nav-container">
        <a href="index.php" class="nav-logo">SKYLINK</a>
        <div id="nav-links" class="nav-links-container">
            <ul class="nav-links">
                <li class="nav-li">
                    <a href="index.php" class="nav-item"><span>Home</span></a>
                </li>

                <li class="nav-li">
                    <a href="searchedPage.php" class="nav-item"><span>Trips</span></a>
                </li>
                <li class="nav-li">
                    <a href="contact.php" class="nav-item"><span>Contact</span></a>
                </li>
            </ul>

            <div id="nav-close" class="nav-close">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>

        <div class="profile-btn-container">
            <img id="profile-btn"
                 class="profile-btn"
                 src="imgs/profile%20btn.png"
                 alt="Profile"
                 onclick="toggelMenu()"
            />
        </div>
        <?php if (isset($_SESSION["loggedUser"])) { ?>
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="imgs/profile btn.png" alt="profile photo"/>
                        <h3><?php echo "Welcome " . $_SESSION["loggedUser"]; ?></h3>
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
                    <div class="account-btn-container">
                        <?php if (isset($_SESSION["admin_is_logged"])) { ?>
                            <button class="account-btn">
                                <a href="admin-panel.php" class="sub-menu-login">
                                    <p>ADMIN</p>
                                </a>
                            </button>
                        <?php }
                        if (isset($_SESSION["admin_logged_out"])) { ?>
                            <button class="account-btn">
                                <a href="user.php" class="sub-menu-login">
                                    <p>Account</p>
                                </a>
                            </button>
                        <?php } ?>
                        <button class="login-btn logout">
                            <a href="logout.php" class="sub-menu-logout">
                                <p>Logout</p>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div id="nav-toggle" class="nav-toggel">
            <i class="bi bi-list"></i>
        </div>
    </nav>
</header>
</body>