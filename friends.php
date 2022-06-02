    <link rel="stylesheet" href="css/friend.css">

    <?php require_once 'header.php';?>
    <div class="friend">
     <div class="container">
      <div class="title">
       <div class="con_friend">
        <p>Friends</p>
        <div class="search">
         <i class="fa-solid fa-magnifying-glass"></i>
         <input type="search" id="search" placeholder="search">
        </div>
       </div>
       <a href="request.php">Friend Requests</a>
      </div>
      <div class="con_box_friends">
      <?php
          $i = 0;
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
            if ($statue_data == 'friend') {
              $my_friend_result= $con->query("SELECT * FROM sign_up_general WHERE user_id='$my_friend_id';");
              $my_friend_row = $my_friend_result-> fetch_assoc();
            $i++;
            echo '
            <form class="box" action="profile.php" id="form'.$i.'" method="get">
             <div class="min-box" data-id-form="form'.$i.'" onclick="viewProfile(this)">
              <img src="profile___pic/'.htmlentities($my_friend_row['personal_pic']).'" alt="" width="130px" height="130px">
              <div class="friendName">
               <h3>'.htmlentities($my_friend_row['name']).'</h3>
              <!-- <p><span>5</span>mutual friends</p> -->
              <input type="hidden" name="friend_id" value="'.htmlentities($my_friend_row['user_id']).'">
              </div>
             </div>
           </form>
            ';
          }
        }
      }
       ?>
     </div>
     </div>
    </div>
    <script type="text/javascript" src="js/friends.js"></script>
    <?php require 'friendsChat.php'; ?>
