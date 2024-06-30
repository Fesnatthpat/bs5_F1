<?php

session_start();
require 'config.php';
$minLength = 6;

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_Password'];
}

if (empty($username)) {
    $_SESSION['error'] = "Please enter your username";
    header("location: register.php");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Plwase enter a valid email address";
    header("location: register.php");
}
