<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './Boot-js.php';
    session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <style>
        input {
            background-color: #FAFAFA !important;
        }

        input[type='password'] {

            box-shadow: 0 0 0 0 !important;
        }

        input::placeholder {
            color: black;
            font-size: 0.8rem;
        }

        .sign-in-btn {
            background-color: #4CB5F9;
            outline: none;
            border: none;
            font-size: 15px;
            font-weight: bold;
        }

        .or-p {
            font-size: 14px;
            font-weight: bold;
            color: #737373 !important;
        }

        .loginfb-a {
            color: #385185;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .forgert-a {
            text-decoration: none;
            color: #00376B !important;
            font-size: 13px;

        }

        .upper-div {
            padding: 40px;
        }

        .middle-a {
            font-size: 14px;
        }

        .middle-p {
            font-size: 15px;
        }

        .last-a {
            font-size: 15px;
        }

        .imgs {
            top: 1.5rem;
            right: 4.35rem;
            width: 51.7%;
            transition: all .9s;


        }

        @media only screen and (max-width:600px) {
            .img-sec {
                display: none !important;
            }

        }
    </style>
</head>

<body>
    <div class="container row mx-auto my-5   col-lg-8">
        <!-- Images device-width -->
        <div class="col-lg-6 col-9 d-flex
         position-relative img-sec">
            <img width="100%" src="./images/home-phones.png" alt="">
            <img class="imgs position-absolute" src="./images/screenshot1.png" alt="">
            <img class="imgs position-absolute" src="./images/screenshot2.png" alt="">
            <img class="imgs position-absolute" src="./images/screenshot3.png" alt="">
            <img class="imgs position-absolute" src="./images/screenshot4.png" alt="">
        </div>
        <!-- Home-login-Div -->
        <div class="col-lg-5  px-4 right-sec d-flex flex-column gap-3 ">
            <div class="upper-div border">
                <img class=" d-block mx-auto" width="60%" src="./images/insta-logo.png" alt="">
                <form action="./signin-data.php" method="POST">
                    <div class="input-div d-flex flex-column gap-2 my-2 ">
                        <input type="text" class="rounded-0 form-control" placeholder="Phone number, usernname or email address" name="siname">

                        <div class="d-flex align-items-center border" style="  background-color: #FAFAFA !important">
                            <input type="password" class="rounded-0 form-control passin" placeholder="Password" name="sipass" style="border:none">
                            <span>
                                <i class="bi eyeicon bi-eye-fill p-2 " style="display:none"></i>
                            </span>

                        </div>
                        <?php

                        if (isset($_SESSION['Login-Details-Err'])) {
                            echo "<p class='text-center fw-bold text-danger'  style='font-size:13px'>
                    {$_SESSION['Login-Details-Err']} 
                    </p>";
                        }
                        unset($_SESSION["Login-Details-Err"]);
                        ?>
                        <button class="text-white text-center  sign-in-btn w-100 my-2 py-1 rounded-2" style="text-decoration:none">Log in</button>
                    </div>
                </form>
                <div class="hr d-flex align-items-center justify-content-center gap-3 my-2 ">
                    <hr style="width:40%">
                    <p class="or-p m-0">OR</p>
                    <hr style="width:40%">
                </div>
                <div class="login-fb-div">
                    <div class="my-4 d-flex flex-row align-items-center justify-content-center gap-2">
                        <img width="6%" src="./images/FB-f-Logo.png" alt="">
                        <a href="" class="d-block loginfb-a m-0">Log in with facebook</a>
                    </div>
                </div>
                <a href="" class="my-3 d-flex align-items-center justify-content-center forgert-a ">Forget Your
                    Password?</a>
            </div>
            <div class="middle-div border d-flex align-items-center justify-content-center py-3 ">
                <p class="middle-p align-items-center m-0 d-flex gap-1">Don't have an account? <a href="./signup-form.php" class="text-decoration-none fw-bold middle-a">Sign up</a></p>
            </div>
            <div class="lastdiv  d-flex flex-column align-items-center justify-content-center">
                <p class="last-a d-flex align-items-center">Get the App ?</p>
                <div class="d-flex gap-2 justify-content-center">
                    <img width="35%" src="./images/playstore-logo.png" alt="">
                    <img width="30%" src="./images/microsoft-logo.png" alt="">
                </div>
            </div>
        </div>
    </div>



</body>


</html>