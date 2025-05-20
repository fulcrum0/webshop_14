<?php
@include_once(__DIR__ . '/src/Helpers/auth.php');
@include_once(__DIR__ . '/src/Helpers/message.php');

include_once('template/header.php');
?>
<form action="src/Formhandlers/login.php" method="POST">
    <div class="login-box">
        <div class="login-header">
            <header>Login</header>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Email" autocomplete="off" required name="email">
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Password" autocomplete="off" required name="password">
        </div>
        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Sign In</label>
        </div>
        <div class="sign-up-link">
            <p>Don't have account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</form>
<script src="js/script.js"></script>
</body>

<?php
include_once('template/footer.php');
