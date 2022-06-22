<link rel="stylesheet" href="css/group.css">


<?php require_once 'header.php'; require_once 'group_ajax.php';?>

<div class="home">
 <div class="container">
  <div class="left">
   <div class="contain">
    <h1>Groups</h1>
    <a href="creatGroup.php"> <i class="fa-solid fa-plus"></i> Create new group</a>
    <?php
    $user_id = $_SESSION['user_id'];
    $result_group_manage= $con->query("SELECT * FROM create_group WHERE admin_id='$user_id';");
    $num_group_manage = $con->affected_rows;
    if($num_group_manage != 0 && $result_group_manage == true){
      echo '
      <hr width="100%" size="1" color="#eee">
      <div class="manager">
       <h2>Groups you\'ve managed</h2>
       <div class="box">
      ';
      while ($row_group_manage = $result_group_manage-> fetch_assoc()) {
        echo '
          <a href="groupName.php?group_id='.$row_group_manage['group_id'].'" style="width: 100%;">
           <div class="namegroup">
            <img src="group___pic/'.$row_group_manage['group_pic'].'" alt="" width="100px" height="100px">
            <h3>'.$row_group_manage['group_name'].'</h3>
           </div>
           <!-- <i class="fa-solid fa-thumbtack"></i> -->
          </a>
        ';
      }
      echo '
        </div>
          </div>
      ';
    }
    $result_group_joined= $con->query("SELECT group_id FROM group_members WHERE group_members_id='$user_id' AND accept='1';");
    $num_group_joined = $con->affected_rows;
    if($num_group_joined != 0 && $result_group_joined == true){
      echo '
      <hr width="100%" size="1" color="#eee">
      <div class="manager">
       <h2>Groups you\'ve Joined</h2>
       <div class="box">
      ';
      while ($row_group_joined = $result_group_joined-> fetch_assoc()) {
        $group_id = $row_group_joined['group_id'];
        GetGroupInfo($con,$group_id);
        echo '
        <a href="groupName.php?group_id='.$row_group_info['group_id'].'">
         <div class="namegroup">
          <img src="group___pic/'.$row_group_info['group_pic'].'" alt="" width="100px" height="100px">
          <h3>'.$row_group_info['group_name'].'</h3>
         </div>
         <i class="fa-solid fa-thumbtack"></i>
        </a>
        ';
      }
      echo '
        </div>
          </div>
      ';
    }
    ?>
   </div>
  </div>
  <div class="middle">
   <?php require_once 'groupPosts.php'; ?>
  </div>
  <div class="right">
   <div class="contain">

   </div>
  </div>
 </div>
</div>
<?php require 'friendsChat.php'; ?>
