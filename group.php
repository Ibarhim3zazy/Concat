<link rel="stylesheet" href="css/group.css">


<?php require_once 'mail_check_ajax.php';
 require_once 'header.php';
     ?>

<div class="home">
 <div class="container">
  <div class="left">
   <div class="contain">
    <h1>Groups</h1>
    <a href="creatGroup.php"> <i class="fa-solid fa-plus"></i> Create new group</a>
    <hr width="100%" size="1" color="#eee">
    <div class="manager">
     <h2>Groups you've managed</h2>
     <div class="box">
      <a href="groupName.php" style="width: 100%;">
       <div class="namegroup">
        <img src="user_media/image/bear.jpg" alt="" width="100px" height="100px">
        <h3>Aesthetics Art Aest Ar sqas</h3>
       </div>
       <i class="fa-solid fa-thumbtack"></i>
      </a>
      <a href="">
       <img src="user_media/image/bear.jpg" alt="" width="100px" height="100px">
       <h3>Aesthetics Art</h3>
      </a>
      <a href="">
       <img src="user_media/image/bear.jpg" alt="" width="100px" height="100px">
       <h3>Aesthetics Art</h3>
      </a>
      <a href="">
       <img src="user_media/image/bear.jpg" alt="" width="100px" height="100px">
       <h3>Aesthetics Art</h3>
      </a>
     </div>
    </div>
    <hr width="100%" size="1" color="#eee">
    <div class="manager">
     <h2>Groups you've Joined</h2>
     <div class="box">
      <a href="">
       <div class="namegroup">
        <img src="user_media/image/bear.jpg" alt="" width="100px" height="100px">
        <h3>Aesthetics Art</h3>
       </div>
       <i class="fa-solid fa-thumbtack"></i>
      </a>
      <a href="">
       <img src="user_media/image/bear.jpg" alt="" width="100px" height="100px">
       <h3>Aesthetics Art</h3>
      </a>
      <a href="">
       <img src="user_media/image/bear.jpg" alt="" width="100px" height="100px">
       <h3>Aesthetics Art</h3>
      </a>
      <a href="">
       <img src="user_media/image/bear.jpg" alt="" width="100px" height="100px">
       <h3>Aesthetics Art</h3>
      </a>
     </div>
    </div>
   </div>
  </div>
  <div class="middle">
   <?php require_once 'groupPosts.php'
     ?>
  </div>
  <div class="right">
   <div class="contain">

   </div>
  </div>
 </div>
</div>
<?php require 'friendsChat.php'; ?>