<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/all.min.css">
 <link rel="stylesheet" href="css/normalize.css">
 <link rel="stylesheet" href="css/general.css">
 <link rel="icon" href="images/bear.svg">
 <link rel="stylesheet" href="css/message.css">
 <title>Concat | Messages</title>
</head>

<body>
 <?php require_once 'header.php';?>
 <div class="chats">
  <div class="container">
   <div class="left">
    <div class="fixed">
     <div class="friends">
      <div class="chat">
       <h3>Messages</h3>
       <button><a href="setting.php"><i class="fa-solid fa-gear"></i></a></button>
      </div>
     </div>
     <div class="search">
      <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
      <input type="search" placeholder="Search Message">
     </div>
    </div>
    <div class="con_message">
      <?php
      $chat_result = $con->query("SELECT * FROM chating WHERE sender_id='$user_id' OR receiver_id='$user_id' ORDER BY id DESC");
      if($chat_result == true){
        while ($chat_result_row = $chat_result-> fetch_assoc()) {
          if ($chat_result_row['receiver_id'] == $user_id) {
            $my_friend_id = htmlentities($chat_result_row['sender_id']);
          }elseif ($chat_result_row['sender_id'] == $user_id) {
            $my_friend_id = htmlentities($chat_result_row['receiver_id']);
          }
          $my_friend_result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$my_friend_id';");
          $my_friend_row = $my_friend_result-> fetch_assoc();
          if (isset($my_friend_row)) {
        getmessages($con,$user_id,$my_friend_id,1);
        $num = $con->affected_rows;
        if($num == 0){
          $messages_row['seen'] = 0;
          $messages_row['received'] = 0;
          $messages_row['message'] = 'Say Hi';
        }
        GetLastSeen($con,$my_friend_id);
        $lastseentime = $last_seen_row['last_seen'];
        $num_sec = time() - strtotime($lastseentime);
        $i = 0;
          $i++;
          echo '
          <div class="box" tabindex="1">
          ';
          if ($messages_row['seen'] == 1) {
            echo '
            <span class="unread"><i class="fa-solid fa-check-double"></i></span>
            ';
          }elseif ($messages_row['received'] == 1) {
            echo '
            <span class="read" style="position: absolute;"><i class="fa-solid fa-check-double"></i></span>
            ';
          }else {
            echo '
              <span class="new"></span>
            ';
          }
          echo '
           <div class="img">
            <img src="profile___pic/'.htmlentities($my_friend_row['personal_pic']).'" alt="" width="45px" height="45px" style="border-radius: 50%;">
            ';
            if ($num_sec > 5) {
              echo '
                <span class="offline"></span>
              ';
            }else {
              echo '
                <span class="active"></span>
              ';
            }
           echo '
           </div>
           <div class="name">
            <a href="message.php?receiver_id='.htmlentities($my_friend_id).'">'.htmlentities($my_friend_row['name']).'</a>
            <div class="friendChat">
             <p>'.htmlentities($messages_row['message']).'</p>
             <span class="time">13 Am</span>
            </div>
           </div>
          </div>
          ';
        }
      }
    }else {
      echo 'You Donn\'t Have Any Chats Right Now';
    }
       ?>
    </div>
   </div>
   <div class="middle" id="middle">
    <div class="chatBox">
     <div class="clientHead">
       <?php
          if (isset($_GET['receiver_id']) == true) {
            $visitor_id = $_GET['receiver_id'];
            GetMyFriendInfo($con,$visitor_id);
            GetLastSeen($con,$visitor_id);
            $lastseentime = $last_seen_row['last_seen'];
            $num_sec = time() - strtotime($lastseentime);
            echo '
            <div class="box">
             <div>
              <a href=""><img src="profile___pic/'.htmlentities($row['personal_pic']).'" alt="" width="46px" height="46px" style="border-radius: 50%;">
              ';
              if ($num_sec < 5) {
                echo '
                  <span class="active"></span>
                ';
              }else {
                echo '
                  <span class="active" style="background-color: #EA5546;"></span>
                ';
              }
              echo '
              </a>
             </div>
             <div class="client_info">
              <a href="">
               <h2>'.htmlentities($row['name']).'</h2>
              </a>
              ';
              if ($num_sec < 5) {
                echo '
                  <p>Active Now</p>
                ';
              }else {
                echo '
                  <p style="color: #EA5546;">NOT Active</p>
                ';
              }



          }
        ?>
      </div>
     </div>
      <div class="mor">
       <button>
        <i class="fa-solid fa-trash-can"></i>
       </button>
       <button>
        <i class="fa-solid fa-user-xmark"></i> </button>
       <button>
        <i class="fa-solid fa-flag"></i>
       </button>
       <!-- <ul id="more" style="position: absolute;">
        <li>
         <button>
          <i class="fa-solid fa-trash-can"></i>
          Delete Chat
         </button>
        </li>
        <li>
         <button>
          <i class="fa-solid fa-ban"></i>
          Block
         </button>
        </li>
        <li>
         <button>
          <i class="fa-solid fa-flag"></i>
          Report
         </button>
        </li>
       </ul> -->
      </div>
     </div>
     <!-- main chat  -->
     <div class="main_chat" id="main_chat"></div>
     <div class="writting">
       <button><label for="inputUploadfiles" style="cursor: pointer;"><i class="fa-solid fa-plus"></i></label></button>
       <input id="inputUploadfiles" name="inputUploadfiles" type="file" style="display: none;" onchange="change_files_upload()"/>
       <?php if (isset($_GET['receiver_id']) == true){
         $visitor_id = $_GET['receiver_id'];
         $my_id = $_SESSION['user_id'];
         echo '
         <input type="hidden" id="sender_id" value="'.$my_id.'">
         <input type="hidden" id="receiver_id" value="'.$visitor_id.'">
         ';
       }
      ?>

      <textarea style="resize: none;" id="message_text" onfocus="markSeenMessage()"></textarea>
      <button onclick="sendingMessage()"><i class="fa-solid fa-paper-plane"></i></button>
     </div>
    </div>
   </div>
  </div>
 </div>
 <script type="text/javascript" src="js/message.js"></script>
</body>

</html>
