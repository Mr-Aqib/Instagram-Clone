<?php
include './config.php';
$Select = "SELECT post.Id AS post_id,post.Caption,post.Image,signup.Id AS signup_id,signup.Username,signup.Fullname FROM post JOIN signup ON post.user_id=signup.Id ORDER BY (post_id) DESC";
$result = mysqli_query($connection, $Select);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="card my-3 ">
    <div class="d-flex py-2 flex-row  justify-content-between">
        <div class="first gap-2 d-flex align-items-center">
            <img class="mx-2 rounded-circle" width="55px" height="55px" src="./images/screenshot2.png" alt="">
            <div class="d-flex flex-column justify-content-center">
                <h6 class="m-0 p-0 fw-bold "><?php
                                                        echo $row['Username'];

                                                        ?></h6>
                <p class="m-0 p-0 text-secondary">Location,Location</p>

            </div>
        </div>
        <div class="mx-2 last d-flex justify-content-center align-items-center">
            <i class="bi bi-three-dots"></i>
        </div>
    </div>
    <a href="./singlepost.php?id=<?php echo $row['post_id'] ?>" class="img mids">
        <img style="object-fit:cover;" class="" width="100%" height="800px"
            src="./postimages/<?php echo $row['Image'] ?>" alt="">
    </a>
    <p class="m-0 p-1 mx-2 caption">Caption: <?php echo $row['Caption'] ?></p>
    <div class="my-1 last d-flex flex-row  justify-content-between">
        <div class="d-flex mx-2 gap-2 align-items-center justify-content-center">
            <div class=" bi bi-heart"></div>
            <div class=" bi bi-chat"></div>
            <i class=" bi bi-share-fill"></i>
        </div>
        <div class="last">
            <div class="bi bi-save mx-2"></div>
        </div>
    </div>
</div>


<?php
    }
}

?>


<div class="card my-3 ">
    <div class="d-flex py-2 flex-row  justify-content-between">
        <div class="first gap-2 d-flex align-items-center">
            <img class="mx-2 rounded-circle" width="55px" height="55px" src="./images/screenshot2.png" alt="">
            <div class="d-flex flex-column justify-content-center">
                <h6 class="m-0 p-0 fw-bold "><?php
                                                echo $_SESSION['Username'];

                                                ?></h6>
                <p class="m-0 p-0 text-secondary">Location,Location</p>
                <p class="m-0 caption">caption</p>
            </div>
        </div>
        <div class="mx-2 last d-flex justify-content-center align-items-center">
            <i class="bi bi-three-dots"></i>
        </div>
    </div>
    <div class="img mids">
        <img style="object-fit:cover;" class="" width="100%" height="800px" src="./images/screenshot4.png" alt="">
    </div>
    <div class="my-1 last d-flex flex-row  justify-content-between">
        <div class="d-flex mx-2 gap-2 align-items-center justify-content-center">
            <div class=" bi bi-heart"></div>
            <div class=" bi bi-chat"></div>
            <i class=" bi bi-share-fill"></i>
        </div>
        <div class="last">
            <div class="bi bi-save mx-2"></div>
        </div>
    </div>
</div>