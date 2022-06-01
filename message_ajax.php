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
    $message = $_POST['message'];
    $sender_id = $_POST['sender_id'];
    $receiver_id = $_POST['receiver_id'];
    id_generator($con);
    // echo 'Message ID: '.$id_generated .' '. $_POST['message'] .' from '. $_POST['sender_id'].' to '. $_POST['receiver_id'] .' has img named: '. $file_name;
    $result_message = $con->query("INSERT INTO messages VALUES(NULL, '$id_generated', '$sender_id', '$receiver_id', '$file_name', '$message','0', '0', '0', '0', Null);");
      if ($result_message == true) {
        // echo 'success';
      }else {
        echo 'send_faild';
      }
  }

  if (isset($_POST['sender_id']) == true && isset($_POST['receiver_id']) == true) {
    $sender_id = $_POST['sender_id'];
    $receiver_id = $_POST['receiver_id'];
    $messages_limit = $_POST['messages_limit'];
    $veiw_result= $con->query("SELECT * FROM messages WHERE sender_id='$sender_id' OR receiver_id='$sender_id' AND receiver_id='$sender_id' OR receiver_id='$receiver_id' ORDER BY id DESC LIMIT $messages_limit;");
    $veiw_num = $con->affected_rows;
    if($veiw_num != 0 && $veiw_result == true){
      while ($veiw_row = $veiw_result-> fetch_assoc()){
        if ($sender_id === htmlentities($veiw_row['sender_id']) &&
          $receiver_id === htmlentities($veiw_row['receiver_id'])
      ) {
          $sender_message = htmlentities($veiw_row['message']);
          if (htmlentities($veiw_row['message']) != 0) {
            $sender_message_file = htmlentities($veiw_row['file']);
          }
          echo "sender: ". $sender_message ."e?n?d?s?e?n?d?i?n?g?M?e?s?s?a?g?e?";
        }
    if ($sender_id === htmlentities($veiw_row['receiver_id'])
    && $receiver_id === htmlentities($veiw_row['sender_id'])
  ) {
      $receiver_message = htmlentities($veiw_row['message']);
      if (htmlentities($veiw_row['message']) != 0) {
        $receiver_message_file = htmlentities($veiw_row['file']);
      }
      echo "recever: ".$receiver_message ."e?n?d?s?e?n?d?i?n?g?M?e?s?s?a?g?e?";
    }
      }
    }
  }
 ?>
