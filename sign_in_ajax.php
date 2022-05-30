<?php require("connection.php"); session_start();
  if (isset($_POST['name']) == true &&
    isset($_POST['pass']) == true) {
    $user= $_POST['name'];
    $password= $_POST['pass'];
    $result= $con->query("SELECT * FROM sign_up_general WHERE email='$user' AND pass='$password' OR name='$user' AND pass='$password' LIMIT 1;");
      $num = $con->affected_rows;
			if($num != 0 && $result == true){
        $row = $result-> fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        $user_id = $_SESSION['user_id'];
        $today = date("Y-m-d H:i:s");
        // for first log_in
        $access_num = $row['access_num'];
        if ($access_num == 0) {
          echo "first_login";
          $con->query("INSERT INTO last_seen VALUES(NULL, '$user_id', '$today', NULL, '1');");
        }else {
          $access_num += 1;
          echo "index";
          $con->query("UPDATE last_seen SET login_time='$today', active='1' WHERE user_id='$user_id';");
        }
        $con->query("UPDATE sign_up_general SET access_num='$access_num' WHERE user_id='$user_id';");
      }
  }
 ?>
