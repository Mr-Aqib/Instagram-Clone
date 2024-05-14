<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './Boot-js.php' ?>
</head>

<body class="bg-secondary">
    <?php
    include './config.php';
    $id = $_GET['id'];
    $Select = "SELECT post.Id AS post_id,post.Image,post.Caption,signup.Id AS signup_id,signup.Fullname,signup.Username,comment.Id AS comment_id,comment.signup_id,comment.post_id,comment.Comment From comment JOIN signup ON comment.signup_id=signup.Id JOIN post ON comment.post_id=post.Id Where post.Id =$id";
    $result = mysqli_query($connection, $Select);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="container  col-lg-10 my-3">
        <div class="row ">
            <div class="col-lg-6 ">
                <div class="d-flex flex-row align-items-center justify-content-end">

                    <img class="rounded-4 border border-4" style="object-fit:cover;" class="" width="80%" height="600px"
                        src="./postimages/<?php echo $row['Image'] ?>" alt="">

                </div>
            </div>
            <div class="col-lg-5 bg-white  shadow rounded-3">
                <div class="d-flex my-3  flex-column shadow rounded-4 ">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row align-items-center gap-2">
                            <div>
                                <img style="object-fit: cover" class=" rounded-circle" width="60px" height="60px"
                                    src="./storyimages/user3.avif" alt="">
                            </div>
                            <h5><?php echo $row['Username'] ?></h5>
                        </div>
                        <p class=" mx-3 fw-bold my-1 ">
                            <span class="fw-normal"> Caption:</span> <?php echo $row['Caption'] ?>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="comment">
                    <?php
                            $Select = "SELECT post.Id AS post_id,post.Image,post.Caption,signup.Id AS signup_id,signup.Fullname,signup.Username,comment.Id AS comment_id,comment.signup_id,comment.post_id,comment.Comment From comment JOIN signup ON comment.signup_id=signup.Id JOIN post ON comment.post_id=post.Id Where post.Id =$id";
                            $result = mysqli_query($connection, $Select);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                    <h6 class="mx-3 my-2 p-1 "> <?php echo $row['Username'] ?> : <span
                            class="fw-normal"><?php echo $row['Comment']  ?></span>
                    </h6>
                    <hr class="m-0 p-0">
                    <?php
                                }
                            }

                            ?>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    }
    ?>

</body>

</html>