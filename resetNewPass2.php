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
    <link rel="stylesheet" href="css/resetNewPass.css">
    <script type="text/javascript" src="js/send_verificationCode.js"></script>
    <title>Forget Password | Is that you</title>
</head>

<body>
  <?php require("connection.php");
  if (isset($_GET['email']) == true) {
    $usermail = $_GET['email'];
    $result= $con->query("SELECT * FROM sign_up_general WHERE email='$usermail';");
      $num = $con->affected_rows;
      if($num != 0 && $result == true){
        $row = $result-> fetch_assoc();
        $userName = $row['name'];
        $personal_pic = $row['personal_pic'];
      }
  }
  ?>
    <div class="reset">
        <div class="container">
            <h3>Reset Your Password</h3>
            <hr color="#eee" width="100%" size="1">
            <div class="min-container">
                <div class="left">
                    <p>Send Code via email</p>
                    <p id="email"><?= htmlentities($usermail); ?></p>
                </div>
                <div class="right">
                    <img src="profile___pic/<?= htmlentities($personal_pic) ?>" alt="">
                    <h4><?= htmlentities($userName); ?></h4>
                    <h4>Concat User</h4>
                </div>
            </div>

            <hr color="#eee" width="100%" size="1">
            <div class="links">
                <a href="forgetPass1.php" class="Not_you">Not you?</a>
                <input type="button" onclick="sending_verificationCode()" class="containue" value="Containue">
                <!-- <a href="entercode3.php" class="containue">Continue</a> -->
            </div>
        </div>
        <p class="p">
            You can see your name and profile picture because you're using a browser that you've logged in on before.
        </p>
    </div>
</body>

</html>
