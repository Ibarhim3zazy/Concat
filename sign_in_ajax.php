<?php require("connection.php");
  if (isset($_POST['name']) == true &&
    isset($_POST['pass']) == true) {
    $user= $_POST['name'];
    $password= $_POST['pass'];
    $result= $con->query("SELECT * FROM sign_up_general WHERE email='$user';");
      $num = $con->affected_rows;
			if($num != 0 && $result == true){
        $row = $result-> fetch_assoc();
        $_SESSION['user_e'] = $row['email'];
        // for first log_in
        $access_num = $row['access_num'];
        if ($access_num != 1) {
          $access_num = 1;
          echo "first_login";
        }else {
          echo "index";
        }
        $e_mail = $_SESSION['user_e'];
        $con->query("UPDATE sign_up_general SET access_num='$access_num' WHERE email='$e_mail'");
      }
  }
 ?>
