<?php require("connection.php"); require 'general_ajax.php';
  $file_name = 0;
  if (isset($_FILES['fileany']['name']) == true){
    $file_name = $_FILES['fileany']['name'];
    /* Choose where to save the uploaded file */
    $location = "message____files/".$file_name;
    /* Save the uploaded file to the local filesystem */
    if ( move_uploaded_file($_FILES['fileany']['tmp_name'], $location) ) {
      // echo 'Success_img';
    } else {
      echo 'Failure_file';
    }
  }

  if (isset($_POST['message']) == true && isset($_POST['sender_id']) == true && isset($_POST['receiver_id']) == true){
    $message = htmlentities($_POST['message']);
    $sender_id = htmlentities($_POST['sender_id']);
    $receiver_id = htmlentities($_POST['receiver_id']);
    id_generator($con);
    // echo 'Message ID: '.$id_generated .' '. $_POST['message'] .' from '. $_POST['sender_id'].' to '. $_POST['receiver_id'] .' has img named: '. $file_name;
    $result_message = $con->query("INSERT INTO messages VALUES(NULL, '$id_generated', '$sender_id', '$receiver_id', '$file_name', '$message','0', '0', '0', '0', Null);");
      if ($result_message == true) {
        $has_chat_result= $con->query("SELECT * FROM chating WHERE sender_id='$sender_id' AND receiver_id='$receiver_id' OR sender_id='$receiver_id' AND receiver_id='$sender_id' ORDER BY id DESC");
        $num_row = $con->affected_rows;
        if ($num_row == 0) {
          $con->query("INSERT INTO chating VALUES(NULL, '$sender_id', '$receiver_id', Null);");
        }
      }else {
        echo 'send_faild';
      }
  }

  if (isset($_POST['sender_id']) == true && isset($_POST['receiver_id']) == true && isset($_POST['messages_limit']) == true) {
    $sender_id = htmlentities($_POST['sender_id']);
    $receiver_id = htmlentities($_POST['receiver_id']);
    $messages_limit = htmlentities($_POST['messages_limit']);
    $veiw_result= $con->query("SELECT * FROM messages WHERE sender_id='$sender_id' OR receiver_id='$sender_id' AND receiver_id='$sender_id' OR receiver_id='$receiver_id' ORDER BY id DESC LIMIT $messages_limit;");
    $veiw_last_num = 0;
    $veiw_num = $con->affected_rows;
    $veiw_last_num = $veiw_num;
    if($veiw_num != 0 && $veiw_result == true){
      while ($veiw_row = $veiw_result-> fetch_assoc()){
        if ($sender_id === htmlentities($veiw_row['sender_id']) &&
          $receiver_id === htmlentities($veiw_row['receiver_id'])
      ) {
          $sender_message = htmlentities($veiw_row['message']);
          $sender_message_id = htmlentities($veiw_row['msg_id']);
          $sender_message_received = htmlentities($veiw_row['received']);
          $sender_message_seen = htmlentities($veiw_row['seen']);
          $sender_message_time = htmlentities($veiw_row['time']);
          $sender_message_time = date('h:i A', strtotime($sender_message_time));
          if (htmlentities($veiw_row['file']) != 0) {
            $sender_message_file = htmlentities($veiw_row['file']);
          }
          echo "sender: "." m?e?s?s?a?g?e?_?i?d?".$sender_message_id." m?e?s?s?a?g?e?_?r?e?c?e?i?v?e?d?".$sender_message_received." m?e?s?s?a?g?e?_?s?e?e?n?".$sender_message_seen." m?e?s?s?a?g?e?_?t?i?m?e?".$sender_message_time." m?e?s?s?a?g?e?_?t?e??x??t?".$sender_message ." e?n?d?s?e?n?d?i?n?g?M?e?s?s?a?g?e?";
        }
    if ($sender_id === htmlentities($veiw_row['receiver_id'])
    && $receiver_id === htmlentities($veiw_row['sender_id'])
  ) {
      $receiver_message = htmlentities($veiw_row['message']);
      $receiver_message = htmlentities($veiw_row['message']);
      $receiver_message_id = htmlentities($veiw_row['msg_id']);
      $receiver_message_received = htmlentities($veiw_row['received']);
      $receiver_message_seen = htmlentities($veiw_row['seen']);
      $receiver_message_time = htmlentities($veiw_row['time']);
      $receiver_message_time_calc = (time() - strtotime($receiver_message_time)) / 60 / 60 / 24;
      if ($receiver_message_time_calc >= 1 && $receiver_message_time_calc < 2) {
        $receiver_message_time = "Yesterday At: ".date('h:i A', strtotime($receiver_message_time));
      }elseif ($receiver_message_time_calc > 2) {
        $receiver_message_time = "";
      }else {
        $receiver_message_time = date('h:i A', strtotime($receiver_message_time));
      }
      if (htmlentities($veiw_row['file']) != 0) {
        $receiver_message_file = htmlentities($veiw_row['file']);
      }
      echo "receiver: "." m?e?s?s?a?g?e?_?i?d?".$receiver_message_id." m?e?s?s?a?g?e?_?r?e?c?e?i?v?e?d?".$receiver_message_received." m?e?s?s?a?g?e?_?s?e?e?n?".$receiver_message_seen." m?e?s?s?a?g?e?_?t?i?m?e?".$receiver_message_time." m?e?s?s?a?g?e?_?t?e??x??t?".$receiver_message ." e?n?d?s?e?n?d?i?n?g?M?e?s?s?a?g?e?";
    }
      }
    }
  }

  if (isset($_POST['sender_id']) == true && isset($_POST['receiver_id']) == true && isset($_POST['message_seen']) == true) {
    $sender_id = htmlentities($_POST['sender_id']);
    $receiver_id = htmlentities($_POST['receiver_id']);
    $con->query("UPDATE messages SET seen='1' WHERE  receiver_id='$sender_id' AND sender_id='$receiver_id';");
  }
 ?>
