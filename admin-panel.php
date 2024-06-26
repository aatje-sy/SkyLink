<?php
require_once('connect.php');
/**
 * @var $pdo ;
 */
session_start();
if (!isset($_SESSION["loggedUser"])) {
    header("location: index.php");
}
include_once("crud.php")
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
                    <p style="color: white; text-decoration: none">ADD NEW TRAVEL</p>
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
                            <input class="text-input price-text" type="text" name="add-price"
                                   placeholder="Enter a price"/>
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
            foreach ($stmtRead as $row) { ?>
                <tr class="vacation-bar">
                    <td class="column-sections">
                        <img class="admin-vacation-img" src="imgs/<?php echo $row['main_img'] ?>" alt="img">
                    </td>
                    <td class="column-sections">
                        <h3><?php echo $row['flight_name'] ?></h3>
                    </td>
                    <td class="column-sections">
                        <p><?php echo $row['id'] ?></p>
                    </td>
                    <td class="column-sections">
                        <p>0</p>
                    </td>
                    <td class="column-sections">
                        <p>0</p>
                    </td>
                    <td class="column-sections">
                        <?php echo $row['price'];
                        ?>
                    </td>

                    <!--             Crud update button-->
                    <td class="column-sections flex" style="justify-content: flex-end">
                        <div class="admin-button">
                            <button class="delete-btn edit-btn" type="button" onclick="displayEditPopup(<?php echo $row['id'] ?>, '<?php echo $row['flight_name']?>', '<?php echo $row['discription']?>', <?php echo $row['price']?>)">
                                <img src="imgs/edit-btn.png" alt="">
                            </button>
                        </div>
                    </td>


                    <!--                 Crud delete submit button-->
                    <td>
                        <div class="admin-button">
                            <form action="admin-panel.php" method="post">
                                <input type="hidden" name="deleteId" value="<?php echo $row['id']; ?>">
                                <button class="delete-btn" type="submit" name="deleteSubmit"">
                                    <img src="imgs/delete-btn.png" alt="Delete icon">
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php } //*--->while loop end<-----*//?>
        </table>
    </div>
</div>
<!--Edit Popup-->
<?php
$sqlEdit = "SELECT * FROM flights";
$stmtEdit = $pdo->query($sqlEdit);
foreach ($stmtEdit as $row2) { ?>
<div id="edit-popup" class="add-popup-container"">
<div class="add-trip-content">
    <h2>Edit Trip</h2>
    <i id="edit-popup-close" class="bi bi-x-circle" onclick="closeEditPopup()"></i>
    <form action="admin-panel.php" method="post">
        <div class="add-trip-info-container">
            <input type="hidden" name="edit-id" id="edit-id" value="">
            <input class="text-input" type="text" id="flightName" value="<?php echo $row2['flight_name']?>" name="update-name"/>
            <input class="text-input" type="text" id="description" value="<?php echo $row2['discription']?>" name="update-info"/>
            <div class="price-and-status-container">
                <input class="text-input price-text" id="price" type="text" value="<?php echo $row2['price']?>" name="update-price"/>
                <select class="text-input trip-status" name="travel-status">
                    <option value="Out of stock">Out of stock</option>
                    <option value="available ">Available</option>
                </select>

            </div>
            <input class="add-trip-submit" name="updateSubmit" type="submit" value="Edit"/>
        </div>
    </form>
</div>

</body>
<?php } //*--->while loop end<-----*//?>
</html>