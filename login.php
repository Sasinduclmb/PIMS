<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('layouts/header_links.php'); ?>
    <script src="js/login_validation.js"></script>
    <title>PIMS-LOGIN</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>
    <!-- <?php $hash = md5("123qwer");
            echo ($hash) ?> -->
    <main>
        <div class="box">
            <div class="inside-box">
                <!--making backgrounds-->
                <div class="form-w">
                    <form action="./functions/functions.php" method="POST" autocomplete="off" onsubmit="return validate()">
                        <div class="logo">
                            <img src="img/Capture.PNG" alt="logo">
                            <h3>PHARMACEUTICAL INFORMATION
                                MANAGEMENT SYSTEM
                            </h3>
                        </div>

                        <div class="heading">
                            <h2>LOG IN</h2>
                            <!-- <h6>Don't have an account?</h6>
                            <a href="add_user.php" class="newa">sign up</a> -->
                        </div>
                        <div class="real-form">
                            <div class="input-w">
                                <input id="username" type="text" class="input-field" autocomplete="off" placeholder="User Name" name="uname" />
                            </div>
                            <div class="input-w">
                                <input id="password" type="password" class="input-field" autocomplete="off" placeholder="Password" name="pword" />
                            </div>
                            <input type="submit" name="site_login" value="Login" class="login-b" />
                            <p class="text">
                                Forgotten your password or login details?
                                <a href="">Get help</a>
                            </p>

                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="image">
                        <img src="img/pexels-nataliya-vaitkevich-7526066.jpg" alt="carousel image" />
                        <img src="img/pexels-nataliya-vaitkevich-7615458.jpg" alt="carousel image" />
                        <img src="img/pexels-nataliya-vaitkevich-7615573.jpg" alt="carousel image" />
                        <img src="img/pexels-karolina-grabowska-4386467.jpg" alt="carousel image" />
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>