<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/forgetPass.css">
    <link rel="icon" href="images/bear.svg">
    <script type="text/javascript" src="js/mailCheck.js"></script>
    <title>Concat | Forget Password?</title>
</head>
<!-- resetNewPass2.php -->
<body>
    <div class="forgetPass">
        <div class="contain">
          <h3>Find Your Account</h3>
          <hr color="#eee" width="100%" size="1">
          <h3>Please Enter your email address or your ID to search for your account </h3>
          <div class=" input_field">
            <input type="email" id="email" name="email" placeholder="Enter Your Email">
          </div>
        <hr color="#eee" width="100%" size="1">
        <div class="links">
            <a href="index.php" class="cancel">Cancel</a>
            <input type="button" class="search" value="Search" onclick="mailCheck()">
        </div>
    </div>
    </div>
</body>

</html>
