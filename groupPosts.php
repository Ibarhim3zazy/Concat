<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/general.css">
<link rel="icon" href="images/bear.svg">
<link rel="stylesheet" href="css/groupsPost.css">

<?php require_once 'mail_check_ajax.php';
     ?>


<!-- change design post -->
<!-- ======================= only video==================================== -->
<div class="designPost" id="designPost">
 <div class="contain">
  <div class="box_1">
   <div class="image">
    <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px"
      style="border-radius: 50%;" height="40px ; z-index:2; position:relative">
     <!-- enter to group_name  it is variable-->
     <a href="group.php">
      <img src="user_media/image/background.jpg" alt=""
       style="width: 50px;box-shadow: 0px 0px 6px 1px #fff; height: 50px;border-radius : 10px; position:absolute; z-index:1;left:-55px;top:-47px;border:1px solid #fff;">
     </a>
     <div class="infoProfile">
      <div class="userName">
       <a href="profile.php">
        User Name
       </a>
      </div>
      <div class="data">
       <!-- date must be changed -->
       <a href="">13m <i class="fa-solid fa-clock"></i></a>
       <i class="fas fa-globe-asia"></i>
      </div>
     </div>
   </div>
   <span class="more">
    <i class="fa-solid fa-angle-down"></i>
   </span>
  </div>
  <div class="box_2" id="boxTwo">
   <video src="user_media/videos/n.mp4" controls></video>
  </div>
  <div class="box_3">
   <div class="box_container">
    <div id="like">
     <i class="fa-solid fa-thumbs-up"></i>
    </div>
    <div class="com" id="com">
     <i class="fa-solid fa-comments"></i>
    </div>
    <div class="share" id="share">
     <i class="fa-solid fa-share-nodes"></i>
    </div>
   </div>
   <div class="save" id="save">
    <i class="fa-solid fa-bookmark"></i>
   </div>
  </div>

 </div>
</div>
<!-- ============================ words with video =======================================-->
<div class="designPost" id="designPost">
 <div class="contain">
  <div class="box_1">
   <div class="image">
    <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px"
      style="border-radius: 50%;" height="40px ; z-index:2; position:relative;">
     <!-- enter to group_name  it is variable-->
     <a href="group.php">
      <img src="user_media/image/background.jpg" alt=""
       style="width: 50px; height: 50px;border-radius : 10px; position:absolute; z-index:1;left:-55px;top:-47px;border:1px solid #fff;">
     </a>
     <div class="infoProfile">
      <div class="userName">
       <a href="profile.php">
        User Name
       </a>
      </div>
      <div class="data">
       <!-- date must be changed -->
       <a href="">13m <i class="fa-solid fa-clock"></i></a>
       <i class="fas fa-user-friends"></i>
      </div>
     </div>
   </div>
   <span class="more">
    <i class="fa-solid fa-angle-down"></i>
   </span>
  </div>
  <div class="box_2" id="boxTwo">
   <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum quia optio molestias. Neque repudiandae,
    aspernatur velit molestiae commodi dolorum distinctio iure nobis aliquam dolor modi quisquam dolorem ratione
    minima adipisci.
   </p>
   <video src="user_media/videos/n.mp4" controls></video>
  </div>
  <div class="box_3">
   <div class="box_container">
    <div id="like">
     <i class="fa-solid fa-thumbs-up"></i>
    </div>
    <div class="com" id="com">
     <i class="fa-solid fa-comments"></i>
    </div>
    <div class="share" id="share">
     <i class="fa-solid fa-share-nodes"></i>
    </div>
   </div>
   <div class="save" id="save">
    <i class="fa-solid fa-bookmark"></i>
   </div>
  </div>

 </div>
</div>
<!--========================= only image========================================== -->
<div class="designPost" id="designPost">
 <div class="contain">
  <div class="box_1">
   <div class="image">
    <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px"
      style="border-radius: 50%;" height="40px ; z-index:2; position:relative;">
     <!-- enter to group_name  it is variable-->
     <a href="group.php">
      <img src="user_media/image/background.jpg" alt=""
       style="width: 50px; height: 50px;border-radius : 10px; position:absolute; z-index:1;left:-55px;top:-47px;border:1px solid #fff;">
     </a>
     <div class="infoProfile">
      <div class="userName">
       <a href="profile.php">
        User Name
       </a>
      </div>
      <div class="data">
       <!-- date must be changed -->
       <a href="">13m <i class="fa-solid fa-clock"></i></a>
       <i class="fas fa-user-friends"></i>
      </div>
     </div>
   </div>
   <span class="more">
    <i class="fa-solid fa-angle-down"></i>
   </span>
  </div>
  <div class="box_2" id="boxTwo">
   <img src="user_media/image/background.jpg" alt="">
  </div>
  <div class="box_3">
   <div class="box_container">
    <div id="like">
     <i class="fa-solid fa-thumbs-up"></i>
    </div>
    <div class="com" id="com">
     <i class="fa-solid fa-comments"></i>
    </div>
    <div class="share" id="share">
     <i class="fa-solid fa-share-nodes"></i>
    </div>
   </div>
   <div class="save" id="save">
    <i class="fa-solid fa-bookmark"></i>
   </div>
  </div>

 </div>
</div>
<!--========================= only multiy image========================================== -->
<div class="designPost" id="designPost">
 <div class="contain">
  <div class="box_1">
   <div class="image">
    <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px"
      style="border-radius: 50%;" height="40px ; z-index:2; position:relative;">
     <!-- enter to group_name  it is variable-->
     <a href="group.php">
      <img src="user_media/image/background.jpg" alt=""
       style="width: 50px; height: 50px;border-radius : 10px; position:absolute; z-index:1;left:-55px;top:-47px;border:1px solid #fff;">
     </a>
     <div class="infoProfile">
      <div class="userName">
       <a href="profile.php">
        User Name
       </a>
      </div>
      <div class="data">
       <!-- date must be changed -->
       <a href="">13m <i class="fa-solid fa-clock"></i></a>
       <i class="fas fa-user-friends"></i>
      </div>
     </div>
   </div>
   <span class="more">
    <i class="fa-solid fa-angle-down"></i>
   </span>
  </div>
  <div class="box_2" id="boxTwo">
   <div class="image">
    <img src="user_media/image/background.jpg" alt="">
    <img src="user_media/image/bear.jpg" alt="">
    <img src="user_media/image/bear.jpg" alt="">
    <img src="user_media/image/bear.jpg" alt="">
    <img src="user_media/image/bear.jpg" alt="">
    <img src="user_media/image/background.jpg" alt="">
    <img src="user_media/image/background.jpg" alt="">
    <img src="user_media/image/background.jpg" alt="" class="last">
   </div>

  </div>
  <div class="box_3">
   <div class="box_container">
    <div id="like">
     <i class="fa-solid fa-thumbs-up"></i>
    </div>
    <div class="com" id="com">
     <i class="fa-solid fa-comments"></i>
    </div>
    <div class="share" id="share">
     <i class="fa-solid fa-share-nodes"></i>
    </div>
   </div>
   <div class="save" id="save">
    <i class="fa-solid fa-bookmark"></i>
   </div>
  </div>

 </div>
</div>
<!-- ================================ words with image============================================ -->
<div class="designPost" id="designPost">
 <div class="contain">
  <div class="box_1">
   <div class="image">
    <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px"
      style="border-radius: 50%;" height="40px ; z-index:2; position:relative;">
     <!-- enter to group_name  it is variable-->
     <a href="group.php">
      <img src="user_media/image/background.jpg" alt=""
       style="width: 50px; height: 50px;border-radius : 10px; position:absolute; z-index:1;left:-55px;top:-47px;border:1px solid #fff;">
     </a>
     <div class="infoProfile">
      <div class="userName">
       <a href="profile.php">
        User Name
       </a>
      </div>
      <div class="data">
       <!-- date must be changed -->
       <a href="">13m <i class="fa-solid fa-clock"></i></a>
       <i class="fas fa-user-friends"></i>
      </div>
     </div>
   </div>
   <span class="more">
    <i class="fa-solid fa-angle-down"></i>
   </span>
  </div>
  <div class="box_2" id="boxTwo">
   <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum hic aperiam consectetur temporibus dolores
    molestiae quod labore impedit, vel molestias dolor magnam incidunt, amet vitae culpa. Distinctio doloremque
    libero odit?
   </p>
   <img src="user_media/image/background.jpg" alt="">
  </div>
  <div class="box_3">
   <div class="box_container">
    <div id="like">
     <i class="fa-solid fa-thumbs-up"></i>
    </div>
    <div class="com" id="com">
     <i class="fa-solid fa-comments"></i>
    </div>
    <div class="share" id="share">
     <i class="fa-solid fa-share-nodes"></i>
    </div>
   </div>
   <div class="save" id="save">
    <i class="fa-solid fa-bookmark"></i>
   </div>
  </div>

 </div>
</div>
<!-- ================================ only words ============================================ -->
<div class="designPost" id="designPost">
 <div class="contain">
  <div class="box_1">
   <div class="image">
    <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px"
      style="border-radius: 50%;" height="40px ; z-index:2; position:relative;">
     <!-- enter to group_name  it is variable-->
     <a href="group.php">
      <img src="user_media/image/background.jpg" alt=""
       style="width: 50px; height: 50px;border-radius : 10px; position:absolute; z-index:1;left:-55px;top:-47px;border:1px solid #fff;">
     </a>
     <div class="infoProfile">
      <div class="userName">
       <a href="profile.php">
        User Name
       </a>
      </div>
      <div class="data">
       <!-- date must be changed -->
       <a href="">13m <i class="fa-solid fa-clock"></i></a>
       <i class="fas fa-user-friends"></i>
      </div>
     </div>
   </div>
   <span class="more">
    <i class="fa-solid fa-angle-down"></i>
   </span>
  </div>
  <div class="box_2" id="boxTwo">
   <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum hic aperiam consectetur temporibus dolores
    molestiae quod labore impedit, vel molestias dolor magnam incidunt, amet vitae culpa. Distinctio doloremque
    libero odit?
   </p>
  </div>
  <div class="box_3">
   <div class="box_container">
    <div id="like">
     <i class="fa-solid fa-thumbs-up"></i>
    </div>
    <div class="com" id="com">
     <i class="fa-solid fa-comments"></i>
    </div>
    <div class="share" id="share">
     <i class="fa-solid fa-share-nodes"></i>
    </div>
   </div>
   <div class="save" id="save">
    <i class="fa-solid fa-bookmark"></i>
   </div>
  </div>

 </div>
</div>
<!-- ================================ words with link ============================================ -->
<div class="designPost" id="designPost">
 <div class="contain">
  <div class="box_1">
   <div class="image">
    <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px"
      style="border-radius: 50%;" height="40px ; z-index:2; position:relative;">
     <!-- enter to group_name  it is variable-->
     <a href="group.php">
      <img src="user_media/image/background.jpg" alt=""
       style="width: 50px; height: 50px;border-radius : 10px; position:absolute; z-index:1;left:-55px;top:-47px;border:1px solid #fff;">
     </a>
     <div class="infoProfile">
      <div class="userName">
       <a href="profile.php">
        User Name
       </a>
      </div>
      <div class="data">
       <!-- date must be changed -->
       <a href="">13m <i class="fa-solid fa-clock"></i></a>
       <i class="fas fa-user-friends"></i>
      </div>
     </div>
   </div>
   <span class="more">
    <i class="fa-solid fa-angle-down"></i>
   </span>
  </div>
  <div class="box_2" id="boxTwo">
   <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum hic aperiam consectetur temporibus dolores
    molestiae quod labore impedit, vel molestias dolor magnam incidunt, amet vitae culpa. Distinctio doloremque
    libero odit?
    <a href="javascript:">www.google.com</a>
   </p>

  </div>
  <div class="box_3">
   <div class="box_container">
    <div id="like">
     <i class="fa-solid fa-thumbs-up"></i>
    </div>
    <div class="com" id="com">
     <i class="fa-solid fa-comments"></i>
    </div>
    <div class="share" id="share">
     <i class="fa-solid fa-share-nodes"></i>
    </div>
   </div>
   <div class="save" id="save">
    <i class="fa-solid fa-bookmark"></i>
   </div>
  </div>

 </div>
</div>
<!-- ================================ link ============================================ -->
<div class="designPost" id="designPost">
 <div class="contain">
  <div class="box_1">
   <div class="image">
    <a href="profile.php"><img src="<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px"
      style="border-radius: 50%;" height="40px ; z-index:2; position:relative;">
     <!-- enter to group_name  it is variable-->
     <a href="group.php">
      <img src="user_media/image/background.jpg" alt=""
       style="width: 50px; height: 50px;border-radius : 10px; position:absolute; z-index:1;left:-55px;top:-47px;border:1px solid #fff;">
     </a>
     <div class="infoProfile">
      <div class="userName">
       <a href="profile.php">
        User Name
       </a>
      </div>
      <div class="data">
       <!-- date must be changed -->
       <a href="">13m <i class="fa-solid fa-clock"></i></a>
       <i class="fas fa-user-friends"></i>
      </div>
     </div>
   </div>
   <span class="more">
    <i class="fa-solid fa-angle-down"></i>
   </span>
  </div>
  <div class="box_2" id="boxTwo">
   <a href="javascript:">www.google.com</a>
  </div>
  <div class="box_3">
   <div class="box_container">
    <div id="like">
     <i class="fa-solid fa-thumbs-up"></i>
    </div>
    <div class="com" id="com">
     <i class="fa-solid fa-comments"></i>
    </div>
    <div class="share" id="share">
     <i class="fa-solid fa-share-nodes"></i>
    </div>
   </div>
   <div class="save" id="save">
    <i class="fa-solid fa-bookmark"></i>
   </div>
  </div>

 </div>
</div>
<!-- <script src="js/post.js"></script> -->