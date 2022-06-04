<link rel="stylesheet" href="css/member.css">
<title>Group Name | Concat</title>

<script>
  if(window.history.replaceState){
  	window.history.replaceState(null, null, window.location.href);
  }
</script>
<?php
if (isset($_GET['group_id']) == true) {
  require_once 'header.php'; require 'group_ajax.php';
  $user_id = $_SESSION['user_id'];
  $group_id = $_GET['group_id'];
  GetGroupInfo($con,$group_id);
  GroupMemberNum($con,$group_id);
  $member_id = htmlentities($user_id);
  if (isset($_POST['RemoveMember']) == true) {
    RemoveGroupMember($con,$group_id,$member_id);
  }
  $admin_info_id = $row_group_info['admin_id'];
  CheckUserGroupMember($con,$group_id);
  if ($admin_info_id != $user_id) {
    if (isset($row_group_member['group_members_id']) != true || $row_group_member['group_members_id'] != $user_id) {
      echo '<script>window.location = "groupName.php?group_id='.$group_id.'"</script>';
      die();
    }
  }
}else {
  header("location: index.php");
  die();
}
?>

<a href="groupName.php?group_id=<?= $group_id ?>" class="back">Go Back Group</a>

<div class="member-container">
 <div class="container">
  <div class="member-title">
   <h3>Members <span><?= $group_members_num ?></span></h3>
   <p>
    New People, who joined this group will appear here
   </p>
   <div class="search">
    <i class="fa-solid fa-magnifying-glass"></i>
    <input type="search" placeholder="Find a member">
   </div>
  </div>
  <?php
    GetMyFriendInfo($con,$user_id);
    if ($admin_info_id != $user_id){
      echo '
      <hr size="1" color="#eee" width="100%" style="margin: 10px 0 10px;">
      <div class="member-me">
       <div class="right">
        <a href="profile.php?friend_id='.$row['user_id'].'">
         <img src="profile___pic/'.$row['personal_pic'].'" alt="" style="width: 100px; height :100px; border-radius:50%">
        </a>
        <div class="min-me">
         <a href="profile.php?friend_id='.$row['user_id'].'">
          <h3>'.$row['name'].'</h3>
         </a>
         <!-- his title her "variable" -->
         <!-- <span>Mansourah, Ad Daqahliyah, Egypt</span> -->
        </div>
       </div>
       <form method="post">
       <input type="hidden" name="RemoveMember">
        <button><i class="fa-solid fa-arrow-right-from-bracket"></i> Leave</button>
       </form>
      </div>
      ';
    }
   ?>
  <hr size="1" color="#eee" width="100%" style="margin: 7px 0 10px;">
  <div class="member-admin">
   <h3>Admins & moderators <span> . 3</span></h3>
   <!-- person admin -->
   <?php
      GetMyFriendInfo($con,$admin_info_id);
      echo '
      <div class="per one">
       <div class="right">
        <a href="profile.php?friend_id='.$row['user_id'].'"> <img src="profile___pic/'.$row['personal_pic'].'" alt="" style="width: 100px; height :100px; border-radius:50%">
        </a>
        <div class="min-me">
         <a href="profile.php?friend_id='.$row['user_id'].'">
          <h3>'.$row['name'].'</h3>
         </a>
         <span>Admin</span>
        </div>
       </div> ';
       if ($admin_info_id != $user_id){
         echo '
         <div class="left">
          <a href="message.php?receiver_id='.$row['user_id'].'"><button><i class="fa-brands fa-facebook-messenger"></i> Send Message</button></a>
         </div>
        </div>
        ';
       }
    ?>
   <!-- person Moderator -->
   <!-- <div class="per one">
    <div class="right">
     <a href=""> <img src="user_media/image/bear.jpg" alt="" style="width: 100px; height :100px; border-radius:50%">
     </a>
     <div class="min-me">
      <a href="">
       <h3>Moustafa Muhammad</h3>
      </a>
      <span>Moderator</span>

     </div>
    </div>
    <div class="left">
     <button><i class="fa-solid fa-user-plus"></i> Add Firend</button>
    </div>
   </div> -->
  </div>
  <hr size="1" color="#eee" width="100%" style="margin: 7px 0 10px;">
  <div class="members">
   <h3>Members <span><?= $group_members_num ?></span></h3>
   <?php
   $group_member= $con->query("SELECT group_members_id FROM group_members WHERE group_id='$group_id';");
   while ($group_member_info = $group_member-> fetch_assoc()) {
     $member_info_id = $group_member_info['group_members_id'];
     GetMyFriendInfo($con,$member_info_id);
     if ($user_id != $row['user_id']){
     echo '
     <div class="per one">
      <div class="right">
       <a href="profile.php?friend_id='.$row['user_id'].'"> <img src="profile___pic/'.$row['personal_pic'].'" alt="" style="width: 100px; height :100px; border-radius:50%">
       </a>
       <div class="min-me">
        <a href="profile.php?friend_id='.$row['user_id'].'">
         <h3>'.$row['name'].'</h3>
        </a>
        <!-- <span>Giza</span> -->
       </div>
      </div>
      <div class="left">
       <a href="message.php?receiver_id='.$row['user_id'].'"><button><i class="fa-brands fa-facebook-messenger"></i> Send Message</button></a>
      </div>
     </div>
     ';
      }
   }
    ?>
  <!-- <div class="per one">
    <div class="right">
     <a href=""> <img src="user_media/image/bear.jpg" alt="" style="width: 100px; height :100px; border-radius:50%">
     </a>
     <div class="min-me">
      <a href="">
       <h3>Amin Moustafa</h3>
      </a>
      <span>Giza</span>
     </div>
    </div>
    <div class="left">
     <button><i class="fa-solid fa-user-xmark"></i> Cancle Request</button>
    </div>
   </div>
    friends Comment
   <div class="per one">
    <div class="right">
     <a href=""> <img src="user_media/image/bear.jpg" alt="" style="width: 100px; height :100px; border-radius:50%">
     </a>
     <div class="min-me">
      <a href="">
       <h3>Amin Moustafa</h3>
      </a>
      <span>Giza</span>
     </div>
    </div>
    <div class="left">
     <button><i class="fa-solid fa-user-plus"></i> Add Firend</button>
    </div>
   </div>
   friends Comment
   <div class="per one">
    <div class="right">
     <a href=""> <img src="user_media/image/bear.jpg" alt="" style="width: 100px; height :100px; border-radius:50%">
     </a>
     <div class="min-me">
      <a href="">
       <h3>Amin Moustafa</h3>
      </a>
      <span>Giza</span>
     </div>
    </div>
    <div class="left">
     <button><i class="fa-brands fa-facebook-messenger"></i> Send Message</button>
    </div>
   </div> -->
  </div>
 </div>
</div>
