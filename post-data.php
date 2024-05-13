<?php
session_start();
include './config.php';
$current_url = $_SERVER['HTTP_REFERER'];
$caption = $_POST['caption'];
$image = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];
$postid = $_SESSION['Id'];
move_uploaded_file($tempname, './postimages/' . $image);
$insert = "INSERT into Post (Caption,Image,user_id) VALUE ('{$caption}','{$image}', $postid)";
$result = mysqli_query($connection, $insert);
if ($result) {
    $_SESSION['Post-Uploaded'] = 'Your Post has been sucessfully uploaded';
    header("Location: $current_url");
} else {
    $_SESSION["Post-upload-err"] = "Eroor in Uploading Post";
}
