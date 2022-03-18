<?php require("connection.php");
  if (isset($_POST['name']) == true &&
    isset($_POST['pass']) == true &&
    isset($_POST['phone']) == true &&
    isset($_POST['email']) == true &&
    isset($_POST['b_date']) == true &&
    isset($_POST['caddress']) == true &&
    isset($_POST['gender']) == true) {
    $user= htmlentities($_POST['name']);
    $password= htmlentities($_POST['pass']);
    $phone= htmlentities($_POST['phone']);
    $email= htmlentities($_POST['email']);
    $b_date= htmlentities($_POST['b_date']);
    $caddress= htmlentities($_POST['caddress']);
    $gender= htmlentities($_POST['gender']);
    $user_id = rand();
    // check email
    $result= $con->query("SELECT * FROM sign_up_general WHERE email='$email';");
      $num = $con->affected_rows;
      if($num != 0 && $result == true){
        echo 'email_exists';
        }else {
          $result = $con->query("INSERT INTO sign_up_general VALUES(NULL, '$user_id', '$user', '$email', '$password', '$phone','$b_date','0','$caddress','0', '$gender','0','0','0','user','0');");
          if ($result == true) {
            echo 'success';
          }else {
            echo 'faild';
          }
        }
  }
 ?>
