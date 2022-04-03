<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="icon" href="images/bear.svg">
    <link rel="stylesheet" href="css/entercode.css">
    <title>Forget Password | Enter your code</title>
</head>

<body>
    <div class="code">
        <form class="container" action="" method="post">
            <h3>Enter security code</h3>
            <hr color="#eee" width="100%" size="1">
            <p>
                Please check your email for a text message with your code.
                Your code is 6 characters in length.
            </p>
            <div class="input_field">
                <input type="text" id="text" name="conVer_code" placeholder="Enter code">
                <div class="any-name">
                    <small>Error Message</small>
                </div>
            </div>
            <hr color="#eee" width="100%" size="1">
            <div class="links">
                <a href="index.php" class="cancel">Cancel</a>
                <input type="submit" class="containue" id="con" value="Continue">
            </div>
        </form>
    </div>
    <?php session_start(); require("connection.php");
    if (isset($_SESSION['ver_code']) == true && isset($_POST['conVer_code']) == true) {
      $conVer_code = $_POST['conVer_code']."    ";
      $ver_code = $_SESSION['ver_code'];
      if ($conVer_code == $ver_code) {
        if (isset($_SESSION['user_email']) == true) {
          header("location: index.php");
          unset($_SESSION);
          session_destroy();
        }else {
          header("location: newpass4.php");
          unset($_SESSION);
          session_destroy();
        }
      }
    }
     ?>
</body>

</html>
