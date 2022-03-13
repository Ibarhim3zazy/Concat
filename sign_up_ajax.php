<?php require("connection.php");
  if (isset($_POST['name']) == true &&
    isset($_POST['pass']) == true &&
    isset($_POST['phone']) == true &&
    isset($_POST['age']) == true &&
    isset($_POST['email']) == true &&
    isset($_POST['gender']) == true &&
    isset($_POST['career']) == true) {
    $user= $_POST['name'];
    $password= $_POST['pass'];
    $phone= $_POST['phone'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $career= $_POST['career'];
    // check email
    $result= $con->query("SELECT * FROM sign_up_general WHERE email='$email';");
      $num = $con->affected_rows;
      if($num != 0 && $result == true){
        echo 'Faild';
        }else {
          echo 'success';
          $result = $con->query("INSERT INTO sign_up_general VALUES(NULL, '$user_id', '$user', '$email', '$password', '$phone',0,0,0,0, '$gender',0,0,0);");
        }
  }
 ?>
