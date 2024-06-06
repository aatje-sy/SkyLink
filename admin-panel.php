<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
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
<div style="height: 150px"></div>

<div class="adminPanel-Container flex">

    <nav class="adminpanel-navbar">
        <div class="nav-top-section flex">
            <img src="imgs/profile%20btn.png" alt="profile">
        </div>
        <div class="nav-bottom-section">
            <h3>Orders</h3>
        </div>
    </nav>

    <div class="admin-table-container ">
        <section class="admin-page-Head">
            <div class="flex admin-little-header">
                <h2>Bookings List</h2>
                <div class="add-Travel-btn">
                    <a href="#" style="color: white; text-decoration: none">ADD NEW TRAVEL</a>
                </div>

            </div>
            <hr>
        </section>

        <table>
            <tr class="table-headers">
                <th colspan="2">Name</th>
                <th>TravelID</th>
                <th>Booking</th>
                <th>Tickets</th>
                <th>Price</th>
                <th></th>
            </tr>

            <tr class="vacation-bar">
                <td class="column-sections">
                    <img class="admin-vacation-img" src="imgs/italian-land.jpg" alt="img">
                </td>
                <td class="column-sections">
                    <h3>Manarola Italy</h3>
                </td>
                <td class="column-sections">
                    <p>342</p>
                </td>
                <td class="column-sections">
                    <p>2</p>
                </td>
                <td class="column-sections">
                    <p>5</p>
                </td>
                <td class="column-sections">
                    <p>$99,99</p>
                </td>
                <td class="column-sections flex" style="justify-content: flex-end">
                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/edit-btn.png" alt="">
                        </a>
                    </div>

                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/delete-btn.png" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="vacation-bar">
                <td class="column-sections">
                    <img class="admin-vacation-img" src="imgs/italian-land.jpg" alt="img">
                </td>
                <td class="column-sections">
                    <h3>Manarola Italy</h3>
                </td>
                <td class="column-sections">
                    <p>342</p>
                </td>
                <td class="column-sections">
                    <p>2</p>
                </td>
                <td class="column-sections">
                    <p>5</p>
                </td>
                <td class="column-sections">
                    <p>$99,99</p>
                </td>
                <td class="column-sections flex" style="justify-content: flex-end">
                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/edit-btn.png" alt="">
                        </a>
                    </div>

                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/delete-btn.png" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="vacation-bar">
                <td class="column-sections">
                    <img class="admin-vacation-img" src="imgs/italian-land.jpg" alt="img">
                </td>
                <td class="column-sections">
                    <h3>Manarola Italy</h3>
                </td>
                <td class="column-sections">
                    <p>342</p>
                </td>
                <td class="column-sections">
                    <p>2</p>
                </td>
                <td class="column-sections">
                    <p>5</p>
                </td>
                <td class="column-sections">
                    <p>$99,99</p>
                </td>
                <td class="column-sections flex" style="justify-content: flex-end">
                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/edit-btn.png" alt="">
                        </a>
                    </div>

                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/delete-btn.png" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="vacation-bar">
                <td class="column-sections">
                    <img class="admin-vacation-img" src="imgs/italian-land.jpg" alt="img">
                </td>
                <td class="column-sections">
                    <h3>Manarola Italy</h3>
                </td>
                <td class="column-sections">
                    <p>342</p>
                </td>
                <td class="column-sections">
                    <p>2</p>
                </td>
                <td class="column-sections">
                    <p>5</p>
                </td>
                <td class="column-sections">
                    <p>$99,99</p>
                </td>
                <td class="column-sections flex" style="justify-content: flex-end">
                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/edit-btn.png" alt="">
                        </a>
                    </div>

                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/delete-btn.png" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="vacation-bar">
                <td class="column-sections">
                    <img class="admin-vacation-img" src="imgs/italian-land.jpg" alt="img">
                </td>
                <td class="column-sections">
                    <h3>Manarola Italy</h3>
                </td>
                <td class="column-sections">
                    <p>342</p>
                </td>
                <td class="column-sections">
                    <p>2</p>
                </td>
                <td class="column-sections">
                    <p>5</p>
                </td>
                <td class="column-sections">
                    <p>$99,99</p>
                </td>
                <td class="column-sections flex" style="justify-content: flex-end">
                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/edit-btn.png" alt="">
                        </a>
                    </div>

                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/delete-btn.png" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="vacation-bar">
                <td class="column-sections">
                    <img class="admin-vacation-img" src="imgs/italian-land.jpg" alt="img">
                </td>
                <td class="column-sections">
                    <h3>Manarola Italy</h3>
                </td>
                <td class="column-sections">
                    <p>342</p>
                </td>
                <td class="column-sections">
                    <p>2</p>
                </td>
                <td class="column-sections">
                    <p>5</p>
                </td>
                <td class="column-sections">
                    <p>$99,99</p>
                </td>
                <td class="column-sections flex" style="justify-content: flex-end">
                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/edit-btn.png" alt="">
                        </a>
                    </div>

                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/delete-btn.png" alt="">
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="vacation-bar">
                <td class="column-sections">
                    <img class="admin-vacation-img" src="imgs/italian-land.jpg" alt="img">
                </td>
                <td class="column-sections">
                    <h3>Manarola Italy</h3>
                </td>
                <td class="column-sections">
                    <p>342</p>
                </td>
                <td class="column-sections">
                    <p>2</p>
                </td>
                <td class="column-sections">
                    <p>5</p>
                </td>
                <td class="column-sections">
                    <p>$99,99</p>
                </td>
                <td class="column-sections flex" style="justify-content: flex-end">
                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/edit-btn.png" alt="">
                        </a>
                    </div>

                    <div class="admin-button">
                        <a href="#">
                            <img src="imgs/delete-btn.png" alt="">
                        </a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>