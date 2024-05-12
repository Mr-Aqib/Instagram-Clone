<?php
include './config.php';
$Select = "SELECT * FROM Story";
$result = mysqli_query($connection, $Select);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div>
            <img style="object-fit: cover" class=" border  shadow mx-3 rounded-circle" width="60px" height="60px" src="./storyimages/<?php echo $row['Image'] ?>" alt="">
        </div>
<?php
    }
}
