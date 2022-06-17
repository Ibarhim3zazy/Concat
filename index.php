<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="css/home.css">
 <title>Concat</title>
</head>

<body>
 <?php require_once 'header.php';

      ?>

 <!-- after last edit -->
 <div class="home-container">
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
 <div class="middle">
    <?php require 'CreatePost.php'; ?>
 </div>
 <div class="rightSide">
   <div class="container">
     <div class="title">
       <i class="fa-solid fa-rectangle-ad"></i>
       advertisement
     </div>
     <div class="box">
        <div class="name-container">
          <img src="images/picsearch4.jpg" alt="" >
          <a href="#">Sara Mohsen</a>
        </div>
        <div class="text">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          </p>
          <img src="images/backsearch7.jpg" alt="">
        </div>
     </div>
     <div class="box">
        <div class="name-container">
          <img src="images/picsearch4.jpg" alt="" >
          <a href="#">Sara Mohsen</a>
        </div>
        <div class="text">
          <!-- <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          </p> -->
          <a href="#">this is a link.com</a>
          <img src="images/backsearch7.jpg" alt="">
        </div>
     </div>
     <div class="box">
        <div class="name-container">
          <img src="images/picsearch4.jpg" alt="" width="50px" height="50px">
          <a href="#">Sara Mohsen</a>
        </div>
        <div class="text">
          <a href="#">this is a link.com</a>
          <p>
            Lorem ipsum dolor sit amet
          </p>
          <!-- <img src="images/backsearch7.jpg" alt=""> -->
        </div>
     </div>
   </div>
 </div>
 </div>
 <?php require 'friendsChat.php'; ?>
</body>

</html>
