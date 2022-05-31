<link rel="stylesheet" href="css/groupname.css">
<title>groupName | Concat</title>
<?php require_once 'header.php'; ?>

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

   <div class="post">
    <?php
    require 'CreatePost.php';
    ?>
   </div>

   <div class="leftSide">

    <div class="group one">

     <div class="box">
      <h3>About</h3>
      <hr size="1" color="#eee" width="100%" style="margin: 7px 0 10px;">
      <p class="intro">
       لا أحد يفهم الجمال الا أولئك الذين جرحتهم السعادة
      </p>
     </div>

     <div class="box">
      <i class="fa-solid fa-earth-africa"></i>
      <div class="minBox">
       <h3>Public</h3>
       <p>
        Anyone can see who's in the group and what they post.
       </p>
      </div>
     </div>

     <div class="box">
      <i class="fa-solid fa-eye"></i>
      <div class="minBox">
       <h3>Visible</h3>
       <p>
        Anyone can find this group.
       </p>
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
        Group created on March 26, 2020
       </p>
      </div>
     </div>

    </div>

    <div class="group two">

     <h3>Group rules</h3>

     <hr size="1" color="#eee" width="100%">
     <ol start="1">
      <li>
       عندما يتم رفض منشور او فيديو ايا كان.. لاي عضو، من فضلك الرجوع لقواعد الجروب او الادمن ممنوع
       المناقشة في التعليقات.
      </li>
      <li>
       welcome here bro..
      </li>
     </ol>
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
<a href="#" class="back"><i class="fa-solid fa-arrows-rotate"></i></a>
<script src="js/groupname.js"></script>
