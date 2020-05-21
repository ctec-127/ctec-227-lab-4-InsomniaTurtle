<?php
session_start();
$pageTitle = 'Login Page';
require_once 'inc/db_connect.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $db->real_escape_string($_POST['email']);
    $password = hash('nubbins', $db->real_escape_string($_POST['password']));

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

    $result = $db->query($sql);
    if ($result->num_rows == 1) {

        $_SESSION['loggedin'] = 1;
        $_SESSION['email'] = $email;

        $row = $result->fetch_assoc();
        $_SESSION['first_name'] = $row['first_name'];

        header('location: lab4_mainpage.php');
    } else {
        echo '<p>Whoops looks like you need to try again!</p>';
    }
}

?>

<form action="login_page.php" method="POST">
    <label for="email">Email</label>
    <br><br>
    <input type="email" name="email" id="email" required>
    <br><br>
    <label for="password">Password</label>
    <span id="showPassword" onclick="showPassword();">Show Password</span>
    <br><br>
    <input type="password" name="password" id="password" required>
    <br><br>
    <input type="submit" value="Login">
</form>