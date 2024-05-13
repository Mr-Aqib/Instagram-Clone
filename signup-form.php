<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./Boot-js.php" ?>
    <title>Sign up . Instagram</title>
    <style>
        input::placeholder {
            color: black;
            font-size: 0.8rem;
        }

        input {
            margin: 5px 0px
        }

        input {
            background-color: #FAFAFA !important;
        }

        @media only screen and (max-width:600px) {

            .upperdiv,
            .lastdiv,
            .middle-div {
                width: 100% !important;
                border: none !important;
            }

        }
    </style>
</head>

<body>
    <div class="container col-lg-7   ">
        <div class="upperdiv my-3  border  mx-auto" style="width: 350px;padding:10px 2.9rem">
            <img class="mx-auto d-block" width="180px" src="./images/insta-logo.png" alt="">
            <p class="" style="font-weight:bold; font-size:14px; color:#737373; text-align: center">Sign up to see
                photos and videos from your friends.</p>
            <button class=" d-flex align-items-center justify-content-center btn btn-primary  mx-auto d-block px-3 " style="background:#0095F6">
                <img class="m-0" width="8%" src="./images/whitefb-logo.png" alt="">
                <a href="" class="mx-2 text-white" style="text-decoration:none;font-size:14px; font-weight:bold">Log in
                    with Facebook</a>
            </button>
            <div class="my-3 d-flex align-items-center justify-content-center gap-3 ">
                <hr style="width: 100px;">
                <p class="m-0" style="font-size:12px;font-weight:bold; color:#737373">OR</p>
                <hr style="width: 100px">
            </div>
            <form action="./signup-data.php" method="POST">
                <input type="email" name="email" placeholder="Mobile number or email address" id="" class="form-control rounded-0">

                <input type="text" name="fullname" placeholder="Full Name" id="" class="form-control rounded-0">
                <input type="text" name="username" placeholder="Username" id="" class="form-control rounded-0">
                <input type="password" name="password" placeholder="Password" id="" class="form-control rounded-0">
                <?php
                session_start();
                if (isset($_SESSION['field-notset'])) {
                    echo "<p class='text-center fw-bold text-danger'  style='font-size:13px'>
                    {$_SESSION['field-notset']} 
                    </p>";
                }
                unset($_SESSION['field-notset']);

                ?>

                <p class="my-3 text-center" style="color:#737373; font-size: 65%;">People who use our service may have
                    uploaded your contact information to Instagram. <a style="color:#00376B; text-decoration: none;" href="">Learn more</a> </p>
                <p class="my-3 text-center" style=" color:#737373; font-size: 71%;">By signing up, you agree to our <a style="text-decoration: none;color:#00376B" href="">Terms</a> ,
                    <a style="text-decoration: none;color:#00376B" href="">Privacy Policy</a> and <a style="text-decoration: none;color:#00376B" href="">Cookies Policy.</a>
                </p>
                <button class="my-3 btn w-100 text-white" style="background-color:#4CB5F9;font-size:14px; font-weight:bold">Sign Up</button>
            </form>
        </div>
        <div class="middle-div my-3  border  mx-auto" style="width: 350px;padding:1.4rem">
            <p style="font-size: 14px;" class=" d-block text-center m-0">Have an account? <a href="./home.php" style="font-size:15px; text-decoration:none;font-weight:bold;color:#0095F7"> Log in</a></p>
        </div>
        <div class="lastdivs my-3  mx-auto" style="width: 350px;padding:10px 2.9rem">
            <p style="font-size:15px" class="text-center">Get the App.</p>
            <div class="d-flex gap-2 justify-content-center">
                <img width="45%" src="./images/playstore-logo.png" alt="">
                <img width="45%" src="./images/microsoft-logo.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>