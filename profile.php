<link rel="stylesheet" href="css/profile.css">

<?php require 'sign_in_ajax.php';
$user_id = $_SESSION['user_id'];
if (isset($_FILES['inputUploadProfPic']['name']) == true){
  $pic_name = $_FILES['inputUploadProfPic']['name'];
  /* Choose where to save the uploaded file */
  $location = "profile___pic/".$pic_name;
  /* Save the uploaded file to the local filesystem */
  if ( move_uploaded_file($_FILES['inputUploadProfPic']['tmp_name'], $location) ) {
    $con->query("UPDATE sign_up_general SET personal_pic='$pic_name' WHERE user_id='$user_id';");
    header('Location: profile.php');
    exit;
  } else {
    echo 'Failure_pic_upload';
  }
}
if (isset($_FILES['inputUploadCoverPic']['name']) == true){
  $pic_name = $_FILES['inputUploadCoverPic']['name'];
  /* Choose where to save the uploaded file */
  $location = "cover___pic/".$pic_name;
  /* Save the uploaded file to the local filesystem */
  if ( move_uploaded_file($_FILES['inputUploadCoverPic']['tmp_name'], $location) ) {
    $con->query("UPDATE sign_up_general SET cover_pic='$pic_name' WHERE user_id='$user_id';");
    header('Location: profile.php');
  } else {
    echo 'Failure_vid';
  }
}

require_once 'header.php';
?>

<div class="profile_container">
 <form enctype="multipart/form-data" method="post" class="cover_photo" id="change_cover_pic_submit">
  <img src="cover___pic/<?= htmlentities($row['cover_pic']); ?>" alt="">
  <label for="inputUploadCoverPic"><i class="fa-solid fa-camera"></i></label>
  <input id="inputUploadCoverPic" name="inputUploadCoverPic" type="file" style="display: none;" accept="image/*" onchange="change_cover_pic()"/>
</form>
 <div class="container">
  <div class="section_profile">
   <div class="profile_pic">
    <form enctype="multipart/form-data" method="post" class="images" id="change_prof_pic_submit">
     <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="160px" height="160px"
      style="border-radius: 50%; border : 3px solid #fff;">
      <label for="inputUploadProfPic"><i class="fa-solid fa-camera"></i></label>
     <input id="inputUploadProfPic" name="inputUploadProfPic" type="file" style="display: none;" accept="image/*" onchange="change_profile_pic()"/>
   </form>
   </div>
   <div class="profile_name">
    <div class="rightside">
     <h2>user name</h2>
     <div class="friends">
      <!-- this number will be variable -->
      <a href="friends.php"><span>1.4K</span> Friends</a>
      <div class="frindImage">
       <a href="">
        <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px" height="40px"
         style="border-radius: 50%;">
       </a>
       <a href="">
        <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px" height="40px"
         style="border-radius: 50%;">
       </a>
       <a href="">
        <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px" height="40px"
         style="border-radius: 50%;">
       </a>
       <a href="">
        <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px" height="40px"
         style="border-radius: 50%;">
       </a>
       <a href="">
        <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px" height="40px"
         style="border-radius: 50%;">
       </a>
       <a href="friends.php">
        <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="40px" height="40px"
         style="border-radius: 50%;">
        <span><i class="fa-solid fa-ellipsis"></i></span>
       </a>
      </div>
     </div>
    </div>
    <button><i class="fa-solid fa-pen"></i> Edit Profile</button>
   </div>
   <div class="bioBox">
    <div class="bio">
     σƙҽყ.. <br>
     ιƚ'ʂ σƙҽყ ɳσƚ ƚσ Ⴆҽ σƙҽყ♡..
    </div>
    <button>Edit Bio</button>
  </div>
  <?php
    GetPersonalInfo($con);
    if ($_SESSION['user_id'] !== $row['user_id']) {
      echo '
      <div class="client_profile">
       <button><a href="javascript:"><i class="fa-solid fa-user-plus"></i> Add Buddy</a></button>
       <button><a href="javascript:"><i class="fa-brands fa-facebook-messenger"></i> Send
         Message</a></button>
       <span class="more">
        <button id="openMore"><i class="fa-solid fa-ellipsis"></i></button>
        <ul id="more">
         <li>
          <i class="fa-solid fa-ban"></i>
          Block
         </li>
         <li>
          <i class="fa-solid fa-flag"></i> Report
         </li>
        </ul>
       </span>
      </div>
      ';
    }
  ?>
  </div>
 </div>

</div>

<div class="contain">

 <div class="rightPart">
  <div class="info">
   <h3>profile info</h3>
   <div class="live box">
    <i class="fa-solid fa-house-chimney"></i>
    <span>
     Lives in
     <a href="">Mansourah, Ad Daqahliyah, Egypt</a>
    </span>
   </div>
   <div class="form box">
    <i class="fa-solid fa-location-dot"></i>
    <span>
     Form
     <a href="">Egypt</a>
    </span>
   </div>
   <div class="protfolio box">
    <i class="fa-solid fa-podcast"></i>
    <span>
     <a href="portfolio.php">portfolio</a>
    </span>
   </div>
   <div class="collage box">
    <i class="fa-solid fa-graduation-cap"></i>
    <span>
     Studied at
     Faculty of Physical Education, Zagazig University
    </span>
   </div>
   <div class="work box">
    <i class="fa-solid fa-briefcase"></i>
    <span>
     Work at
     Health Square Fitness Club, RAK - Best Gym in RAK
    </span>
   </div>
   <div class="degree box">
    <i class="fa-solid fa-graduation-cap"></i>
    <span>
     Master's in Computer Science
    </span>
   </div>
   <div class="status box">
    <i class="fa-solid fa-heart"></i>
    <span>
     Single
    </span>
   </div>

   <!-- <button>Edit Detailes</button> -->
  </div>

 </div>
 <div class="middle">
<?php
      require 'CreatePost.php';
?>
 </div>
 <div class="links">
  <a href="profile.php" class="pinAccount">
   <img src="profile___pic/<?= htmlentities($row['personal_pic']); ?>" alt="" width="50px" height="50px" style="border-radius: 50%;">
   <span>user name</span>
  </a>
  <div class="pin">
   <a href="posts.php">Posts</a>
   <a href="photos.php">Photos</a>
   <a href="videos.php">Videos</a>
   <a href="links.php">Saved</a>
   <a href="about.php">About</a>
   <a href="friends.php">Friends</a>
  </div>
 </div>
</div>
<?php require 'friendsChat.php'; ?>

<script src="js/profile.js"></script>
