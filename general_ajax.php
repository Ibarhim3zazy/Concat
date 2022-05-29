<?php require("connection.php");
if (!isset($_SESSION)) session_start();

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
function GetMyFriendInfo($con,$visitor_id)
{
    $result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$visitor_id' LIMIT 1;");
    $num = $con->affected_rows;
    if($num != 0 && $result == true){
      $GLOBALS['row'] = $result-> fetch_assoc();
      return $GLOBALS['row'];
    }
}
function CheckStatueOfMyFriend($con,$statue)
{
  $user_id = $_SESSION['user_id'];
  $friend_result = $con->query("SELECT * FROM friend_request WHERE my_user_id='$user_id' OR freind_user_id='$user_id' ORDER BY id DESC;");
  if($friend_result == true){
    while ($friend_result_row = $friend_result-> fetch_assoc()) {
      if ($friend_result_row['freind_user_id'] == $user_id) {
        $my_friend_id = htmlentities($friend_result_row['my_user_id']);
      }elseif ($friend_result_row['my_user_id'] == $user_id) {
        $my_friend_id = htmlentities($friend_result_row['freind_user_id']);
      }
      $num = $con->affected_rows;
      if ($num != 0) {
        if ($statue == 'friend') {
          $my_friend_result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$my_friend_id';");
          $GLOBALS['my_friend_row'] = $my_friend_result-> fetch_assoc();
          $GLOBALS['my_friend_id'] = $my_friend_id;
          return 'friend';
        }
      }elseif ($statue == 'blocked') {
        header("location: under_repair.php");
      }
    }
  }
}
?>
