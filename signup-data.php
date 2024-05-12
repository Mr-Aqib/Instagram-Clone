<?php
session_start();
include './config.php';
$current_url = $_SERVER['HTTP_REFERER'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
if ($email == '' || $fullname == '' || $username == '' || $password == '') {
    $_SESSION['field-notset'] = 'Fill All Fields';
    header("Location: $current_url");
} else {
    $insert = "INSERT into Signup (Email,Fullname,Username,Password) VALUES ('{$email}','{$fullname}','{$username}','{$password}')";
    mysqli_query($connection, $insert);
    header("Location: $current_url");
}
