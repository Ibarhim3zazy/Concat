<?php require("connection.php"); session_start();

function GetPersonalInfo($con)
{
  if (isset($_POST['signout']) == true) {
    unset($_SESSION);
    session_destroy();
  }
  if (isset($_SESSION['user_id']) == true) {
    $user_id = $_SESSION['user_id'];
    $result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$user_id' LIMIT 1;");
    $num = $con->affected_rows;
    if($num != 0 && $result == true){
      $GLOBALS['row'] = $result-> fetch_assoc();
      return $GLOBALS['row'];
    }
  }else {
    header("location: log_in.php");
    die;
  }
}
?>
