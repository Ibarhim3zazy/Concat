<?php require("connection.php"); session_start();
if (isset($_POST['signout']) == true) {
  unset($_SESSION);
  session_destroy();
}
  if (isset($_SESSION['user_id']) == true) {
    $user_id = $_SESSION['user_id'];
    $result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$user_id';");
    $num = $con->affected_rows;
    if($num != 0 && $result == true){
      $row = $result-> fetch_assoc();
    }
  }else {
    header("location: log_in.php");
  }
?>
