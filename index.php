<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="css/home.css">
 <title>Concat</title>
</head>

<body>
 <?php require_once 'header.php';
        require 'CreatePost.php';
      ?>

 <!-- <div class="conLeftPage">
        <div class="container">
            <div class="con_box">
                <div class="box">
                    <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="35px" height="35px" style="border-radius: 50%;">
                    <span><a href="profile.php">User Name</a></span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-user-group"></i></a>
                    <span><a href="">Friends</a></span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-users"></i></a>
                    <span><a href="">Groups</a></span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-book"></i></a>
                    <span>
                        <a href="">Courses</a>
                    </span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-bookmark"></i></a>
                    <span>
                        <a href="">Saved</a>
                    </span>
                </div>
                <div class="box">
                    <a href=""><i class="fa-solid fa-pager"></i></a>
                    <span><a href="">Pages</a></span>
                </div>
            </div>
            <div class="con_box">
                <h3 class="caption">
                    <i class="fa-solid fa-scissors"></i>
                    Shortcut
                </h3>
                <div class="box">
                    <a href=""><i class="fa-brands fa-cuttlefish"></i></a>
                    <span>
                        <a href="">Example</a>
                    </span>
                </div>
            </div>
        </div>
    </div> -->
 <!-- after last edit -->
 <div class="leftpageside">
  <div class="partone_profile boxmain">
   <div class="back_image">
    <img src="cover___pic/<?= htmlentities($row['cover_pic']); ?>" alt="">
   </div>
   <div class="profile_pic">
    <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="">
   </div>
   <div class="profile_name">
    <a href="profile.php"><?= htmlentities($row['name']); ?></a>
   </div>
   <p class="bio">
    σƙҽყ.. <br>
    ιƚ'ʂ σƙҽყ ɳσƚ ƚσ Ⴆҽ σƙҽყ♡..
   </p>
  </div>
  <div class="parttwo_icons boxmain">
   <div class="box">
    <a href="friends.php">
     <i class="fa-solid fa-user-group"></i>
     <span>Friends</span>
    </a>
   </div>
   <div class="box">
    <a href="group.php">
     <i class="fa-solid fa-users"></i>
     <span>Groups</span>
    </a>
   </div>
   <div class="box">
    <a href="courses.php">
     <i class="fa-solid fa-book"></i>
     <span>
      Courses
     </span>
    </a>
   </div>
   <div class="box">
    <a href="saved.php">
     <i class="fa-solid fa-bookmark"></i>
     <span>
      Saved
     </span>
    </a>
   </div>
   <div class="box">
    <a href="pages.php">
     <i class="fa-solid fa-pager"></i>
     <span>Pages</span>
    </a>
   </div>
   <div class="box">
    <a href="message.php">
     <i class="fa-brands fa-facebook-messenger"></i>
     <span>Messages</span>
    </a>
   </div>
   <div class="box">
    <a href="portfolio.php">
     <i class="fa-solid fa-podcast"></i>
     <span>Portfolio</span>
    </a>
   </div>
  </div>
  <div class="pratthree_shortcut boxmain">
   <h3 class="caption">
    <i class="fa-solid fa-scissors"></i>
    Shortcut
   </h3>
   <div class="box">
    <a href="">
     <i class="fa-brands fa-cuttlefish"></i>
     <span>
      Example
     </span>
    </a>
   </div>
  </div>
 </div>
 <?php require 'friendsChat.php'; ?>
</body>

</html>
