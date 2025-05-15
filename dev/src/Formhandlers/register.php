<?=

@include_once('../Database/connection.php');


$firstname = htmlentities($_POST['firstname']);
$lastname = htmlentities($_POST['lastname']);
$city = htmlentities($_POST['city']);
$email = htmlentities($_POST['email']);
$password = htmlentities($_POST['password']);

Database::insert('customers', [
    'firstname' => $firstname,
    'lastname' => $lastname,
    'city' => $city,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT)
]);

exit();

?>