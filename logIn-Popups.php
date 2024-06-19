<?php

require_once('connect.php');
include_once("login-logic.php");

/**
 * @var $pdo ;
 */
if (!isset($_SESSION["loggedUser"])) { ?>
    <!--    login popup-->
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