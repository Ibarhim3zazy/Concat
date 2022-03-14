<?php require("connection.php");
  if (isset($_POST['name']) == true &&
    isset($_POST['pass']) == true &&
    isset($_POST['phone']) == true &&
    isset($_POST['email']) == true &&
    isset($_POST['gender']) == true) {
    $user= $_POST['name'];
    $password= $_POST['pass'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $user_id = rand();
    // check email
    $result= $con->query("SELECT * FROM sign_up_general WHERE email='$email';");
      $num = $con->affected_rows;
      if($num != 0 && $result == true){
        echo 'email_exists';
        }else {
          $result = $con->query("INSERT INTO sign_up_general VALUES(NULL, '$user_id', '$user', '$email', '$password', '$phone','01-02-2000','0','0','0', '$gender','0','0','0','user','0');");
          if ($result == true) {
            echo 'success l';
          }else {
            echo 'faild';
          }
        }
  }
 ?>
