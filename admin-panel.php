<?php
session_start();
if (!isset($_SESSION["loggedUser"])) {
    header("location: index.php");
}
?>
<!doctype html>
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
    <title>SkyLink</title>
</head>
<body>
<?php
include_once('navbar.php');
?>
<div style="height: 170px"></div>

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
                <div class="add-Travel-btn" id="add-travel">
                    <a href="#" style="color: white; text-decoration: none">ADD NEW TRAVEL</a>
                </div>

            </div>
            <hr>
        </section>

        <div id="add-popup" class="login-popup-container">
            <div class="login-content">
                <h2>Add Travel</h2>
                <i id="popup-close3" class="bi bi-x-circle"></i>
                <form action="index.php" method="post">
                    <input type="text" name="add-name" placeholder="Enter a name"/>

                    <input type="text" name="add_discription" placeholder="Enter a discription"/>
                    <input type="text" name="add-price" placeholder="Enter a price"/>
                    <select name="travel-status">
                        <option value="Out of stock">Out of stock</option>
                        <option value="available ">Available</option>
                    </select>
                    <input class="login-submit" name="loginSubmit" type="submit" value="Add"/>
                </form>
            </div>
        </div>

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