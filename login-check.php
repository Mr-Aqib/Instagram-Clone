<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php session_start();
    include './Boot-js.php';
    $base_url = "http://localhost/instagram2";
    if (isset($_SESSION["Username"])) {
    ?>

    <?php
        } else if (!isset($_SESSION['Username'])) {
            header("Location: $base_url/signup-form.php");
        }
            ?>
</body>

</html>