<?php require("connection.php");
if (!isset($_SESSION)) session_start();
if (isset($_POST['email']) == true &&
    isset($_POST['type']) == true &&
    isset($_POST['College_id']) == true) {
  $type = $_POST['type'];
  $College_id = $_POST['College_id'];
  $to_email = $_POST['email'];
  $result= $con->query("SELECT * FROM sign_up_general WHERE email='$to_email';");
    $num = $con->affected_rows;
    if($num != 0 && $result == true){
      $row = $result-> fetch_assoc();
      $name = $row['name'];
      $_SESSION['user_id'] = $row['user_id'];
      $user_id = $_SESSION['user_id'];
    if ($row['email'] == $to_email) {
      $v_code = rand(100000,999999);
      $_SESSION['ver_code'] = $v_code;
    $subject = "Concat Verification Code";
    $body = "Hi, $name\n Your Concat verification code is \n$v_code\n If you did not request this code, it is possible that someone else is trying to access the Concat Account $to_email. Do not forward or give this code to anyone.";
    $headers = "From: concat.verified@gmail.com";
    $body = wordwrap($body,70);
        $result = $con->query("UPDATE sign_up_general SET type='$type' WHERE email='$to_email';");
        if ($type == 'prof') {
          $result_2 = $con->query("INSERT INTO sign_up_doctor VALUES(NULL, '$user_id', '$College_id', Null);");
        }elseif ($type == 'Student') {
          $result_2 = $con->query("INSERT INTO sign_up_student VALUES(NULL, '$user_id', '$College_id', Null, Null);");
        }
        echo "string";
        if ($result == true && mail($to_email, $subject, $body, $headers) == true) {
            echo "Email successfully sent";
        } else {
            echo "Email sending failed...";
        }
    }
  }else {
    echo "You entered failed email";
  }
}
 ?>
