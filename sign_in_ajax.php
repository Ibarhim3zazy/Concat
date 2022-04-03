<?php require("connection.php"); session_start();
  if (isset($_POST['name']) == true &&
    isset($_POST['pass']) == true) {
    $user= $_POST['name'];
    $password= $_POST['pass'];
    $result= $con->query("SELECT * FROM sign_up_general WHERE email='$user' AND pass='$password' OR email='$user' AND pass='$password';");
      $num = $con->affected_rows;
			if($num != 0 && $result == true){
        $row = $result-> fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        // for first log_in
        $access_num = $row['access_num'];
        if ($access_num == 0) {
          echo "first_login";
        }else {
          $access_num += 1;
          echo "index";
        }
        $user_id = $_SESSION['user_id'];
        $con->query("UPDATE sign_up_general SET access_num='$access_num' WHERE user_id='$user_id';");
      }
  }
 ?>
