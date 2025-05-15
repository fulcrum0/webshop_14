<?=
@include_once('src/Database/connection.php');

@include_once('template/header.php');

?>

<div class="register-box">
    <div class="register-header">
        <header>Register</header>
    </div>
    <form action="src/Formhandlers/register.php" method="POST">
        <div class="input-box">
            <input
                type="text"
                class="input-field"
                placeholder="First Name"
                autocomplete="off"
                name="firstname"
                required />
        </div>

        <div class="input-box">
            <input
                type="text"
                class="input-field"
                placeholder="Last Name"
                autocomplete="off"
                name="lastname"
                required />
        </div>

        <div class="input-box">
            <input
                type="text"
                class="input-field"
                placeholder="City"
                autocomplete="off"
                name="city"
                required />
        </div>

        <div class="input-box">
            <input
                type="text"
                class="input-field"
                placeholder="Email"
                autocomplete="off"
                name="email"
                required />
        </div>

        <div class="input-box">
            <input
                type="password"
                class="input-field"
                placeholder="Password"
                autocomplete="off"
                name="password"
                required />
        </div>

        <div class="input-submit">
            <button class="submit-btn" id="submit"></button>
            <label for="submit">Register</label>
        </div>
    </form>
</div>

<?=

@include_once('template/footer.php');

?>