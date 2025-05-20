<?php
@include_once(__DIR__ . '/../Helpers/auth.php');
@include_once(__DIR__ . '/../Helpers/message.php');
@include_once(__DIR__ . '/../Database/connection.php');

$is_error = false;

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    setError('registration-error', 'To be able to become client, the form must be filled. ');
    header('Location: ../../register.php');
    exit();
}

$oldValues = [];

if (!isset($_POST['firstname']) || empty($_POST['firstname'])) {
    setError('firstname-mandatory', 'Fill your first name ...');
    $is_error = true;
} else
    setOldValue('firstname', $_POST['firstname']);

if (!isset($_POST['lastname']) || empty($_POST['lastname'])) {
    setError('lastname-mandatory', 'Fill your last name...');
    $is_error = true;
} else
    setOldValue('lastname', $_POST['lastname']);

if (!isset($_POST['city']) || empty($_POST['city'])) {
    setError('city-mandatory', 'Fill your city...');
    $is_error = true;
} else
    setOldValue('city', $_POST['city']);

if (!isset($_POST['email']) || empty($_POST['email'])) {
    setError('email-mandatory', 'Fill your email...');
    $is_error = true;
} else
    setOldValue('email', $_POST['email']);

if (!isset($_POST['password']) || empty($_POST['password'])) {
    setError('password-mandatory', 'Fill your password...');
    $is_error = true;
} else
    setOldValue('password', $_POST['password']);

if ($is_error) {
    setError('registration-error', 'All inputs must be filled...');
    header('Location: ../../register.php');
    exit();
}

clearOldValues();

$firstname = htmlentities($_POST['firstname']);
$lastname = htmlentities($_POST['lastname']);
$city = htmlentities($_POST['city']);
$email = htmlentities($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$result = Database::insert('customers', [
    'firstname' => $firstname,
    'lastname' => $lastname,
    'city' => $city,
    'email' => $email,
    'password' => $password
]);

header('Location: ../../login.php');
exit();
