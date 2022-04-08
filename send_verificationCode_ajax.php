<?php require("connection.php"); session_start();
if (isset($_POST['email']) == true) {
  $to_email = $_POST['email'];
  $result= $con->query("SELECT * FROM sign_up_general WHERE email='$to_email';");
    $num = $con->affected_rows;
    if($num != 0 && $result == true){
      $row = $result-> fetch_assoc();
      $name = $row['name'];
      $_SESSION['user_id'] = $row['user_id'];
    }
    $v_code = rand(100000,999999);
    $_SESSION['ver_code'] = $v_code;
  $subject = "Concat Verification Code";
  $body = "Hi, $name\n Your Concat verification code is \n$v_code\n If you did not request this code, it is possible that someone else is trying to access the Concat Account $to_email. Do not forward or give this code to anyone.";
  $headers = "From: concat.verified@gmail.com";
  $body = wordwrap($body,70);
  if (isset($_POST['pass']) == true) {
    $pass = $_POST['pass'];
    $con_pass = $_POST['con_pass'];
    if ($pass == $con_pass) {
      $result = $con->query("UPDATE sign_up_general SET pass='$pass' WHERE email='$to_email';");
      if ($result == true && mail($to_email, $subject, $body, $headers) == true) {
          echo "Email successfully sent";
      } else {
          echo "Email sending failed...";
      }
    }
  }
}
 ?>
