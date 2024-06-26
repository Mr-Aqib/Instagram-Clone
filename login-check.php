<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ::-webkit-scrollbar {
            width: 4px;
            height: 5px;
            cursor: grab;
        }

        ::-webkit-scrollbar-thumb {
            cursor: grab;
            background: linear-gradient(to right, red, purple, orange);

        }
    </style>
</head>

<body>

    <?php session_start();
    include './Boot-js.php';
    $base_url = "http://localhost/instagram2";



    if (isset($_SESSION['Welcome'])) {
    ?>
        <div class="flash text-center  text-white w-25 " style="position:fixed; top:0; right:0; background:linear-gradient(to right, red,orange,purple);margin-left:auto; transition:all .3s">
            <?php echo $_SESSION['Welcome'] ?>
        </div>
    <?php
    } else if (!isset($_SESSION['Username']) && !isset($_SESSION['Username'])) {
        header("Location: $base_url/signup-form.php");
    }

    if (isset($_SESSION["story-uploaded"])) {
    ?>
        <div class="flash p-2 rounded-3 text-center  text-white w-25 " style="position:fixed; top:0; right:0; background:linear-gradient(to right, red,orange,purple);margin-left:auto; transition:all .3s">
            <?php echo $_SESSION['story-uploaded'] ?>
        </div>
    <?php
    }
    if (isset($_SESSION["Post-Uploaded"])) {
    ?>
        <div class="flash2 p-2 rounded-3 text-center  text-white w-25 " style="position:fixed; top:0; right:50; background:linear-gradient(to right, red,orange,purple);margin-left:auto; transition:all .3s">
            <?php echo $_SESSION['Post-Uploaded'] ?>
        </div>
    <?php
    }
    ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2 py-3 d-flex flex-column justify-content-between  col-5 p-0 shadow" style="height: 100vh;">
                <?php include './sidebar.php' ?>
            </div>
            <div class="col-lg-7">
                <div class="container col-lg-9" style="height:100vh; overflow-y:auto">
                    <div style="height:13vh; overflow-x:auto" class="card  py-2 my-1 gap-1 d-flex flex-row">
                        <?php include './storybar.php' ?>
                    </div>
                    <div style="text-decoration:none; height:85vh; overflow-x:auto">
                        <?php include './post-section.php' ?>
                    </div>
                </div>
            </div>
        </div>
        <a href="./logout-data.php">logout</a>
    </div>


</body>
<script>
    let flash = document.querySelector('.flash')
    setTimeout(() => {
        flash.style.transform = 'translateX(100%)'
    }, 2000);
    let flash2 = document.querySelector('.flash2')
    setTimeout(() => {
        flash2.style.transform = 'translateX(-100%)'
    }, 2000);
    <?php
    unset($_SESSION['Welcome']);
    unset($_SESSION['story-uploaded']);
    unset($_SESSION['Post-Uploaded']);
    // unset($_SESSION['story-uploaded']);
    ?>
</script>

</html>