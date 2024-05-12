<?php
session_start();
include './config.php';
$caption = $_POST['caption'];
$image = $_FILES['image']['name'];
$temp_name_img = $_FILES['image']['tmp_name'];
move_uploaded_file($temp_name_img, './storyimages/' . $image);
$insert = "INSERT into Story (Caption,Image) VALUES ('{$caption}','{$image}')";
$result = mysqli_query($connection, $insert) or die(mysqli_error($conn));
if ($result) {
    $_SESSION['story-uploaded'] = "Your Story Has Been Uploaded";
    header("Location: $base_url/login-check.php");
}
