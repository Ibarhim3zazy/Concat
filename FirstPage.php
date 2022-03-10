<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/firstPage.css">
    <link rel="icon" href="images/bear.svg">
    <title>Confirm Your Accont</title>
</head>

<body>
    <div class="reset_pass">
        <div class="form" id="form">
            <h3>
                Confirm Your Account By Your Email
            </h3>
            <div class="enter">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Enter Your Email " id="email">
                <div class="any-name">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>
            </div>
            <div class="enter ">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter New Password" id="password">
                <div class="any-name">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>
            </div>
            <div class="enter">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm Password" id="co_password">
                <div class="any-name">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>
            </div>
            <input type="button" value="Next Page" id="submit">
        </div>
    </div>
    <script src="js/firstPage.js"></script>
</body>

</html>
