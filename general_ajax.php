<?php require("connection.php");
if (!isset($_SESSION)) session_start();

function id_generator($con)
{
  $result = $con->query("SELECT * FROM messages ORDER BY id DESC LIMIT 1;");
  $num = $con->affected_rows;
  if($num != 0){
    $some_row = $result-> fetch_assoc();
    $generate_id[] = rand();
    shuffle($generate_id);
    $GLOBALS['id_generated'] = $generate_id[0].$some_row['id'];
    return $GLOBALS['id_generated'];
  }else {
    $generate_id[] = rand();
    shuffle($generate_id);
    $GLOBALS['id_generated'] = $generate_id[0];
    return $GLOBALS['id_generated'];
  }
}

// update last seen
if (isset($_POST['last_seen']) == true) {
  $user_id = $_SESSION['user_id'];
  $today = date("Y-m-d H:i:s");
  $con->query("UPDATE last_seen SET last_seen='$today', active='1' WHERE user_id='$user_id';");
}

function GetLastSeen($con, $user_id)
{
  $last_seen_result= $con->query("SELECT * FROM last_seen WHERE user_id='$user_id' LIMIT 1;");
  $num = $con->affected_rows;
  if($num != 0 && $last_seen_result == true){
    $GLOBALS['last_seen_row'] = $last_seen_result-> fetch_assoc();
    return $GLOBALS['last_seen_row'];
  }
}

function GetPersonalInfo($con)
{
  if (isset($_POST['signout']) == true) {
    $user_id = $_SESSION['user_id'];
    $today = date("Y-m-d H:i:s");
    $con->query("UPDATE last_seen SET last_seen='$today', active='0' WHERE user_id='$user_id';");
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
  if (is_numeric($visitor_id) == true) {
    $result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$visitor_id' LIMIT 1;");
    $num = $con->affected_rows;
    if($num != 0 && $result == true){
      $GLOBALS['row'] = $result-> fetch_assoc();
      return $GLOBALS['row'];
    }
  }
}
function CheckStatueOfMyFriend($con,$statue,$visitor_id=0)
{
  $my_friend_id = 0;
  $user_id = $_SESSION['user_id'];
  if ($visitor_id !== 0) {
    $friend_result = $con->query("SELECT * FROM friend_request WHERE my_user_id='$user_id' AND freind_user_id='$visitor_id' OR my_user_id='$visitor_id' AND freind_user_id='$user_id';");
    if($friend_result == true){
      while ($friend_result_row = $friend_result-> fetch_assoc()) {
        if ($friend_result_row['freind_user_id'] == $user_id) {
          $statue_data = htmlentities($friend_result_row['statue']);
          return $statue_data;
        }elseif ($friend_result_row['my_user_id'] == $user_id) {
          $statue_data = htmlentities($friend_result_row['statue']);
          if ($statue_data == 'friend_req') {
            return 'cancel_req';
          }else {
            return $statue_data;
          }
        }
      }
    }
  }else {
  $friend_result = $con->query("SELECT * FROM friend_request WHERE my_user_id='$user_id' OR freind_user_id='$user_id' ORDER BY id DESC;");
  if($friend_result == true){
    while ($friend_result_row = $friend_result-> fetch_assoc()) {
      if ($friend_result_row['freind_user_id'] == $user_id) {
        $my_friend_id = htmlentities($friend_result_row['my_user_id']);
        $statue_data = htmlentities($friend_result_row['statue']);
      }elseif ($friend_result_row['my_user_id'] == $user_id) {
        $my_friend_id = htmlentities($friend_result_row['freind_user_id']);
        $statue_data = htmlentities($friend_result_row['statue']);
      }
        if ($statue == 'friend' && $statue_data == 'friend') {
          $my_friend_result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$my_friend_id';");
          $GLOBALS['my_friend_row'] = $my_friend_result-> fetch_assoc();
          $GLOBALS['my_friend_id'] = $my_friend_id;
          return 'friend';
        }elseif ($statue == 'friend_req' && $statue_data == 'friend_req') {
          if ($user_id == htmlentities($friend_result_row['my_user_id'])) {
            return 'cancel_req';
          }else {
            $my_friend_result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$my_friend_id';");
            $GLOBALS['my_friend_row'] = $my_friend_result-> fetch_assoc();
            $GLOBALS['my_friend_id'] = $my_friend_id;
            return 'friend_req';
          }
        }elseif ($statue == 'blocked' && $statue_data == 'blocked') {
          return header("location: under_repair.php");
        }
      }
    }
  }
}

function getmessages($con,$sender_id,$receiver_id,$messages_limit)
{
  $messages_result= $con->query("SELECT * FROM messages WHERE sender_id='$sender_id' AND receiver_id='$receiver_id' OR sender_id='$receiver_id' AND receiver_id='$sender_id' AND seen='1' ORDER BY id DESC LIMIT $messages_limit;");
  if($messages_result == true){
    while ($messages_row = $messages_result-> fetch_assoc()){
      return $GLOBALS['messages_row'] = $messages_row;
    }
  }
}

?>
