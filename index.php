<?php
require_once('connect.php');
/**
 * @var $pdo ;
 */

//inloggen
session_start();
if (isset($_POST["loginSubmit"])) {
    $loginEmail = $_POST["loginEmail"];
    $loginPassword = $_POST["loginPassword"];
    $sqlLogin = "SELECT * FROM users WHERE email = '$loginEmail'";
    $resultLogin = $pdo->query($sqlLogin);
    $fetchLogin = $resultLogin->fetch();
    if ($fetchLogin) {
        if (password_verify($loginPassword, $fetchLogin['password'])) {
            $_SESSION["loggedUser"] = "yes";
            header("location: users-page.php");

        } else {
            echo "Wrong password";
        }
    } else {
        echo "This email does not exist";
    }
}
?>


<!--index pagian-->
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
<?php include_once("Nav.php") ?>
<!--    login popup-->
<?php if (!isset($_SESSION["loggedUser"])) { ?>
    <div id="login-popup" class="login-popup-container">
        <div class="login-content">
            <h2>Welcome back 👋</h2>
            <i id="popup-close" class="bi bi-x-circle"></i>
            <form action="index.php" method="post">
                <input type="text" name="loginEmail" placeholder="Enter your email"/>

                <input type="password" name="loginPassword" placeholder="Enter your password"/>

                <input class="login-submit" name="loginSubmit" type="submit" value="Login"/>
            </form>

            <a class="forgot-pass" href="#">
                <p>Forgot password?</p>
            </a>
            <div class="register-container">
                <p>Not a Member? <a id="register-link" class="register-link" href="#">Register now</a></p>
            </div>
        </div>
    </div>
<?php } ?>
<!--  register popup-->
<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['repeat_password'];
    //    password security
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($passwordRepeat)) {
        array_push($errors, "All Fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Please enter a valid email address");
    }
    if (strlen($password) < 6) {
        array_push($errors, "Password must be at least 6 characters long");
    }
    if ($password != $passwordRepeat) {
        array_push($errors, "Passwords do not match");
    }

    $sqlDoubleEmail = "SELECT email FROM users WHERE email = '$email'";
    $resultDoubleEmail = $pdo->query($sqlDoubleEmail);
    $rowDoubleEmail = $resultDoubleEmail->fetch(PDO::FETCH_ASSOC);
    if ($rowDoubleEmail > 0) {
        array_push($errors, "Email already exists");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error . "<br/>";
        }
    } else {

// de gebruiker wordt toegevoegd aan de database
        $sql = "INSERT INTO users (name, lastName, email, password) VALUES (:name, :lastName, :email, :password)";
        $stmt = $pdo->prepare($sql);
        if ($stmt) {
            $stmt->bindParam(":name", $firstname, PDO::PARAM_STR);
            $stmt->bindParam(":lastName", $lastname, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $passwordHash, PDO::PARAM_STR);
            $stmt->execute();
            echo "New record created successfully";
        } else {
            die("something went wrong");
        }

    }
}
?>


<div id="register-popup" class="login-popup-container">
    <div class="login-content">
        <h2>New account</h2>
        <i id="popup-close2" class="bi bi-x-circle"></i>
        <form action="#" method="post">
            <div class="register-info-container">
                <input type="text" name="firstname" placeholder="First name">
                <input type="text" name="lastname" placeholder="Last name">
            </div>

            <input type="text" name="email" placeholder="Enter your email"/>
            <input type="password" name="password" placeholder="Enter your password"/>
            <input type="password" name="repeat_password" placeholder="Confirm your password"/>

            <input class="login-submit" name="submit" type="submit" value="Create account"/>
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
