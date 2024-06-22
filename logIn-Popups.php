<?php

require_once('connect.php');

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

            <a id="forgot-pass-link" class="forgot-pass" href="#">
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


        <div class="register-container">
            <p>Already a Member? <a id="login-link" class="register-link" href="#">Login</a></p>
        </div>
    </div>
</div>
<!--forgot pass popup-->
<!--<div id="forgot-pass-popup" class="login-popup-container">-->
<!--    <div class="login-content forgot-pass-popup">-->
<!--        <h2>Forgot Password?</h2>-->
<!--        <i id="forgot-pass-close" class="bi bi-x-circle"></i>-->
<!--        <form action="send-pass-reset.php" method="post">-->
<!--            <input type="text" name="forgotEmail" placeholder="Enter your email"/>-->
<!--            <input class="login-submit" name="forgotSubmit" type="submit" value="Send"/>-->
<!--        </form>-->
<!--        <div class="register-container">-->
<!--            <p>Already a Member? <a id="login-link" class="register-link" href="#">Login</a></p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<script src="scripts.js"></script>
