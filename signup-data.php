<?php
session_start();
include './config.php';
$email = $_POST['e'];
$fullname = $_POST['fn'];
$username = $_POST['un'];
$password = $_POST['pass'];
if ($email == '' || $fullname == '' || $username == '') {
    $_SESSION['field-notset'] = 'Please Enter Above Field for Process';
} else {
    $Insert = "INSERT into Signup (Email,Fullname,Username,Password) Values ('{$email}','{$fullname}','{$username}','{$password}')";
    $result = mysqli_query($connection, $Insert);
}




?>;