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
    $received_result = $con->query("SELECT * FROM messages WHERE receiver_id='$user_id' ORDER BY id DESC LIMIT 10;");
    $received_num = $con->affected_rows;
    if($received_num != 0 && $received_result == true){
      while ($received_row = $received_result-> fetch_assoc()){
        $con->query("UPDATE messages SET received='1' WHERE  receiver_id='$user_id';");
      }
    }
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

if (isset($_GET['search_peole_Word'])) {
  $searchWord = $_GET['search_peole_Word'];
  SearchPeople($con,$searchWord,25);
}
function SearchPeople($con,$searchWord,$search_limit)
{
  $people_search_result= $con->query("SELECT * FROM sign_up_general WHERE name LIKE '%$searchWord%' ORDER BY id DESC LIMIT $search_limit;");
  $num_row = $con->affected_rows;
  if($people_search_result == true && $num_row != 0 && $num_row < 25){
    while ($people_search_row = $people_search_result-> fetch_assoc()){
      if ($people_search_row['user_id'] != $_SESSION['user_id']) {
        echo $people_search_row['user_id']." u?s?e?r?f?o?r?m?e?s?s?a?g?e?i?d?".$people_search_row['name']." p?i?c?p?r?o?f?i?l?e?p?h?o?t?o?".$people_search_row['personal_pic']." e?n?d?s?e?a?r?c?h?r?e?s?u?l?t?";
      }
    }
  }elseif ($people_search_result == true && $num_row != 0 && $num_row > 25) {
    $people_search_result = $con->query("SELECT * FROM sign_up_general WHERE email LIKE '%$searchWord%' ORDER BY id DESC LIMIT $search_limit;");
    while ($people_search_row = $people_search_result-> fetch_assoc()){
      echo $people_search_row['email'];
    }
  }
}

// get messages that i receive it only for notification

if (isset($_POST['myid']) == true && isset($_POST['msgs_limit']) == true) {
  $myid = $_POST['myid'];
  $messages_limit = $_POST['msgs_limit'];
  load_messages_nofi($con,$myid,$messages_limit);
}
function load_messages_nofi($con,$myid,$messages_limit)
{
  $messages_result= $con->query("SELECT * FROM messages WHERE receiver_id='$myid' AND seen='0' ORDER BY id ASC LIMIT $messages_limit;");
  if($messages_result == true){
    while ($messages_row = $messages_result-> fetch_assoc()){
      $sender_id = htmlentities($messages_row['sender_id']);
      $sender_message_time = htmlentities($messages_row['time']);
      $sender_message_time = date('h:i A', strtotime($sender_message_time));
      $user_result = $con->query("SELECT * FROM sign_up_general WHERE user_id='$sender_id' LIMIT 1;");
      if ($user_row = $user_result-> fetch_assoc()){
        echo $user_row['name']." u?s?e?r?n?a?m?e?f?o?r?n?o?t?i?".$messages_row['message']." s?e?n?d?e?r?m?e?s?s?a?g?e?".$sender_message_time." s?e?n?d?e?r?m?e?s?s?a?g?e?t?i?m?e?".$user_row['personal_pic']." s?e?n?d?e?r?p?i?c?f?o?r?n?o?t?f?i?".$sender_id." e?n?d?m?e?s?s?a?g?e?r?o?w?";
      }
    }
  }
}

?>
