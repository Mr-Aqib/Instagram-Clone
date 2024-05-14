<?php
include './config.php';
$current_url = $_SERVER['HTTP_REFERER'];
session_start();
$postid = $_POST['postid'];
$comment = $_POST['comment'];
$signupid = $_SESSION['Id'];
$Select = "INSERT into comment (comment,post_id,signup_id) VALUES ('{$comment}',$postid,$signupid)";
mysqli_query($connection, $Select) or die(mysqli_error($connection));
header("Location: $current_url");
