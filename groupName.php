<link rel="stylesheet" href="css/groupname.css">
<title>groupName | Concat</title>
<?php require_once 'mail_check_ajax.php';
 require_once 'header.php';
     ?>

<header>
 <div class="container">
  <div class="cover">
   <img src="user_media/image/cover.jpg" alt="">
   <p>Group By <a href="somepage.php"> Aesthetics Art</a> </p>
  </div>
  <div class="contains">
   <div class="info">
    <div class="right">
     <h2>Aesthetics Art</h2>
     <p>
      <i class="fa-solid fa-earth-africa"></i> Public .
      <a href="member.php" class="people"><span>1.3K</span> members</a>
     </p>
    </div>
    <div class="left">
     <div class="joinbtn">
      <button id="joinclk" onclick="clickbtn()" ondblclick="dbclc()"><i class="fa-solid fa-users"></i> Joined <i
        class="fa-solid fa-caret-down"></i></button>
      <ul id="btnul">
       <button><i class="fa-solid fa-thumbtack"></i> Pin</button>
       <button><i class="fa-solid fa-square-plus"></i> Follow</button>
       <button><i class="fa-solid fa-arrow-right-from-bracket"></i> Leave</button>
       <button><i class="fa-solid fa-info"></i> Report</button>
      </ul>
     </div>
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
   <?php
        require 'CreatePost.php';
      ?>
   <div class="leftSide">
    <div class="groupone">
     <h2>About</h2>
    </div>
   </div>
  </div>
 </div>
</div>
<script src="js/groupname.js"></script>