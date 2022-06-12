<link rel="stylesheet" href="css/joinGroup.css">
<title>groupName | Concat</title>
<script>
  if(window.history.replaceState){
  	window.history.replaceState(null, null, window.location.href);
  }
</script>
<?php
if (isset($_GET['group_id']) == true && $_GET['group_id'] != "") {
  require_once 'header.php'; require 'group_ajax.php';
  $user_id = $_SESSION['user_id'];
  $group_id = $_GET['group_id'];
  GetGroupInfo($con,$group_id);
  $member_id = htmlentities($user_id);
  if (isset($_POST['JoinMember']) == true) {
    if ($row_group_info['type'] == 2) {
      JoinMemberGroup($con,$group_id,$member_id,'0');
    }else {
      JoinMemberGroup($con,$group_id,$member_id);
    }
  }
  if (isset($_POST['RemoveMember']) == true) {
    RemoveGroupMember($con,$group_id,$member_id);
  }
  if ($row_group_info['type'] == 1) {
    $type = 'Public';
  }else {
    $type = 'Private';
  }
  $admin_info_id = $row_group_info['admin_id'];
  $group_id = $row_group_info['group_id'];
  GetMyFriendInfo($con,$admin_info_id);
  CheckUserGroupMember($con,$group_id);
}else {
  header("location: index.php");
  die();
}
?>

<header>
 <div class="container">
  <div class="cover">
   <img src="group___pic/<?= $row_group_info['group_pic'] ?>" alt="">
   <p>Group By <a href="profile.php?friend_id=<?= $row['id'] ?>"><?= $row['name'] ?></a> </p>
  </div>
  <div class="contains">
   <div class="info">
    <div class="right">
     <h2><?= $row_group_info['group_name'] ?></h2>
     <p>
      <i class="fa-solid fa-earth-africa"></i><?= $type ?>
      <a href="member.php?group_id=<?= $row_group_info['group_id'] ?>" class="people"><span>1.3K</span> members</a>
     </p>
    </div>
    <div class="left">
      <?php
      if ($admin_info_id === $user_id) {
        echo '
        <div class="joinbtn">
         <button id="joinclk" onclick="clickbtn()" ondblclick="dbclc()"><i class="fa-solid fa-users"></i> Admin <i
           class="fa-solid fa-caret-down"></i></button>
         <ul id="btnul" style="bottom:-50px; left:10px;">
         <form action="" method="post">
         <input type="hidden" name="PinGroup">
         <button><i class="fa-solid fa-thumbtack"></i> Pin</button>
         </form>
          <!--<form action="" method="post">
          <input type="hidden" name="ReportGroup">
          <button><i class="fa-solid fa-info"></i> Report</button>
          </form>-->
         </ul>
        </div>
        ';
      }elseif (isset($row_group_member['group_members_id']) == true && $row_group_member['group_members_id'] == $user_id) {
          echo '
          <div class="joinbtn">
           <button id="joinclk" onclick="clickbtn()" ondblclick="dbclc()"><i class="fa-solid fa-users"></i> Joined <i
             class="fa-solid fa-caret-down"></i></button>
           <ul id="btnul">
           <form action="" method="post">
           <input type="hidden" name="PinGroup">
           <button><i class="fa-solid fa-thumbtack"></i> Pin</button>
           </form>
            <form action="" method="post">
            <input type="hidden" name="RemoveMember">
             <button><i class="fa-solid fa-arrow-right-from-bracket"></i> Leave</button>
            </form>
            <form action="" method="post">
            <input type="hidden" name="ReportGroup">
            <button><i class="fa-solid fa-info"></i> Report</button>
            </form>
           </ul>
          </div>
          ';
        }else {
          echo '
          <form id="btnul" style="display: block;" action="" method="post">
          <input type="hidden" name="JoinMember">
           <button><i class="fa-solid fa-square-plus"></i> Join</button>
          </form>
          ';
        }
       ?>
     <button>
      <i class="fa-solid fa-plus"></i> Invite
     </button>
    </div>
   </div>
  </div>
 </div>
</header>
<div class="main">

 <div class="container">

  <div class="contains">

   <div class="post">

   </div>

   <div class="leftSide">

    <div class="group one">

     <div class="box">
      <h3>About</h3>
      <hr size="1" color="#eee" width="100%" style="margin: 7px 0 10px;">
      <p class="intro"><?= $row_group_info['group_about'] ?></p>
     </div>

     <div class="box">
      <i class="fa-solid fa-earth-africa"></i>
      <div class="minBox">
       <h3><?= $type ?></h3>
       <p>
         <?php
          if ($row_group_info['type'] == 1) {
            echo 'Anyone can see who\'s in the group and what they post.';
          }else {
            echo 'Only members can see who\'s in the group and what they post.';
          }
          ?>
       </p>
      </div>
     </div>

     <div class="box">
      <i class="fa-solid fa-eye"></i>
      <div class="minBox">
        <?php
        if ($row_group_info['visible'] == 1) {
          echo '<h3>Visible</h3><p>Anyone can find this group.</p>';
        }else {
          echo '<h3>Hidden</h3><p>Only Who Has A Group Link He can find this group.</p>';
        }
         ?>
      </div>
     </div>



     <div class="box">
      <i class="fa-solid fa-users"></i>
      <div class="minBox">
       <h3>General</h3>
      </div>
     </div>

     <div class="box">
      <i class="fa-brands fa-meetup"></i>
      <a href="member.php">Members <span>1.3K</span></a>
     </div>

     <div class="box">
      <i class="fa-solid fa-clock"></i>
      <div class="minBox">
       <h3>History</h3>
       <p>
         <?php
         $Group_date = htmlentities($row_group_info['date']);
         $Group_date = date('F j, Y, g:i a', strtotime($Group_date));
         echo 'Group created on '.$Group_date;
          ?>
       </p>
      </div>
     </div>

    </div>

    <div class="group two">

     <h3>Group rules</h3>

     <hr size="1" color="#eee" width="100%">
     <!-- will edit by designe donn't forget >_< -->
       <pre>
         <?= $row_group_info['group_rules'] ?>

          1. a;lemdsjmlas
          2.a;skcf;lm
          3. asfidjdoDSLKJFNkjSDFNjSBDFKJbSDKJFbkjsdfkjbsejds
       </pre>
    </div>

    <!--  Media Box
      <div class="group three">
     <div class="box">
      <h3>Recent media</h3>
      <div class="media">
       <img src="user_media/image/one.jpg" alt="">
       <img src="user_media/image/two.jpg" alt="">
       <img src="user_media/image/three.jpg" alt="">
       <img src="user_media/image/four.jpg" alt="">
      </div>
      <a href="media_group.php"></a>
     </div>
    </div> -->

   </div>

  </div>

 </div>

</div>

<!-- <script src="js/groupname.js"></script> -->
