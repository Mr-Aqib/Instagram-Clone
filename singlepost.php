<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './Boot-js.php' ?>
</head>

<body>
    <?php
    include './config.php';
    $id = $_GET['id'];
    $Select = "SELECT * FROM Post Where Id=$id";
    $result = mysqli_query($connection, $Select);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <div class="container col-lg-10 my-3">
                <div class="row ">
                    <div class="col-lg-6 ">
                        <div class="d-flex flex-row align-items-center justify-content-end">
                            <img class="rounded-4 border border-4" style="object-fit:cover;" class="" width="80%" height="600px" src="./postimages/<?php echo $row['Image'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 border shadow rounded-3">
                        <div class="d-flex my-3 border flex-column shadow rounded-4 p-1">
                            <div>
                                <img style="object-fit: cover" class=" rounded-circle" width="60px" height="60px" src="./storyimages/user3.avif" alt="">
                            </div>
                            <p class=" mx-3 fw-bold my-1 ">
                                <span class="fw-normal"> Caption:</span> <?php echo $row['Caption'] ?>
                            </p>
                        </div>
                    </div>
                </div>
        <?php
        }
    }
        ?>

</body>

</html>