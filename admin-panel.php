<?php
require_once('connect.php');
/**
 * @var $pdo ;
 */
session_start();
if (!isset($_SESSION["loggedUser"])) {
    header("location: index.php");
}
include_once ("crud.php")
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

<!--     add trip popup-->
        <div id="add-popup" class="add-popup-container">
            <div class="add-trip-content">
                <h2>Add Travel</h2>
                <i id="popup-close3" class="bi bi-x-circle"></i>
                <form action="admin-panel.php" method="post">
                    <div class="add-trip-info-container">
                        <input class="text-input" type="text" name="add-name" placeholder="Enter a name"/>
                        <input class="text-input" type="text" name="add-info" placeholder="Enter a discription"/>
                        <div class="price-and-status-container">
                            <input class="text-input price-text" type="text" name="add-price" placeholder="Enter a price"/>
                            <select class="text-input trip-status" name="travel-status">
                                <option value="Out of stock">Out of stock</option>
                                <option value="available ">Available</option>
                            </select>
                        </div>
                    </div>
<!--                    <input class="upload-input" type="file" data-allow-reorder="true"-->
<!--                           data-max-file-size="3MB" multiple data-max-file="3">-->
                    <input class="add-trip-submit" name="addSubmit" type="submit" value="Add"/>
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
<!--            crud read-->
            <?php
            $sqlRead = "SELECT * FROM flights";
            $stmtRead = $pdo->query($sqlRead);
            while ($row = $stmtRead->fetch()) { ?>
            <tr class="vacation-bar">
                <td class="column-sections">
                    <img class="admin-vacation-img" src="imgs/italian-land.jpg" alt="img">
                </td>
                <td class="column-sections">
                    <h3><?php echo $row['flight_name']?></h3>
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
                    <p> <?php
                        echo $row['price'];
                        ?> </p>
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
            <?php } //*--->while loop end<-----*//?>
        </table>
    </div>
</div>

</body>
</html>