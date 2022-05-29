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
          CheckStatueOfMyFriend($con,'friend');
          $i = 0;
          if (isset($my_friend_row)) {
            $i++;
            echo '
            <form class="box" action="profile.php" id="form'.$i.'" method="get">
             <div class="min-box" data-id-form="form'.$i.'" onclick="viewProfile(this)">
              <img src="profile___pic/'.htmlentities($my_friend_row['personal_pic']).'" alt="" width="130px" height="130px">
              <div class="friendName">
               <h3>user name</h3>
              <!-- <p><span>5</span>mutual friends</p> -->
              <input type="hidden" name="friend_id" value="'.htmlentities($my_friend_row['user_id']).'">
              </div>
             </div>
            <button><i class="fa-solid fa-user-xmark"></i> </button>
           </form>
            ';
          }
       ?>
     </div>
     </div>
    </div>
    <script type="text/javascript" src="js/friends.js"></script>
    <?php require 'friendsChat.php'; ?>
